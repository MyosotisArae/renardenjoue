<?php
namespace App\Service;

use Discord\Discord;
use Discord\Voice\VoiceClient;
use Discord\Parts\Channel\Channel;
use Discord\Parts\User\Game;
use Discord\Parts\Embed;
use Discord\Factory\Factory;
use Discord\WebSockets\Event;
use Discord\Parts\Guild\Guild;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Discord\Slash\Parts\Interaction;
use Discord\Slash\Parts\Choices;

use Discord\Slash\Client;
use App\Discord\MessagesBot;
use App\Discord\Evt;
use \DateTime;
use \DateInterval;
use App\Service\Utilitaires;
use App\Entity\Evenements;

class ServiceDiscord extends Command
{
    // Parce que c'est une commande, il lui faut un nom :
    protected static $defaultName = 'app:read';
    private $botId;
    private $discord;
    private $messages;
    private $container;
    private $client;
    private $manager;
    private $derniereCommande;
    private $auteurDerniereCommande;
    private $channelParties;
    private $channelAnnonces;
    private $evt;

    public function __construct(string $token, string $botId,ContainerInterface $container) {
        parent::__construct();
        $this->botId = $botId;
	    $this->discord = new Discord([
		    'token' => $token,
        ]);
        $this->client = new Client([
            'loop' => $this->discord->getLoop(), // Discord and Client MUST share event loops
        ]);
        $this->client->linkDiscord($this->discord);
        // Pour accéder à la base de données :
        $this->manager = $container->get('doctrine')->getManager();
        // Pour gérer les messages qu'envoie le bot :
        $this->messages = new MessagesBot($botId, $this->discord, $this->manager);
        // Dernière commande tapée, son auteur et l'événement associé :
        $this->derniereCommande = null;
        $this->auteurDerniereCommande = null;
        $this->evt = null;
    }

    public function discordOn() {
		$this->discord->on('ready', function ($discord) {
		    echo "Bot {$this->botId} is ready!", PHP_EOL;
            // Messages à écouter
            $discord->on(EVENT::MESSAGE_CREATE, function($message,$discord){
                return $this->messages->salut($message);
            });
            $discord->on(EVENT::CHANNEL_CREATE, function($channel){
                echo 'Création du channel '.$channel->id.'\n';
                if ($channel->parent_id == $this->channelParties->id)
                {
                    if ($this->auteurDerniereCommande != null) {
                        // Si le canal a été créé dans Parties,
                        // - ajouter, dans annonces, un message contenant un lien vers ce canal
                        // - ajouter un message dans ce nouveau canal.
                        $entete = $auteurDerniereCommande." a ajouté un événement :";
                        $texte = $this->formaterEvt();
                        $url = '\nVous pouvez le retrouver ici : https://discord.com/channels/'.$channel->guild_id.'/'.$channel->id;
                        $this->channelAnnonces->sendMessage($entete.$texte.$url);

                        $entete = $this->auteurDerniereCommande." vous invite :";
                        $channel->sendMessage($entete.$texte);
                        $this->auteurDerniereCommande = null;
                    }
                }
            });
            $discord->on(EVENT::INTERACTION_CREATE, function($message,$discord){
                echo "L'auteur de cette action est : ".$message->member->user->username.'\n';
                if ($this->derniereCommande != null) { 
                    $this->auteurDerniereCommande = $message->member->user->username;
                    $this->derniereCommande = null;
                }
            });
		});
    }

    private function formaterEvt() {
        $texte  = "\nTitre : ".$this->evt->getTitre();
        $texte .= "\nDate  : le ".Utilitaires::traduireDate($this->evt->getDateDebut()->format('Y-m-d'));
        $texte .= "\nHeure : dès ".$this->evt->getHeureDebut()->format('H:i');
        $texte .= "\n".$this->evt->getCapacite()." joueurs peuvent s'inscrire.";
        $texte .= "\nDescription :\n"; 
        $texte .= $this->evt->getDescription();
        return $texte;
    }

