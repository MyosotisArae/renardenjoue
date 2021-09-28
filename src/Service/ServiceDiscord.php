<?php
namespace App\Service;

use Discord\Discord;
use Discord\Voice\VoiceClient;
use Discord\Parts\Channel\Channel;
use Discord\Parts\User\Game;
use Discord\Parts\Embed;
use Discord\Factory\Factory;
use Discord\WebSockets\Event;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Discord\Slash\Parts\Interaction;
use Discord\Slash\Parts\Choices;

use Discord\Slash\Client;
use App\Discord\MessagesBot;
use App\Discord\Evt;

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
    }

    public function discordOn() {
		$this->discord->on('ready', function ($discord) {
		    echo "Bot {$this->botId} is ready!", PHP_EOL;
            // Messages à écouter
            $discord->on(EVENT::MESSAGE_CREATE, function($message,$discord){
                return $this->messages->salut($message);
            });
          /*  $discord->on('interactionCreate', function($message,$discord){
                if ($message->isCommand()) {
                    echo "Une commande ? Je passe.";
                    return;
                }
                echo "Ce n'est pas une commande";
          });*/
		});
    }

    public function slashOn() {
        $this->client->registerCommand('creer', function (Interaction $interaction, Choices $choices) {
            echo 'Ma commande marche. ';
            //echo 'Interaction : ';
            //var_dump($interaction);
            echo 'Choix : ';
            var_dump($choices);

            //$interaction->acknowledge();
            $interaction->reply("La date est créée !");
            // Réponse obligatoire pour éviter le message "Echec de l'interaction"
            /*
            return [
                "type" => 4,
                "data" => [
                    "tts" => False,
                    "content" => "La date a été créée.",
                    "embeds" => [],
                    "allowed_mentions" => [ parse => [] ]
                ]
            ];
             */
        });
        $this->client->registerCommand('lire', function (Interaction $interaction, Choices $choices) {
            Evt::afficherProchainsEvts($this->manager);
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
