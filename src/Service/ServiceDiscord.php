<?php
namespace App\Service;

use Discord\Discord;
use Discord\Voice\VoiceClient;
use Discord\Parts\Channel\Channel;
use Discord\Parts\User\Game;
use Discord\Parts\Embed;
use Discord\Factory\Factory;

class ServiceDiscord
{
    private $botId;
    private $discord;

    public function __construct(string $token, string $botId) {	
	$this->discord = new Discord([
		'token' => $token,
	]);
	$this->botId = $botId;
    }

    public function discordOn() {
		$this->discord->on('ready', function ($discord) {
			echo "Bot {$this->botId} is ready!", PHP_EOL;
			// Listen for messages.
			$discord->on('message', function ($message, $discord) {
				echo "{$message->author->username} (id={$message->author->id}) a dit : {$message->content}",PHP_EOL;
				if ($message->author->id !== $this->botId) {
					$message->channel->sendMessage('Bien le bonjour !');
				}
			});
		});
		$this->discord->run();
    }
}
?>
