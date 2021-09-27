<?php
namespace App\Discord;

use App\Discord\Historique;
use App\Discord\Personne;
use Symfony\Component\Form\Button;
use Symfony\Component\Form\FormInterface;

class MessagesBot
{
    // Structure indiquant qui s'est connecté à quelle heure.
    private $fichePresence;
    private $botId;
    private $discord;
    private $manager;
    private $cdes;

    public function __construct($botId,$discord,$manager)
    {
        $this->fichePresence = new Historique;
        $this->botId = $botId;
        $this->discord = $discord;
        $this->manager = $manager;
    }

    /*
     * Si c'est le bot qui a posté un message, c'est ignoré : on ne fait RIEN.
     * Du tout.
     * Par contre :
     * - Si c'est une commande (commence par /), basculer sur la fonction commande.
     * Sinon,
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
    	echo "{$aQui} (id={$id}) a dit : {$txt} sur le canal {$message->channel}",PHP_EOL;
    	// Ne pas répondre si c'est le bot qui a parlé.
        if ($id != $this->botId) {
            echo "Component : ";
            var_dump($message->component);
            echo "Fin Component : ";
            $button = new Button();
            $button->setLabel('push me!');
            $message->addComponent($button);
            $message->reply("Salut !");
            /*
            // S'agit-il d'une commande ?
            if ($this->isCommande($message))
            {
                return commande($message);
            }
            var_dump($message);
            // A-t-on déjà vu cette personne récemment ?
            $p = $this->fichePresence->kelkinParle($message);
            if ($p->jamaisVue()) $message->channel->sendMessage("Bienvenue, {$aQui} !");
            else if ($p->vueAvant()) $message->channel->sendMessage("Bien le bonjour, {$aQui} !");
             */
        }
        return 1;
    }

    /********************** Les commandes **********************/

    public function isCommande($message) {
        $premierCaractere = substr($message,0,1);
        if ($premierCaractere == "/") return true;
        return false;
    }

    public function commande($message) {
        // Vérifier que cette commande est connue.
        $mots = str_word_count($message,1);
        $nomCde = $mots[0];
        //$cdes = [["lireEvts",cd_lireEvts],["ajoutEvt",cd_ajoutEvt]];
        /*
        $nbCdes = count($cdes);
        while ($nbCdes > 0)
        {
            $nbCdes -= 1;
            if ($nomCde == $cdes[$nbCdes][0]) { return $cdes[$nbCdes][1]($messages); }
        }
         */
        if ($nomCde==="/lireEvt") {
            return $this->cd_lireEvts($message);
        }
        if ($nomCde==="/ajoutEvt") {
            return $this->cd_ajoutEvts($message);
        }
        $message->channel->sendMessage("La commande {$nomCde} m'est inconnue.");
        return 0;
    }

    private function cd_lireEvts($message) {
        $data=[
            'Titre' => 'Jeux chez Michel',
    		'Texte' => 'Je vous propose une après-midi sur des petits jeux, comme Zak&Pak, The city et autres.',
		    'Date'  => '2021-11-27',
	    	'hd'    => '13:30',
    		'nb'    => '6'
        ];
        $message->channel->sendMessage("Voici la liste des prochains événements :");
        var_dump($data);
        return 1;
    }

    private function cd_ajoutEvt($message) {
        $message->channel->sendMessage("Evénements à ajouter :");
        $nextEvts = $em->getRepository('App:Evenements')
                       ->getNextEvts();
    }
}
?>
