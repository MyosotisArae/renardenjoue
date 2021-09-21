<?php
namespace App\Service;

use Discord\Discord;
use Discord\Voice\VoiceClient;
use Discord\Parts\Channel\Channel;
use Discord\Parts\User\Game;
use Discord\Parts\Embed;
use Discord\Factory\Factory;
use Discord\WebSockets\Event;

use App\Discord\MessagesBot;

class ServiceDiscord
{
    private $botId;
    private $discord;
    private $messages;

    public function __construct(string $token, string $botId) {	
	    $this->discord = new Discord([
		    'token' => $token,
	    ]);
        $this->botId = $botId;
        $this->messages = new MessagesBot($botId, $this->discord);
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

}
?>
