<?php
namespace App\Service;

use Discord\Discord;
use Discord\Voice\VoiceClient;
use Discord\Parts\Channel\Channel;
use Discord\Parts\User\Game;
use Discord\Parts\Embed;
use Discord\Factory\Factory;
use Discord\WebSockets\Event;
use Discord\Parts\Guild\Guild;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Discord\Slash\Parts\Interaction;
use Discord\Slash\Parts\Choices;

use Discord\Slash\Client;
use App\Discord\MessagesBot;
use App\Discord\Evt;
use \DateTime;
use App\Service\Utilitaires;

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
            $discord->on(EVENT::INTERACTION_CREATE, function($message,$discord){
                echo "L'auteur de cette action est : ";
                //echo $message->member->user->username;
                var_dump($message);
            });
		});
    }

    private function commandeCreer(Interaction $interaction, Choices $choices) {
        $channelParties  = $interaction->guild->channels->get('id','887585190346633277');
        $channelAnnonces = $interaction->guild->channels->get('id','887584638124584971');
        echo "Channel Parties : ";
        var_dump($interaction->guild);
        //var_dump($interaction->guild->channels->get('id','887585190346633277'));
        // Controle de la date
        $dateText = $choices->date;
        if ( (strlen($dateText) < 10) || (($timestamp=strtotime($dateText)) === false) ) {
            $dateDuJour = new DateTime();
            $dateDuJourText = "Ex : aujourd'hui=".$dateDuJour->format("Y-m-d");
            $interaction->reply($dateText . " n'est pas au format attendu.\nTapez année(4 chiffres)-mois(2 chiffres)-jour(2 chiffres) sans oublier les tirets.\n" . $dateDuJourText);
            return;
        }
        $dateAffichee = new DateTime($dateText);
        $dateAfficheeText = Utilitaires::traduireDate($dateText);

        //var_dump($interaction);
        //echo 'Choix : ';
        //var_dump($choices);
        //echo "Discord :";var_dump($this->discord);
        $newChannel = $interaction->guild->channels->create([
            'category'  => $channelParties,
            //'parent'    => $channelAnnonces,
            'parent_id'    => '887585190346633277',
            'name'      => $dateAfficheeText,
            'type'      => Channel::TYPE_TEXT,
            //'type'      => Channel::TYPE_PRIVATE_THREAD,
            'topic'     => $choices->titre,
            'nsfw'      => false
            /*
            'permission_overwrites' => [
                'id'        => 'Admin', //<role OR user id>,
                'type'      => 'role', // (if id is role) OR 'user' (if id is single user),
                'allow'     => 1024, //=read  <permission ID for allowed permissions>,
                'deny'      => 2048  //=write <permissions ID for denied permissions>
            ]
             */
        ]);
        $interaction->guild->channels->save($newChannel)->done(function (Channel $channel) {
            echo 'Created a new text channel - ID: ', $channel->id;
        });
        //$interaction->acknowledge();
        $interaction->reply("La date a été créée !");
    }

    public function slashOn() {
        $this->client->registerCommand('creer', function (Interaction $interaction, Choices $choices) {
            $this->commandeCreer($interaction, $choices);
        });
        $this->client->registerCommand('lire', function (Interaction $interaction, Choices $choices) {
            //Evt::afficherProchainsEvts($this->manager);
            var_dump($interaction->guild->channels);
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
