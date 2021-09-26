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

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreerCommande extends Command
{
    // Parce que c'est une commande, il lui faut un nom :
    protected static $defaultName = 'app:creer';
    private $botId;
    private $commands;
    private $client;
    private $container;
    private $manager;

    public function __construct(string $token, string $botId, ContainerInterface $container) {
        $this->botId = $botId;
        // Pour accéder à la base de données :
        parent::__construct();
        //$this->manager = $container->get('doctrine')->getManager();
        // gets a list of all GLOBAL comamnds (not guild-specific)
        $this->client = new RegisterClient($token);
    }

    // Parce que c'est une commande, il faut implémenter execute :
    public function execute(InputInterface $input, OutputInterface $output): int {
        print("Commandes avant delete : ");
        $commands = $this->client->getCommands();
        var_dump($commands);
        echo " ----------------- ";
        // Suppression de toutes les commandes
        foreach ($commands as $value)
        {
            $this->client->deleteCommand($value);
        }
        print("avant : ");
        $commands = $this->client->getCommands();
        var_dump($commands);
        print(" ----------------- ");

        /*
        $command = $this->client->createGuildSpecificCommand(
            '887584638124584971', 
            'creer', 
            'Pour créer une nouvelle séance de jeu. Ex : tapez /creer "2021-10-23" "Venez jouer chez Steph !"', 
            [ $dateEvt, $titreEvt ]
        );
        */
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
        print(" Commande : ");
        print_r($command);
        $commands = $this->client->getCommands();
        echo "apres : ";
        var_dump($commands);
        return Command::SUCCESS;

        // Some error happened during the execution
        // return Command::FAILURE;

        // Incorrect command usage; e.g. invalid options
        // or missing arguments
        // return Command::INVALID
    }
}
?>

