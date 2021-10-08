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
use Discord\WebSockets\Intents;

use Discord\Slash\Client;
use App\Discord\MessagesBot;
use App\Discord\BDD;
use \DateTime;
use \DateInterval;
use App\Service\Utilitaires;
use App\Entity\Evenements;

class ServiceDiscord extends Command
{
    protected static $defaultName = 'app:read';
    private $botId;
    private $discord;
    private $messages;
    private $container;
    private $client;
    private $manager;
    private $channelParties;
    private $channelAnnonces;
    private $evt;

    public function __construct(string $token, string $botId,ContainerInterface $container) {
        parent::__construct();
        $this->botId = $botId;
	    $this->discord = new Discord([
            'token' => $token,
            'loadAllMembers' => true,
            'intents' => Intents::getDefaultIntents() | Intents::GUILD_MEMBERS // Enable the GUILD_MEMBERS intent
        ]);
        $this->client = new Client([
            'loop' => $this->discord->getLoop(), // Discord and Client MUST share event loops
        ]);
        $this->client->linkDiscord($this->discord);
        // Pour accéder à la base de données :
        $this->manager = $container->get('doctrine')->getManager();
        // Pour gérer les messages qu'envoie le bot :
        $this->messages = new MessagesBot($botId, $this->discord, $this->manager);
        // Indicateur "commande creer en cours", son auteur et l'événement associé :
        $this->evt = null;
    }

    /*
     * Cette fonction réagit aux événements :
     * - saisie d'un message par un utilisateur
     */
    public function discordOn() {
		$this->discord->on('ready', function ($discord) {
		    echo "Bot {$this->botId} is ready!", PHP_EOL;
            // Messages à écouter
            $discord->on(EVENT::MESSAGE_CREATE, function($message,$discord){
                //return $this->messages->salut($message);
                echo "\nMessage détecté\n";
                //var_dump($message->interaction);
                // Effacer les messages de commande après 5s.
                if ($message->interaction->type == 2) {
                    $nomCmd = $message->interaction->name; 
                    $nosCommandes = ['creer','maj','inscription','desinscription']; 
                    if (in_array($nomCmd,$nosCommandes)) {
                        // Envoyer ce message en privé à l'utilisateur
                        /*
                        $guild = $this->discord->guilds->get('id',$message->guild_id);
                        $user = $guild->members->get('id',$message->author->id);
                        $user->sendMessage($message->content);
                         */
                        sleep(5);
                        $message->delete();
                    }
                }
            });

                /*
            $discord->on(EVENT::INTERACTION_CREATE, function($interaction){
                echo "\nInteraction détectée\n";
                //var_dump($interaction);
                $typeAction = $interaction->type; // =2 pour une commande
                $donnees = $interaction->data;    // Contenu de la commande
                $nomCmd  = $donnees->name;        // nom de la commande
                $nosCommandes = ['creer','maj','inscription','desinscription'];
                if (in_array($nomCmd,$nosCommandes)) {
                    //$interaction->message->delete();
                    $channelId = $interaction->channel_id; 
                    $channel = $this->discord->channels->get('id',$channelId);
                    //$channel->messages
                }
            });
                 */
		});
    }

    /*
     * Cette fonction réagit aux commandes slash.
     */
    public function slashOn() {
        // Ajout d'une séance de jeux
        $this->client->registerCommand('creer', function (Interaction $interaction, Choices $choices) {
            $this->commandeCreer($interaction, $choices, false);
        });
        // Modification d'une séance de jeux (par son auteur uniquement)
        $this->client->registerCommand('maj', function (Interaction $interaction, Choices $choices) {
            $this->commandeCreer($interaction, $choices, true);
        });
        // Inscription à une séance
        $this->client->registerCommand('inscription', function (Interaction $interaction, Choices $choices) {
            $this->commandeParticiper($interaction, $choices, true);
        });
        // Désinscription d'une séance
        $this->client->registerCommand('desinscription', function (Interaction $interaction, Choices $choices) {
            $this->commandeParticiper($interaction, $choices, false);
        });
    }

