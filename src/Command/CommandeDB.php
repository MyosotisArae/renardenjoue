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

use App\Discord\Evt;



class CommandeDB extends Command
{
    // Parce que c'est une commande, il lui faut un nom :
    protected static $defaultName = 'app:DB';
    protected $manager;

    public function __construct(ContainerInterface $container) {
        parent::__construct();
        echo "C0";

        echo "C1";
        $this->manager = $container->get('doctrine')->getManager();

        echo "C9";

    }

    // Parce que c'est une commande, il faut implémenter execute :
    public function execute(InputInterface $input, OutputInterface $output): int {

        echo "E0";
        Evt::afficherProchainsEvts($this->manager);

        echo "E9";


        return Command::SUCCESS;
    }
}
?>
