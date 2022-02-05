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
use App\Discord\MsgErreur;
use App\Discord\MessagesBot;
use App\Discord\Inscription;
use App\Discord\ListeInscriptions;
use App\Discord\BDD;
use \DateTime;
use \DateInterval;
use App\Service\Utilitaires;
use App\Entity\User;
use App\Entity\Evenements;
use React\EventLoop\Factory as attendre;

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
    private $idParties;
    private $idAnnonces;

    public function __construct(string $token, string $botId, string $idParties, string $idAnnonces, ContainerInterface $container) {
        parent::__construct();
        $this->botId = $botId;
	    $this->discord = new Discord([
            'token' => $token,
            'loadAllMembers' => true,
            //'logger' => new \Monolog\Logger('New logger'),
            //'pmChannels' => true,
            'intents' => Intents::getDefaultIntents() | Intents::GUILD_MEMBERS // Enable the GUILD_MEMBERS intent
        ]);
        $this->client = new Client([
            'loop' => $this->discord->getLoop(), // Discord and Client MUST share event loops
        ]);
        $this->client->linkDiscord($this->discord);
        // Pour réduire la taille des fichiers de debug :
        //$this->discord->logger->pushHandler(new DiscordHandler\DiscordHandler('Discord Webhook url', 'name', 'subname', 'ERROR'));
        // Canaux sur lesquels le bot écrit
        $this->idParties = $idParties;
        $this->idAnnonces = $idAnnonces;
        // Pour accéder à la base de données :
        $this->manager = $container->get('doctrine')->getManager();
        // Pour gérer les messages qu'envoie le bot :
        $this->messages = new MessagesBot($botId, $this->discord, $this->manager);
        // Evenement à mémoriser pour la fonction formaterEvt
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
                // Effacer les messages de commande après 5s.
              if ($message->interaction) {
                if ($message->interaction->type == 2) {
                    $nomCmd = $message->interaction->name; 
                    $nosCommandes = ['creer','maj','inscription','desinscription']; 
                    if (in_array($nomCmd,$nosCommandes)) {
                        // Durée proportionelle à la taille du message : 1s pour 15 lettres
                        $duree = intval(strlen($message->content) / 15);
                        //echo "\nAttente de ".$duree."s\n";
                        $this->discord->getLoop()->addTimer($duree, function () use ($message) {
                            $message->delete();
                        });
                    }
                }
              }
            });

                /*
            $discord->on(EVENT::INTERACTION_CREATE, function($interaction){
                echo "\nInteraction détectée\n";
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
        /// Inscription à une séance
        $this->client->registerCommand('inscription', function (Interaction $interaction, Choices $choices) {
            $this->commandeParticiper($interaction, $choices, true);
        });
        // Désinscription d'une séance
        $this->client->registerCommand('desinscription', function (Interaction $interaction, Choices $choices) {
            $this->commandeParticiper($interaction, $choices, false);
        });
        // Affichage des personnes inscrites à une séance
        $this->client->registerCommand('qui', function (Interaction $interaction, Choices $choices) {
            $this->commandeQui($interaction);
        });
    }

    function changerBRenRetourChariot($chaine)
    {
    	$resultat = trim($chaine);
    	$resultat = str_replace("<br>","\n",$resultat);
    	return $resultat;
    }

    private function formaterEvt($interaction) {
        // L'organisateur de la séance n'est pas forcément l'auteur de cette commande.
        // C'est l'idUser de l'événement qu'il faut utiliser.
        $guild = $this->discord->guilds->get('id',$interaction->guild_id);
        $mb = $guild->members->get('id',$this->evt->getUserId());
        $nom = $mb->user->username;
        $prenom = $mb->nick;
        if ($prenom != null) {
            if (strlen($prenom) > 0) { $nom = $prenom; }
        }
        // Titre en gras
        $texte = "🎲\n";
        $texte .= "♟                                  __°°° **".$this->evt->getTitre()."** °°°__\n";
        $texte .= ucfirst($nom)." invite ".$this->evt->getCapacite()." personnes le ";
        $texte .= Utilitaires::traduireDate($this->evt->getDateDebut()->format('Y-m-d'))." ";
        if (MsgErreur::isSuperieurH($this->evt->getHeureFin(), $this->evt->getHeureDebut())) { 
            $texte .= "de ".$this->evt->getHeureDebut()->format('H:i');
            $texte .= " à ".$this->evt->getHeureFin()->format('H:i');
        } else {
            $texte .= "dès ".$this->evt->getHeureDebut()->format('H:i');
        }
        $texte .= ".\n\n```".$this->changerBRenRetourChariot($this->evt->getDescription())."```\n";

        $listeParticipants = $this->getQui($this->evt, $interaction);
        if ($listeParticipants->isErreur()) {
            $texte .= "\n*Nombre d'invités attendu : ".$this->evt->getCapacite()."*";
        } else {
            $texte .= $this->formaterInscriptionsEnListe($listeParticipants);
            $reste = $this->evt->getCapacite() - $listeParticipants->combienDePersonnes();
            $texte .= "\n*";
            if ($reste == 0) {
                $texte .= "C'est complet !*";
                return $texte;
            } else {
                if ($reste == 1) {
                    $texte .= "Il reste une place.";
                } else {
                    $texte .= "Il reste ".$reste." places.";
                }
            }
            $texte .= "*";
        }
        // Date limite
        // Si c'est le jour même, on ne l'indique pas.
        $dateLimite = $this->evt->getLimite();
        if (MsgErreur::isSameDates($dateLimite, $this->evt->getDateDebut())) {
            return $texte;
        }
        // Si la date limite est passée, indiquer qu'on ne peut plus s'inscrire.
        if (MsgErreur::isPasse($dateLimite)) {
            $texte .= "\n*Il est trop tard pour s'inscrire.*";
        } else {
            $dateBienPresentee = Utilitaires::traduireDate($dateLimite->format('Y-m-d'));
            $texte .= "\n*Date limite d'inscription : le ".$dateBienPresentee."*";
        }

        return $texte;
    }

    /*
     * Affiche la liste des personnes qui sont inscrites à la séance associée au channel où l'on se trouve.
     */
    private function commandeQui(Interaction $interaction) {
        $listeParticipants = $this->getQui($this->evt, $interaction);
        if ($listeParticipants->isErreur()) {
            $interaction->reply($listeParticipants->getErreur());
            return;
        }
        $interaction->reply($this->formaterInscriptionsEnTableau($listeParticipants));
    }

    /*
     * Retourne un tableau contenant la liste des personnes qui sont inscrites à la séance associée au channel où l'on se trouve.
     * Les éléments sont des tableaux :
     * - colonne 1 : nombre de participants
     * - colonne 2 : nom du participant sur le site
     * - colonne 3 : nom du participant sur discord
     * En cas d'erreur (le canal dans lequel la commande a été faite n'est pas associé à un événement), la fonction retourne
     * une ligne d'un seul élément : ['erreur','...message...','']
     */
    private function getQui($evt, $interaction) {
        $listeParticipants = new ListeInscriptions();
        //$channelId = $interaction->channel_id;
        //$evt = BDD::getEvtByChannel($this->manager, $channelId);
        if ($evt == null) {
            $listeParticipants->setErreur("Ce canal n'est associé à aucun événement. Soit vous n'êtes pas au bon endroit, soit l'événement a été annulé.");
            return $listeParticipants;
        }
        // L'événement existe. Récupérer la liste de ses inscrits.
        $tableauParticipants = BDD::getParticipants($this->manager,$evt->getId());
        if (count($tableauParticipants ) == 0) {
            // Aucune inscription
            return $listeParticipants;
        }

        // Liste des membres de la guilde
        $guild = $this->discord->guilds->get('id',$interaction->guild_id);
        $listeMembres = $guild->members;
        
        // Alimentation du tableau listant les participants
        foreach ($tableauParticipants as $p) {
            // Utilisateur du site
            $idUserSite = $p->getIdUser();
            $userSite = BDD::getUser($this->manager,$idUserSite);
            if ($userSite == null) { continue; } // Théoriquement, il est impossible que cet utilisateur n'existe pas, mais restons prudents.
            // Création de l'objet Inscription
            $ins = new Inscription();
            $ins->nomSite = $userSite->getNom();
            // Utilisateur de Discord
            $mbDiscord = $listeMembres->get('id',$userSite->getUserId());
            $ins->nomDiscord = $mbDiscord->user->username;
            // Nombre d'inscrits pour ce participant
            $ins->nb = intval($p->getNbJoueurs());
            // Ajout de cette ligne à la liste
            $listeParticipants->add($ins);
        }

        return $listeParticipants;
    }

    private function formaterInscriptionsEnListe($listeParticipants) {
        $tailleTableau = $listeParticipants->combienDeMembres();
        if ($tailleTableau == 0) {
            return "\nPersonne ne s'est encore inscrit.";
        }
        $texte = "\nParticipants :";
        while ($tailleTableau > 0) {
            $tailleTableau -= 1;
            $p = $listeParticipants->get($tailleTableau);
            $texte .= "\n- ".$p->nomDiscord;
            // Si les 2 pseudos sont différents, préciser celui du site (comparaison Case unsensitive)
            if (strcasecmp($p->nomDiscord,$p->nomSite) != 0) {
                $texte .= " (".$p->nomSite." sur le site)";
            }
            $n = intval($p->nb) - 1;
            $autre = "";
            while ($n > 0) {
                $n -= 1;
                $texte .= "\n- un".$autre." ami de ".$p->nomDiscord;
                $autre = " autre";
            }
        }
        return $texte;
    }

    private function formaterInscriptionsEnTableau($listeParticipants) {
        $tailleColonne1 = 4;
        $tailleColonne2 = 30;
        $tailleColonne3 = 30;
        $texte  = "\n`| ";
        $texte .= str_pad("nom (site) ", $tailleColonne2," ", STR_PAD_BOTH)." | " ;
        $texte .= str_pad("nom (Discord) ", $tailleColonne3," ", STR_PAD_BOTH)." |`" ;
        $tailleTableau = $listeParticipants->combienDeMembres();
        if ($tailleTableau == 0) {
            return "Il n'y a pas encore eu d'inscription.";
        } 
        while ($tailleTableau > 0) {
            $tailleTableau -= 1;
            $p = $listeParticipants->get($tailleTableau);
            // Texte à afficher
            $texte .= "\n`| ";
            $texte .= str_pad($p->nomSite, $tailleColonne2," ", STR_PAD_BOTH)." | " ;
            $texte .= str_pad($p->nomDiscord, $tailleColonne3," ", STR_PAD_BOTH)." |`" ;
            $n = intval($p->nb) - 1;
            while ($n > 0) {
                $n -= 1;
                $texte .= "\n`| ";
                $texte .= str_pad('"', $tailleColonne2," ", STR_PAD_BOTH)." | " ;
                $texte .= str_pad('"', $tailleColonne3," ", STR_PAD_BOTH)." |`" ;
            }
        }
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
            $texte  = "Pour vous inscrire ou vous désinscrire d'une séance, placez-vous dans son canal, que vous trouverez dans la catégorie Parties. ";
            $texte .= "Puis tapez /inscription (suivi d'un chiffre, si vous ne venez pas seul) ou /desinscription. \n ";
            $texte .= "Vous devez pour cela être enregistré sur le site et avoir y renseigné votre identifiant Discord.";
            $interaction->reply($texte);
            return;
        }
        $this->evt = $evt;

        $dateDuJour = new DateTime();
        // Vérifier si l'événement est passé ou non.
        if ($dateDuJour > $evt->getDateDebut()) {
            $texte = "Il est trop tard, cette séance est ";
            // Est-ce quand même aujourd'hui (si on ne tient pas compte de l'heure) ?
            if (MsgErreur::isSameDates($dateDuJour,$evt->getDateDebut())) {
                $texte .= "en cours.";
            } else {
                $texte .= "terminée.";
            }
            $interaction->reply($texte);
            return;
        }
        // Vérifier si la date d'inscription est passée ou non.
        if ($dateDuJour > $evt->getLimite()) {
            $texte = "La date limite d'inscription est dépassée, désolé.";
            $interaction->reply($texte);
            return;
        }

        // Trouver l'utilisateur en base en fonction de son id.
        $idUser = BDD::findUserByDiscordId($this->manager, $auteur->id);
        if ($idUser === 0) {
            // Ce joueur n'est pas enregistré sur le site. On le crée.
            $user = new User();
            $nom = $auteur->username.$auteur->discriminator;
            $user->setNom($nom);
            $user->setUserId($auteur->id);
            $user->setEmail("myosotis.arae@gmail.com");
            BDD::save($this->manager, $user);
            $idUser = $user->getId();

            $texte  = "Vous n'étiez pas enregistré sur le site, ou bien votre identifiant Discord n'a pas été mis à jour.\n ";
            $texte .= "L'utilisateur ".$nom." a été créé pour vous.";
            $texte .= "Contactez myosotis.arae@gmail.com pour :\n";
            $texte .= "- supprimer ce nouveau compte si vous en aviez déjà un (mentionnez votre nom et votre identifiant sur discord)";
            $texte .= "\nou\n- obtenir le mot de passe de ce nouveau compte afin d'être en mesure de vous y connecter.";
            $texte .= "\nSi vous n'aviez pas de compte sur le site et ne souhaitez jamais y aller, vous n'avez rien à faire.";
            if ($inscrire) {
                $texte .= "\nEn attendant, l'inscription est faite avec ce nouveau compte."; 
                $auteur->sendMessage($texte);
            }
            else {
                $texte .= "La désinscription n'a pas été possible."; 
                $auteur->sendMessage($texte);
                $interaction->reply("Vous n'étiez pas enregistré. Veuillez lire le mp qui vous a été transmis.");
            }
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
        $this->updatePinnedMessage($interaction);

        $interaction->reply($txt);
    }

    /*
     * Si $maj est false, il s'agit d'une création de séance. Les parametres date et titre seront obligatoires.
     * Si $maj est true, il s'agit d'une modification.
     * - Seul l'auteur de cette séance peut le faire.
     * - La date ne peut pas être modifiée.
     */
    private function commandeCreer(Interaction $interaction, Choices $choices, bool $maj) {
        $this->channelParties  = $interaction->guild->channels->get('id',$this->idParties);
        $this->channelAnnonces = $interaction->guild->channels->get('id',$this->idAnnonces);
        $auteur  = $interaction->member->user;
        $canal = $interaction->channel_id;
        // Ce texte signalera les anomalies de saisie et la manière dont elles ont été corrigées.
        $remarques = ' ';
        $msgErr = new MsgErreur();

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
            if (!$msgErr->isDateValide($dateText)) {
                $interaction->reply($msgErr->msg);
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
        // Date limite
        // Remarque : Si la date limite de l'événement n'était pas encore settée dans $this->evt,
        // le setDateDebut que l'on vient d'appeler l'aura fait. Donc, ci-après, on ne va traiter
        // que le cas où elle vient d'être renseignée dans la commande slash.
        $dateLimite = $choices->limite;
        if (strlen($dateLimite) > 0) {
            // Date limite renseignée. On doit la contrôler.
            $msgErr->isDateLimiteOk($dateLimite, $this->evt->getDateDebut());
            if ($msgErr->code == $msgErr->NOK) {
                $interaction->reply($msgErr->msg);
                return;
            }
            if ($msgErr->code == $msgErr->DEPASSEE) {
                // La date limite tombe plus tard que l'événement.
                // Signaler l'erreur, corriger et continuer.
                $dateLimite = $this->evt->getDateDebut()->format("Y-m-d");
                $remarques .= $msgErr->msg;
                $parDefaut = $virgule."date limite=".$dateLimite;
                $virgule = ', ';
                $pluriel[] = 's';
            }
            if ($msgErr->code == $msgErr->AUJOURDHUI) {
                // On ne peut s'inscrire qu'aujourd'hui. Le signaler et continuer.
                $remarques .= $msgErr->msg;
            }
            if ($msgErr->code == $msgErr->HIER) {
                // On ne peut même plus s'inscrire, la date est passée. Le signaler et continuer.
                $remarques .= $msgErr->msg;
            }
            $this->evt->setLimite(new DateTime($dateLimite));
        }

        // Nombre de participants
        $nb = intval($choices->nombre);
        if ($nb < 1) {
            $nb = $this->evt->getCapacite();
            if ($nb < 1) {
                $nb = 4;
                $parDefaut .= $virgule."4 invités";
                $virgule = ', ';
                $pluriel[] = 's';
            } else {
                $nb = $this->evt->getCapacite();
            }
        }
        $this->evt->setCapacite($nb);

        // Heure de début
        $heureDebutRenseignee = MsgErreur::isHeureRenseignee($this->evt->getHeureDebut());
        $heureDebutSaisie = $choices->heure;
        if (strlen($heureDebutSaisie ) > 0) {
            $dateTestText = "2021-09-30 ".$heureDebutSaisie .":00";
            if (strtotime($dateTestText) === false) {
                // L'heure saisie n'est pas valide. On met 14h à la place.
                $remarques .= "\nJe ne comprend pas cette heure : '".$heureDebutSaisie ."'. ";
                if ($heureDebutRenseignee) {
                    $remarques .= "Je vais garder l'heure d'avant : '".$this->evt->getHeureDebut()->format('H:i')."'.";
                } else {
                    $remarques .= "Pour l'heure d'arrivée, on va plutôt mettre 14h.";
                    $this->evt->setHeureDebutFromString('14:00');
                }
            } else {
                $h = (new DateTime($dateTestText))->format('H:i');
                $this->evt->setHeureDebutFromString($h);
            }
        } else {
            if (!$heureDebutRenseignee) {
                $this->evt->setHeureDebutFromString('14:00');
                $heureD = "14:00";
                $parDefaut .= $virgule."arrivée à 14h";
                $virgule = ', ';
                $pluriel[] = 's';
            }
        }

        // Heure de fin par défaut : 3h après l'heure de début.
        $troisHeures = new DateInterval('PT3H');
        $hF = new DateTime($this->evt->getHeureDebut()->format('H:i'));
        $hF->add($troisHeures);
        // Est-ce que l'événement a déjà une heure de fin ?
        $heureFinRenseignee = MsgErreur::isHeureRenseignee($this->evt->getHeureFin());
        // Contrôle de l'heure de fin saisie
        $heureFinSaisie = $choices->fin;
        if (strlen($heureFinSaisie) > 0) {
            // Une heure de fin a été saisie. Il faut la vérifier.
            $dateTestText = "2021-09-30 ".$heureFinSaisie .":00";
            if (strtotime($dateTestText) === false) {
                // Ce format d'heure n'est pas valide.
                $remarques .= "\nJe ne comprends pas cette heure : '".$heureFinSaisie ."'.";
                // Si on avait déjà une heure de fin, on la garde.
                // Sinon, on met par défaut : heure de fin = heure de début + 3h
                if ($heureFinRenseignee) {
                    $remarques .= " Je vais conserver l'ancienne : ".$this->evt->getHeureFin()->format('H:i').".";
                } else {
                    $this->evt->setHeureFin($hF);
                    $remarques .= " Je vais plutôt enregistrer '".$hF->format('H:i')."'."; 
                }
            } else {
                // Cette heure est correcte, on l'enregistre.
                $this->evt->setHeureFin(new Datetime($dateTestText));
            }
        } else {
            if (!$heureFinRenseignee) {
                $this->evt->setHeureFin($hF);
                $parDefaut .= $virgule."fin vers ".$hF->format('H:i');
                $virgule = ', ';
                $pluriel[] = 's';
            }
        }

        // Titre
        $titre = $choices->titre;
        if (strlen($titre) > 0) {
            $this->evt->setTitre($titre);
        }

        $description = $choices->description;
        if (strlen($description) > 0) {
            $this->evt->setDescription($description);
        } else {
            if (strlen($this->evt->getDescription()) < 1) {
                $this->evt->setDescription("Pas de description pour l'instant.");
            }
        }

        if ($maj) {
            // Mise à jour de l'événement en base de données
            BDD::save($this->manager,$this->evt);
            $this->formaterEvt($interaction);
        } else {
            // Création d'un canal dans la catégorie Parties
            $newChannel = $interaction->guild->channels->create([
                 'category'  => $this->channelParties,
                 'parent_id' => $this->channelParties->id,
                 'owner_id'  => $auteur->id,
                 'name'      => $dateAffichee->format('Y m d')." ".$this->evt->getTitre(),
                 'type'      => Channel::TYPE_TEXT,
                 'topic'     => "",
                 'nsfw'      => false
             ]);
             $interaction->guild->channels->save($newChannel)->done(function (Channel $channel) use ($interaction) {
                        $auteur  = $interaction->member->user;
                        $texte = $auteur->username." a ajouté un événement : ".$this->evt->getTitre().".";
                        $url = "\nVous pouvez vous y inscrire et voir les détails ici : https://discord.com/channels/".$channel->guild_id.'/'.$channel->id;
                        $url.= "\n(Prérequis : renseigner votre identifiant discord sur le site de l'asso)";
                        $this->channelAnnonces->sendMessage($texte.$url);

                        $this->evt->setChannelId(strval($channel->id)); 
                        BDD::save($this->manager,$this->evt);
                        $texte = $this->formaterEvt($interaction);
                        $channel->sendMessage($texte)->done( function ($msg) use ($channel) {
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
        $this->updatePinnedMessage($interaction);
        $interaction->reply("Evénement du ".$dateAffichee->format('d/m/Y')." modifié.".$remarques);
    }

    /*
     * Parcourir les messages épinglés dans ce canal et mettre à jour celui du bot.
     */
    private function updatePinnedMessage($interaction) {
        $channel = $interaction->guild->channels->get('id', $interaction->channel_id);
        //$channel->getPinnedMessages()->done(function ($liste) use ($interaction, $channel) {
        $channel->getMessages()->done(function ($liste) use ($interaction, $channel) {
        //$channel = $interaction->guild->channels->get('id', $interaction->channel_id);
            foreach ($liste as $msg) {
                // Parcourir les messages pour changer celui du bot.
                if ($msg->author->id == $this->botId) {
                    $msg->content = $this->formaterEvt($interaction);
                    $channel->messages->save($msg)->done(function ($x) {
                    });
                    break;
                }
            }
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
