<?php
namespace App\Discord;

use \DateTime;
use \DateInterval;

class Personne
{
    // Ces indicateurs se rapportent à la date du dernier message de la personne.
    private const VU_RECEMMENT = 1; // message posté aujourd'hui
    private const VU_AVANT = 2;     // message posté il y a plus longtemps
    private const JAMAIS_VU = 3;    // aucun message posté

    private $id, $nom, $dateMsg, $vu;

    /*
     * Création d'un nouvel arrivant sur le discord.
     * $message : le message qu'il vient d'envoyer.
     */
    public function __construct($message)
    {
        $this->id  = $message->author->id;
        $this->nom = $message->author->username;
        $this->dateMsg = new DateTime();
        $this->vu = Personne::JAMAIS_VU;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function jamaisVue()
    {
        return ($this->vu == Personne::JAMAIS_VU);
    }

    public function vueAvant()
    {
        return ($this->vu == Personne::VU_AVANT);
    }

    /*
     * Cette personne vient de poster un message.
     * Détermine si cela fait assez longtemps qu'elle a parlé pour lui redire bonjour
     * et remet à jour la date de son dernier message.
     */
    public function posteMsg()
    {
        $now = new DateTime();
        $delai = new DateInterval("P1D"); // intervalle de 10h
        // Date il y a 10h :
        $dateAvantDelai = (new DateTime())->sub($delai);
        // Si le dernier message était avant ça, alors oui, ça fait longtemps.
        if ($this->dateMsg < $dateAvantDelai) $this->vu = Personne::VU_AVANT;
        else $this->vu = Personne::VU_RECEMMENT;
        // Mettre à jour la date.
        $this->dateMsg = $now;
    }
}
?>
