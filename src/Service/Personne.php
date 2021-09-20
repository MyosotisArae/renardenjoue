<?php
namespace App\Service;

use \DateTime;
use \DateInterval;

class Personne
{
    public const VU_RECEMMENT = 1;
    public const VU_AVANT = 2;
    public const JAMAIS_VU = 3;

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
        $delai = new DateInterval("PT10H"); // intervalle de 10h
        // Date il y a 10h :
        $dateAvantDelai = $now->sub($delai);
        // Si le dernier message était avant ça, alors oui, ça fait longtemps.
        if ($this->dateMsg < $dateAvantDelai) $this->vu = Personne::VU_AVANT;
        else $this->vu = Personne::VU_RECEMMENT;
        // Mettre à jour la date.
        $this->dateMsg = $now;
    }
}
?>
