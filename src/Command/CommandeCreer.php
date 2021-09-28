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

        echo "CREER";
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
                  "description" => "date au format yyyy-mm-dd. Ex : 2021-10-23",
                  "type" => 3,
                  "required" => True
              ],
              [
                  "name" => "titre",
                  "description" => "Tapez votre titre ici, sans guillemets.",
                  "type" => 3,
                  "required" => True
              ]
            ] 
        );
        return Command::SUCCESS;
    }
}
?>

