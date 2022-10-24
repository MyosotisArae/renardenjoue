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

class CommandeEmail extends Command
{
    // Parce que c'est une commande, il lui faut un nom :
    protected static $defaultName = 'app:email';
    private $botId;
    private $client;

    public function __construct(string $token, string $botId) {
        parent::__construct();
        $this->botId = $botId;
        $this->client = new RegisterClient($token);
    }

    protected function configure() {
        $this->setDescription("Mettez à jour votre email afin de pouvoir recevoir les actus de l'asso.");
    }

    // Parce que c'est une commande, il faut implémenter execute :
    public function execute(InputInterface $input, OutputInterface $output): int {
        $commands = $this->client->getCommands();
        // Suppression de cette commande
        foreach ($commands as $cmd) {
            if ($cmd->name == "email") {
                $this->client->deleteCommand($cmd);
                break;
            }
        }
        // Création de la commande
        $command = $this->client->createGlobalCommand(
            "email",
            "Pour créer un compte sur le site ou le mettre à jour. Dans les 2 cas, vous n'avez que votre email à saisir.",
            [
              [
                  "name" => "email",
                  "description" => "Tapez votre email ici. Le reste est généré automatiquement.",
                  "type" => 3,
                  "required" => True
              ]
            ]
        );
        return Command::SUCCESS;
    }
}
?>

