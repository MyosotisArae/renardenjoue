<?php

namespace App\Discord;

use App\Discord\Inscription;

/**
 * Représente les inscriptions à un événement:
 * - un tableau d'objets Inscription
 * - un message d'erreur si besoin
 */
class ListeInscriptions
{
    private $tableau;
    private $erreur;
    
    public function __construct()
    {
        $this->tableau = [];
        $this->erreur = null;
    }

    /*
     * Ajout d'une inscription
     */
    public function add(Inscription $ins) {
        $this->tableau[] = $ins;
    }

    /*
     * Retourne le nombre d'inscriptions
     */
    public function combienDePersonnes() {
        $n = 0;
        foreach ($this->tableau as $ins) {
            $n += $ins->nb;
        }
        return $n;
    }

    /*
     * Retourne le nombre de membres inscrits (sans leurs invités)
     */
    public function combienDeMembres() {
        return (count($this->tableau));
    }

    /*
     * Retourne une inscription selon son indice dans le tableau
     */
    public function get(int $n) {
        return $this->tableau[$n];
    }

    /*
     * Retourne le texte de l'erreur
     */
    public function getErreur() {
        return $this->erreur;
    }

    /*
     * Renseigne le texte de l'erreur
     */
    public function setErreur($txt) {
        $this->erreur = $txt;
    }

    /*
     * Retourne true s'il y a une erreur,
     * false sinon.
     */
    public function isErreur() {
        return ($this->erreur != null);
    }
}