    private function commandeCreer(Interaction $interaction, Choices $choices) {
        $this->channelParties  = $interaction->guild->channels->get('id',$_ENV['ID_PARTIES']);
        $this->channelAnnonces = $interaction->guild->channels->get('id',$_ENV['ID_ANNONCES']);

        // Controle de validité de la date
        $dateText = $choices->date;
        if ( (strlen($dateText) < 10) || ((strtotime($dateText)) === false) ) {
            $dateDuJour = new DateTime();
            $dateDuJourText = "Ex : aujourd'hui=".$dateDuJour->format("Y-m-d");
            $interaction->reply($dateText . " n'est pas au format attendu.\nTapez année(4 chiffres)-mois(2 chiffres)-jour(2 chiffres) sans oublier les tirets.\n" . $dateDuJourText);
            return;
        }
        $dateAffichee = new DateTime($dateText);
        $dateAfficheeText = Utilitaires::traduireDate($dateText);
        $dateTitreText = $dateAffichee->format('Y m d');

        // Formatage de la description
        $description = $dateAfficheeText;

        // On commence à créer l'objet Evenements qui sera sauvegardé en base.
        $this->evt = new Evenements();
        $this->evt->setDateDebut($dateAffichee);
        $this->evt->setDateFin($dateAffichee);

        // Ce texte signalera les anomalies de saisie et la manière dont elles ont été corrigées.
        $remarques = ' ';
        // Celui-ci signalera les valeurs mises par défaut.
        $parDefaut = '';
        $virgule = '';

        // Nombre de participants
        $nb = strval($choices->nombre);
        if (isset($nb) && (strlen($choices->nombre)>0)){
            if (ctype_digit($nb)) {
                if ($nb === 0) {
                    $remarques .= "\n Pas d'invité ? Vous vouliez nous annoncer que vous allez jouer tout seul ? Allez, on va quand même en mettre un.";
                    $nb = 1;
                }
            } else {
                $nb = 4;
                $remarques .= "\n '".$nb."' n'étant pas vraiment un nombre, disons 4 invités. ";
            }
        } else {
            $nb = 4;
            $parDefaut .= $virgule."4 invités";
            $virgule = ', ';
        }
        $this->evt->setCapacite($nb);

        // Heure de début
        $heureD= $choices->heure;
        if (isset($heureD)) {
            $dateTestText = "2021-09-30 ".$heureD.":00";
            if (strtotime($dateTestText) === false) {
                // L'heure saisie n'est pas valide. On met 14h à la place.
                $heureD = "14:00";
                $remarques .= "\n Pour l'heure d'arrivée, on va mettre 14h plutôt que '".$heureD."'.";
            } else {
                $heureD = (new DateTime($dateTestText))->format('H:i');
            }
        } else {
            $heureD = "14:00";
            $parDefaut .= $virgule."arrivée à 14h";
            $virgule = ', ';
        }
        $this->evt->setHeureDebutFromString($heureD);

        // Heure de fin par défaut : 3h après.
        $troisHeures = new DateInterval('PT3H');
        $this->evt->setHeureFin($this->evt->getHeureDebut()->add($troisHeures));
        $heureF= $choices->fin;
        if (isset($heureF)) {
            $dateTestText = "2021-09-30 ".$heureF.":00";
            if (strtotime($dateTestText) === false) {
                // L'heure saisie n'est pas valide. On conserve l'heure de fin par défaut.
                $remarques .= "\n Je ne comprends pas cette heure : '".$heureF."'. Je vais plutôt enregistrer '".$this->evt->getHeureFin()->format('H:i')."'."; 
            } else {
                // Cette date est correcte, on l'enregistre.
                $this->evt->setHeureFin(new Datetime($dateTestText));
            }
        }
        
        // Titre
        $titre = $choices->titre;
        $this->evt->setTitre($titre);

        // La description est obligatoire.
        $description = $choices->description;
        if (isset($description) && strlen($description)>0) {
            $this->evt->setDescription($description);
        } else {
            $this->evt->setDescription("Pas d'infos pour l'instant.");
        }

        // Enregistrement de l'événement en base de données
        $this->manager->persist($this->evt);
        $this->manager->flush();

        // Création d'un canal dans la catégorie Parties
        $newChannel = $interaction->guild->channels->create([
            'category'  => $this->channelParties,
            'parent_id' => $this->channelParties->id,
            'name'      => $dateTitreText,
            'type'      => Channel::TYPE_TEXT,
            'topic'     => $titre,
            'nsfw'      => false
        ]);
        $interaction->guild->channels->save($newChannel)->done(function (Channel $channel) { });

        $this->derniereCommande = $dateAfficheeText;
        // Valeurs par défaut éventuelles à signaler.
        if (strlen($parDefaut) > 0) {
            $remarques = "\n Comme ce n'était pas précisé, j'ai ajouté : ".$parDefaut.".";
        }
        
        // Sauvegarde en base de données de cet evt.

        $interaction->reply("Un événement a été ajouté pour le ".$dateAfficheeText.".".$remarques);
    }

    public function slashOn() {
        $this->client->registerCommand('creer', function (Interaction $interaction, Choices $choices) {
            $this->commandeCreer($interaction, $choices);
        });
        $this->client->registerCommand('lire', function (Interaction $interaction, Choices $choices) {
            //Evt::afficherProchainsEvts($this->manager);
            return Command::SUCCESS;
        });
    }

    public function runLoop() {
        $this->discord->run();
    }

    // Parce que c'est une commande, il faut implémenter execute :
    public function execute(InputInterface $input, OutputInterface $output): int {
        return Command::SUCCESS;

        // Some error happened during the execution
        // return Command::FAILURE;

        // Incorrect command usage; e.g. invalid options
        // or missing arguments
        // return Command::INVALID
    }
}
?>
