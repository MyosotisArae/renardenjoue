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

class CommandeCreer extends Command
{
    // Parce que c'est une commande, il lui faut un nom :
    protected static $defaultName = 'app:creer';
    private $botId;
    private $client;

    public function __construct(string $token, string $botId) {
        parent::__construct();
        $this->botId = $botId;
        $this->client = new RegisterClient($token);
    }

    // Parce que c'est une commande, il faut implémenter execute :
    public function execute(InputInterface $input, OutputInterface $output): int {
        $commands = $this->client->getCommands();
        // Suppression de cette commande
        foreach ($commands as $cmd) {
            if ($cmd->name == "creer") {
                $this->client->deleteCommand($cmd);
                break;
            }
        }
        // Création de la commande
        $command = $this->client->createGlobalCommand(
            'creer',
            'Pour créer une nouvelle séance de jeu.',
            [
              [
                  "name" => "date",
                  "description" => "* date de votre séance (année-mois-jour). Ex : 2021-10-23",
                  "type" => 3,
                  "required" => True
              ],
              [
                  "name" => "titre",
                  "description" => "* Tapez votre titre ici, sans guillemets ni saut de ligne (100 caractères max).",
                  "type" => 3,
                  "required" => True
              ],
              [
                  "name" => "heure",
                  "description" => "(14h) Tapez l'heure de début. Ex : 15:30 pour 15h30.",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "nombre",
                  "description" => "(4) Nombre maximum de personnes que vous recevrez (4 par défaut).",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "description",
                  "description" => "Texte (sans retour à la ligne) pour décrire votre séance.",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "fin",
                  "description" => "(3h après l'heure de début) Heure de fin de partie. Ex : 18:00 pour 18h",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "limite",
                  "description" => "(aucune) Date du dernier jour où les inscriptions sont autorisées.",
                  "type" => 3,
                  "required" => False
              ]
            ]
        );
        return Command::SUCCESS;
    }
}
?>

