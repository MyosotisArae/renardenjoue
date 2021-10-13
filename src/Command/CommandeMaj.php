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

class CommandeMaj extends Command
{
    protected static $defaultName = 'app:maj';
    private $botId;
    private $client;

    public function __construct(string $token, string $botId) {
        parent::__construct();
        $this->botId = $botId;
        $this->client = new RegisterClient($token);
    }

    public function execute(InputInterface $input, OutputInterface $output): int {
        $commands = $this->client->getCommands();
        // Suppression de cette commande
        foreach ($commands as $cmd) {
            if ($cmd->name == "maj") {
                $this->client->deleteCommand($cmd);
                break;
            }
        }
        // Création de la commande
        $command = $this->client->createGlobalCommand(
            'maj',
            'Pour mettre à jour votre une séance de jeu.',
            [
              [
                  "name" => "titre",
                  "description" => "Titre affiché dans le calendrier du site (100 caractères max)",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "heure",
                  "description" => "Heure de début de votre séance (Ex : 10:20 pour 10h20)",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "nombre",
                  "description" => "Nombre maximum de personnes que vous recevrez",
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
                  "description" => "Heure à laquelle vous pensez terminer cette séance",
                  "type" => 3,
                  "required" => False
              ],
              [
                  "name" => "limite",
                  "description" => "Date limite pour s'inscrire.",
                  "type" => 3,
                  "required" => False
              ]
            ]
        );
        return Command::SUCCESS;
    }
}
?>

