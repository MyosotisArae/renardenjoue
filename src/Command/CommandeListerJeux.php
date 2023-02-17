<?php
namespace App\Command;

use Discord\Discord;
use Discord\Voice\VoiceClient;
use Discord\Parts\Channel\Channel;
use Discord\Parts\User\Game;
use Discord\Parts\Embed;
use Discord\Factory\Factory;
use Discord\WebSockets\Event;
use Discord\Slash\RegisterClient;
use Discord\Slash\Client;
use Discord\Slash\Parts\Interaction;
use Discord\Slash\Parts\Choices;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name : 'app:lister_jeux',
    description : 'Commande slash pour afficher une liste de jeux',
    hidden : false,
    aliases : ['app:lister_jeux']
)]
class CommandeListerJeux extends Command
{
    // Parce que c'est une commande, il lui faut un nom :
    protected static $NOM_COMMANDE = 'lister_jeux';
    //protected static $defaultName  = 'app:'.$NOM_COMMANDE;
    private $botId;
    private $client;
    private $nomCmd;

    public function __construct(string $token, string $botId) {
        parent::__construct();
        $this->botId = $botId;
        $this->client = new RegisterClient($token);
        $this->nomCmd = $NOM_COMMANDE;
    }

    // Parce que c'est une commande, il faut implémenter execute :
    public function execute(InputInterface $input, OutputInterface $output): int {
        $commands = $this->client->getCommands();
        // Suppression de cette commande
        foreach ($commands as $cmd) {
            if ($cmd->name == $this->nomCmd) {
                $this->client->deleteCommand($cmd);
                break;
            }
        }
        // Création de la commande
        $command = $this->client->createGlobalCommand(
            $this->nomCmd,
            "Recherchez des jeux dans la liste des jeux de nos membres et obtenez leurs identifiants",
            [
              [
                  "name" => "nom_du_jeu",
                  "description" => "Nom partiel ou complet du jeu (évitez de taper l'article initial)",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "nombre_min",
                  "description" => "Nombre minimum de joueurs avec qui vous souhaitez jouer",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "nombre_max",
                  "description" => "Nombre maximum de joueurs avec qui vous souhaitez jouer",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "votes",
                  "description" => "Nombre de jeux à afficher (dans la liste des jeux les plus populaires)",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "a_qui",
                  "description" => "Identifiant Discord de la personne dont vous voulez la liste de jeux",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "derniers",
                  "description" => "Nombre de jeux à afficher, du plus récemment ajouté au plus ancien",
                  "type" => 3,
                  "required" => False
              ]
            ]
        );
        return Command::SUCCESS;
    }
}
?>

