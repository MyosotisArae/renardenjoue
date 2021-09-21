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

use App\Discord\MessagesBot;

class ServiceDiscord extends Command
{
    // Parce que c'est une commande, il lui faut un nom :
    protected static $defaultName = 'app:read';
    private $botId;
    private $discord;
    private $messages;
    private $container;

    public function __construct(string $token, string $botId,ContainerInterface $container) {
	    $this->discord = new Discord([
		    'token' => $token,
	    ]);
        $this->botId = $botId;
        // Pour gérer les messages qu'envoie le bot :
        $this->messages = new MessagesBot($botId, $this->discord);
        // Pour accéder à la base de données :
        parent::__construct();
        $this->container = $container;
    }

    public function discordOn() {
		$this->discord->on('ready', function ($discord) {
		    echo "Bot {$this->botId} is ready!", PHP_EOL;
            // Messages à écoute
            $discord->on(EVENT::MESSAGE_CREATE, function($message,$discord){
                return $this->messages->salut($message,$discord);
            });
		});
		$this->discord->run();
    }

    // Parce que c'est une commande, il faut implémenter execute :
    public function execute(InputInterface $input, OutputInterface $output): int {
        $em = $this->container->get('doctrine')->getManager();
        $nextEvts = $em->getRepository('App:Evenements')
                       ->getNextEvts();
        echo "Prochains evts :", PHP_EOL;
        var_dump($nextEvts);
        return Command::SUCCESS;

        // Some error happened during the execution
        // return Command::FAILURE;

        // Incorrect command usage; e.g. invalid options
        // or missing arguments
        // return Command::INVALID
    }
}
?>
