<?php
namespace App\Discord;

use App\Discord\Historique;
use App\Discord\Personne;

class MessagesBot
{
    // Structure indiquant qui s'est connecté à quelle heure.
    private $fichePresence;
    private $botId;
    private $discord;

    public function __construct($botId,$discord)
    {
        $this->fichePresence = new Historique;
        $this->botId = $botId;
        $this->discord = $discord;
    }

    /*
     * Si c'est le bot qui a posté un message, c'est ignoré : on ne fait RIEN.
     * Du tout.
     * Par contre :
     * - si la personne a posté son message précédent il y a plus de 10h, le bot lui dit bonjour.
     * - Si c'est plus récent, il ne dit rien.
     * Dans les 2 cas, la date de son dernier message est mise à jour.
     * - Si la personne n'avait encore jamais posté de message, le bot lui souhaite la bienvenue.
     * Dans les 3 cas, cette personne figure ensuite dans la liste fichePresence, qui prend note
     * de la date de son dernier message.
     */
    public function salut($message) {
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

}
?>