    private function formaterEvt($nom) {
        $texte  = $nom." vous convie à un événement:";
        $texte.= "\nTitre : ".$this->evt->getTitre();
        $texte .= "\nDate  : le ".Utilitaires::traduireDate($this->evt->getDateDebut()->format('Y-m-d'));
        if ($this->evt->getHeureFin() > $this->evt->getHeureDebut()) { 
            $texte .= "\nHoraire: de ".$this->evt->getHeureDebut()->format('H:i');
            $texte .= " à ".$this->evt->getHeureFin()->format('H:i');
        } else {
            $texte .= "\nHeure : dès ".$this->evt->getHeureDebut()->format('H:i');
        }
        $texte .= "\n".$this->evt->getCapacite()." joueurs peuvent s'inscrire.";
        $texte .= "\nDescription :\n"; 
        $texte .= $this->evt->getDescription();
        return $texte;
    }

    /*
     * Cette fonction inscrit un joueur si $inscrire=true, et le désinscrit sinon.
     */
    private function commandeParticiper(Interaction $interaction, Choices $choices, bool $inscrire) {
        $auteur  = $interaction->member->user;

        // Vérification de la saisie du paramètre nb
        $nb = intval($choices->nb);
        $txt = "Votre inscription";
        if ($nb > 1) {
            // Un nombre a été saisi, il est valide, et supérieur à 1. Changer le texte affiché.
            $txt = "L'inscription des ".strval($nb)." joueurs";
        } else {
            $nb = 1;
        }
        $txt .= " vient d'être effectuée.";

        // Trouver l'id de l'événement en base en se basant sur le numéro du canal
        $channelId = $interaction->channel_id;
        $evt = BDD::getEvtByChannel($this->manager, $channelId);
        $idEvt = 0;
        if ($evt != null) { $idEvt = $evt->getId(); }
        if ($idEvt === 0) {
            $texte  = "Pour vous inscrire ou vous désinscrire d'une séance, placez-vous dans son canal, que vous trouverez dans le salon Parties. ";
            $texte .= "Puis tapez /inscription (suivi d'un chiffre, si vous ne venez pas seul) ou /desinscription. \n ";
            $texte .= "Vous devez pour cela être enregistré sur le site et avoir y renseigné votre identifiant Discord.";
            $interaction->reply($texte);
            return;
        }

        // Trouver l'utilisateur en base en fonction de son id.
        $idUser = BDD::findUserByDiscordId($this->manager, $auteur->id);
        if ($idUser === 0) {
            $texte  = "Vous n'êtes pas enregistré sur le site, ou votre identifiant Discord n'a pas été mis à jour.\n ";
            $texte .= "Connectez-vous à votre compte (ou créez-en un) sur : https://renardenjoue.araetech.eu\n ";
            $texte .= "puis renseignez votre id discord (que vous trouverez en cliquant sur votre nom, dans discord, avec le bouton droit de la souris, ";
            $texte .= "puis en cliquant sur Copier l'identifiant en bas du menu).";
            $texte .= "\nRevenez ici quand c'est fait, ou ";
            if ($inscrire) { $texte .= "inscrivez-vous"; }
            else { $texte .= "désinscrivez-vous"; }
            $texte .= " depuis le site.";
            $interaction->reply($texte);
            return;
        }


        // Vérifier que cet utilisateur n'est pas déjà inscrit
        $participant = BDD::ctrlParticipant($this->manager, $idUser, $idEvt);
        if ( ($participant!=null) && $inscrire) { // La personne cherche à s'inscrire mais elle l'est déjà.
            $nbInscrits = $participant->getNbJoueurs();
            $precision  = "."; 
            if ($nbInscrits > 1) { $precision = " (pour ".$nbInscrits." personnes)."; } 
            $interaction->reply("\nVous êtiez déjà inscrit".$precision);
            return;
        }
        if ( ($participant==null) && !$inscrire) { // La personne cherche à se désinscrire mais elle ne l'est pas encore.
            $interaction->reply("\nVous n'êtiez pas encore inscrit, de toute façon.");
            return;
        }

        // Contrôle du nombre de places restantes
        if ($inscrire) {
            $nbPlacesPrises = BDD::nbPlacesPrises($this->manager, $idEvt);
            $nbPlacesDispo  = $evt->getCapacite() - $nbPlacesPrises;
            if ($nbPlacesDispo < 1) {
                $interaction->reply("Navré, mais cette séance affiche déjà complet.");
                return;
            }
            if ($nbPlacesDispo < $nb) {
                $interaction->reply("Désolé, il ne reste que ".$nbPlacesDispo ." places pour cette séance.");
                return;
            }
        }

        if ($inscrire) {
            // Créer une inscription pour cet utilisateur
            BDD::saveParticipant($this->manager, $idUser, $idEvt, $nb);
        } else {
            // Désinscrire cet utilisateur
            BDD::delParticipant($this->manager, $participant);
            $txt = "Vous n'êtes plus inscrit.";
        }

        $interaction->reply($txt);
    }

