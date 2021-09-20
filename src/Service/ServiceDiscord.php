<?php
namespace App\Service;

use Discord\Discord;
use Discord\Voice\VoiceClient;
use Discord\Parts\Channel\Channel;
use Discord\Parts\User\Game;
use Discord\Parts\Embed;
use Discord\Factory\Factory;
use Discord\WebSockets\Event;

use App\Service\Historique;
use App\Service\Personne;

class ServiceDiscord
{
    private $botId;
    private $discord;
    private $fichePresence; // Structure indiquant qui s'est connecté à quelle heure.

    public function __construct(string $token, string $botId) {	
	    $this->discord = new Discord([
		    'token' => $token,
	    ]);
	    $this->botId = $botId;
        $this->fichePresence = new Historique();
    }

    function bienvenue($oldP,$newP) {
	/*
	$id   = $message->author->id;
	if ($id != $this->botId) {
	    $message->channel->sendMessage("Bienvenue {$aQui}");
	}
	 */
	    var_dump($newP);
    }

    /*
     * Si c'est le bot qui a posté un message, c'est ignoré : on ne fait RIEN. Du tout.
     * Si la personne a posté un autre message récemment, cette fonction n'affiche rien.
     * Sinon, soit le bot lui souhaite la bienvenue (la personne n'a jamais posté de message),
     * soit il lui dit bonjour (car ça fait au moins 10h que la personne a posté un message).
     * Dans tous les cas, cette personne (non bot) figure ensuite dans la liste fichePresence,
     * et la date de son dernier message est enregistrée.
     */
    public function salut($message,$discord) {
        $aQui = $message->author->username;
    	$id   = $message->author->id;
        $txt  = $message->content;
    	echo "{$aQui} (id={$id}) a dit : {$txt}",PHP_EOL;
    	// Ne pas répondre si c'est le bot qui a parlé.
        if ($id != $this->botId) {
            // A-t-on déjà vu cette personne récemment ?
            $p = $this->fichePresence->kelkinParle($message);
            if ($p->jamaisVue()) $message->channel->sendMessage("Bienvenue, {$aQui} !");
            else if ($p->vueAvant()) $message->channel->sendMessage("Bien le bonjour, {$aQui} !");
        }
        return 1;
    }

    public function discordOn() {
		$this->discord->on('ready', function ($discord) {
		    echo "Bot {$this->botId} is ready!", PHP_EOL;
            // Messages à écoute
            $discord->on(EVENT::MESSAGE_CREATE, function($message,$discord){
                return $this->salut($message,$discord);
            });
            $discord->on(EVENT::PRESENCE_UPDATE, function ($oldP,$newP){
                return $this->bienvenue($oldP,$newP);
            });
		});
		$this->discord->run();
    }

}
?>
