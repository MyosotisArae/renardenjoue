<?php
namespace App\Service;

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

class CreerCommande extends Command
{
    // Parce que c'est une commande, il lui faut un nom :
    protected static $defaultName = 'app:creer';
    private $botId;
    private $discord;
    private $commands;
    private $client;
    private $container;
    private $manager;

    public function __construct(string $token, string $botId, ContainerInterface $container) {
/*	    $this->discord = new Discord([
		    'token' => $token,
        ]);*/
        $this->botId = $botId;
        // Pour accéder à la base de données :
        parent::__construct();
//        $this->manager = $container->get('doctrine')->getManager();
        // Pour les commandes
        $this->client = new RegisterClient($token);
    }

    // Parce que c'est une commande, il faut implémenter execute :
    public function execute(InputInterface $input, OutputInterface $output): int {
        $commands = $this->client->getCommands();
        // Suppression de toutes les commandes
        foreach ($commands as $value)
        {
            $this->client->deleteCommand($value);
        }

        // Création de la commande
        $command = $this->client->createGlobalCommand(
            'creer', 
            'Pour créer une nouvelle séance de jeu. Ex : tapez /creer "2021-10-23" "Soirée Carcassonne"',
            [
              [
                  "name" => "date",
                  "description" => "date au format yyyy-mm-dd. Ex : 2021-10-23",
                  "type" => 3,
                  "required" => True
              ]
            ] 
        );
/*
        // Implémentation de la commande
        $this->client = new Client([
            'loop' => $this->discord->getLoop(), // Discord and Client MUST share event loops
        ]);
        $this->client->linkDiscord($this->discord);
        $discord = $this->discord;
        $this->client->registerCommand('creer', function (Interaction $interaction, Choices $choices) use ($discord) {
            $discord->sendMessage("blabla");
            echo 'Ma commande marche. ';
            echo 'Interaction : ';
            var_dump($interaction);
            echo 'Choix : ';
            var_dump($choices);
        });
        return Command::SUCCESS;

        // Some error happened during the execution
        // return Command::FAILURE;

        // Incorrect command usage; e.g. invalid options
        // or missing arguments
        // return Command::INVALID
 */
    }
}
?>