    /*
     * Si $maj est false, il s'agit d'une création de séance. Les parametres date et titre seront obligatoires.
     * Si $maj est true, il s'agit d'une modification.
     * - Seul l'auteur de cette séance peut le faire.
     * - La date ne peut pas être modifiée.
     */
    private function commandeCreer(Interaction $interaction, Choices $choices, bool $maj) {
        $auteur  = $interaction->member->user;
        $canal = $interaction->channel_id;
        $this->channelParties  = $interaction->guild->channels->get('id',$_ENV['ID_PARTIES']);
        $this->channelAnnonces = $interaction->guild->channels->get('id',$_ENV['ID_ANNONCES']);
        // Ce texte signalera les anomalies de saisie et la manière dont elles ont été corrigées.
        $remarques = ' ';

        if ($maj) {
            // En cas de mise à jour, récupérer l'événement en base.
            $this->evt = BDD::getEvtByChannel($this->manager, $canal);

            if ($this->evt == null) {
                // Ce canal ne correspond à aucun événement.
                $remarques  = "Aucun événement de la base de donnée n'est associé au canal dans lequel vous vous trouvez.\n";
                $remarques .= "Il vous faut aller dans le salon créé dans Parties au moment où vous avez utilisé la commande /creer. ";
                $remarques .= "Vous pouvez le retrouver grâce à sa date, qui est le nom du salon.";
                $interaction->reply($remarques);
                return;
            }
            // L'événement existe. L'auteur est-il le même que celui de cette action de mise à jour ?
            if ($this->evt->getUserId() != $auteur->id) {
                // Impossible de modifier l'événement d'un autre.
                $interaction->reply("Vous n'êtes pas l'auteur de cet événement, vous ne pouvez pas le modifier.");
                return;
            }
            $dateAffichee = $this->evt->getDateDebut();
        } else {
            // On commence à créer l'objet Evenements qui sera sauvegardé en base.
            $this->evt = new Evenements();
            // Renseigner l'auteur de l'événement
            $this->evt->setUserId(strval($auteur->id));

            // Controle de validité de la date
            $dateText = $choices->date;
            if ( (strlen($dateText) < 10) || ((strtotime($dateText)) === false) ) {
                $dateDuJour = new DateTime();
                $dateDuJourText = "Ex : aujourd'hui=".$dateDuJour->format("Y-m-d");
                $interaction->reply($dateText . " n'est pas au format attendu.\nTapez année(4 chiffres)-mois(2 chiffres)-jour(2 chiffres) sans oublier les tirets.\n" . $dateDuJourText);
                return;
            }
            $dateAffichee = new DateTime($dateText);

            $this->evt->setDateDebut($dateAffichee);
            $this->evt->setDateFin($dateAffichee);
        }

        // Cette chaine de caractères signalera les valeurs mises par défaut.
        $parDefaut = '';
        $virgule = '';
        // Un 's' sera ajouté à chaque valeur par défaut : à la fin, l'avant dernier élément du tableau sera 's' s'il y a plusieurs valeurs par défaut, '' sinon.
        $pluriel = ['',''];

        // Nombre de participants
        $nb = intval($choices->nombre);
        if ($nb == 0) {
            $nb = 4;
            $parDefaut .= $virgule."4 invités";
            $virgule = ', ';
            $pluriel[] = 's';
        }
        $this->evt->setCapacite($nb);

        // Heure de début
        $heureD = $choices->heure;
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
            $pluriel[] = 's';
        }

