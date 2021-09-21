<?php
namespace App\Discord;

use App\Discord\Personne;

class Historique
{
    private $liste; // Toutes les personnes qui sont venues sur le discord.

    public function __construct() {
        $this->liste = [];
    }

    /*
     * Une personne poste un message. Il va falloir mettre à jour :
     * - l'indicateur "vu" qui dit si le message précédent éventuel est récent.
     * - la date de son dernier message.
     *
     * Paramètre :
     * $message : Le message qu'elle vient de poster.
     *
     * Retour :
     * La personne qui a posté le message.
     */
    public function kelkinParle($message) {
        $idKiParle = $message->author->id;
        $numArrivant = count($this->liste);
        $personne;
        while ($numArrivant > 0)
        {
            $numArrivant -= 1;
            $personne = $this->liste[$numArrivant];
            if ($personne->getId() == $idKiParle)
            {
                // Cette personne figure dans la liste des gens déjà vus.
                $personne->posteMsg();
                // Remettre cette personne au même endroit dans la liste.
                $this->liste[$numArrivant] = $personne;

                return $personne;
            }
        }
        // Cette personne n'est pas dans la liste. On l'ajoute.
        $personne = new Personne($message);
        $this->liste[] = $personne;
        return $personne;
    }
}
?>