        $this->evt->setHeureDebutFromString($heureD);

        // Heure de fin par défaut : 3h après.
        $troisHeures = new DateInterval('PT3H');
        $hF = new DateTime($this->evt->getHeureDebut()->format('H:i'));
        $hF->add($troisHeures);
        $this->evt->setHeureFin($hF);
        // Contrôle de l'heure de fin saisie
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
        } else {
            $parDefaut .= $virgule."fin vers ".$hF->format('H:i');
            $virgule = ', ';
            $pluriel[] = 's';
        }
        
        // Titre
        $titre = $choices->titre;
        if (isset($titre)) {
            $this->evt->setTitre($titre);
        }

        $description = $choices->description;
        if (isset($description) && strlen($description)>0) {
            $this->evt->setDescription($description);
        } else {
            $this->evt->setDescription("Pas d'infos pour l'instant.");
        }

        if ($maj) {
            // Mise à jour de l'événement en base de données
            BDD::saveEvt($this->manager,$this->evt);
        } else {
            // Création d'un canal dans la catégorie Parties
            $newChannel = $interaction->guild->channels->create([
                 'category'  => $this->channelParties,
                 'parent_id' => $this->channelParties->id,
                 'owner_id'  => $auteur->id,
                 'name'      => $dateAffichee->format('Y m d')." ".$this->evt->getTitre(),
                 'type'      => Channel::TYPE_TEXT,
                 'topic'     => $titre,
                 'nsfw'      => false
             ]);
             $interaction->guild->channels->save($newChannel)->done(function (Channel $channel) use ($auteur) {
                        $texte = $auteur->username." a ajouté un événement : ".$this->evt->getTitre().".";
                        $url = "\nVous pouvez vous y inscrire et voir les détails ici : https://discord.com/channels/".$channel->guild_id.'/'.$channel->id;
                        $url.= "\n(Prérequis : renseigner votre identifiant discord sur le site de l'asso)";
                        $this->channelAnnonces->sendMessage($texte.$url);

                        $this->evt->setChannelId(strval($channel->id)); 
                        BDD::saveEvt($this->manager,$this->evt);

                        $texte = $this->formaterEvt($auteur->username);
                        $channel->sendMessage($entete.$texte)->done( function ($msg) use ($channel) {
                            // Une fois le message créé, on l'épingle.
                            $channel->pinMessage($msg)->done( function ($x) {} );
                        });
            });

             // Valeurs par défaut éventuelles à signaler.
             if (strlen($parDefaut) > 0) {
                 $s = $pluriel[count($pluriel)-2];
                 $remarques .= "\n Valeur".$s." par défaut ajoutée".$s." : ".$parDefaut.".";
            }
            $interaction->reply("Evénement du ".$dateAffichee->format('d/m/Y')." créé.".$remarques);
            return;
        }

        // Cas de la mise à jour : il faut aussi modifier le message dans Parties.
        // Récupération de l'objet channel
        $channel = $interaction->guild->channels->get('id', $canal);
        // Lecture des messages du channel : récupérer le premier message.
        $channel->getPinnedMessages()->done(function ($liste) use ($channel, $auteur) {
            foreach ($liste as $msg) {
                // Parcourir les messages pour changer celui du bot.
                if ($msg->author->id == $this->botId) {
                    $channel->getMessage($msg->id)->done( function ($pinnedMsg) use ($channel, $auteur) {
                        $pinnedMsg->content = $this->formaterEvt($auteur->username);
                        $channel->messages->save($pinnedMsg)->done(function ($x) { });
                    });
                    break;
                }
            }
        });
 
        $interaction->reply("Evénement du ".$dateAffichee->format('d/m/Y')." modifié.".$remarques);
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
