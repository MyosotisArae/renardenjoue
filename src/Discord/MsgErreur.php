<?php

namespace App\Discord;

use \DateTime;

/*
 * Structure retournée par les fonctions qui doivent renvoyer à la fois un code d'erreur et un message.
 */
class MsgErreur
{
    // Constantes générales
    public int $OK;
    public int $NOK;

    // Constantes permettant de savoir si une date est correcte.
    public int $DEPASSEE;    // La date limite est plus tardive que la date de l'evt
    public int $AUJOURDHUI;  // La date tombe aujourd'hui (ce n'est pas forcément un problème, mais un avertissement peut être de mise)
    public int $HIER;        // La date tombe avant aujourd'hui.

    // Attributs
    public int $code;
    public string $msg;

    public function __construct() {
        $this->OK = 1;
        $this->NOK = 100;
        $this->DEPASSEE    = 2;
        $this->AUJOURDHUI  = 3;
        $this->HIER        = 4;
        $this->code = $this->OK;
        $this->msg = "";
    }

    /*
     * Retourne true si la date est interprétable en DateTime, false sinon.
     */
    public function isDateValide($uneDate) {
        if ( (strlen($uneDate) < 10) || ((strtotime($uneDate)) === false) ) {
            $dateDuJour = new DateTime();
            $dateDuJourText = "Ex : aujourd'hui=".$dateDuJour->format("Y-m-d");
            $this->msg = $dateLimite. " n'est pas au format attendu.\nTapez année(4 chiffres)-mois(2 chiffres)-jour(2 chiffres) sans oublier les tirets.\n" . $dateDuJourText;
            $this->code = $this->NOK;
            return false;
        }
        $this->msg = "";
        $this->code = $this->OK;
        return true;
    }

    /*
     * Indique si la date limite :
     * - est mal formatée (NOK),
     * - tombe après la date de début de l'événement (DEPASSEE),
     * - est déjà passée (HIER),
     * - est aujourd'hui (AUJOURDHUI),
     * - n'est dans aucun de ces cas (OK).
     */
    public function isDateLimiteOk(string $dateLim, DateTime $dateEvt) {
        // Contrôle de validité de la date limite.
        if (!$this->isDateValide($dateLim)) { return; }
        $dateLimite = new DateTime($dateLim);

        // Enlever les heures de ces dates afin de ne comparer que des jours entiers
        $dateJour = (new DateTime())->setTime(0,0,0,0);
        $dateLimite = (new DateTime($dateLimite ->format('Y-m-d')))->setTime(0,0,0,0);
        $dateEvt = (new DateTime($dateEvt ->format('Y-m-d')))->setTime(0,0,0,0);

        // Comparaison des dates
        if ($dateLimite > $dateEvt)  {
            // La date limite est plus tardive que l'evt lui-même.
            $this->code = $this->DEPASSEE;
            $this->msg = "\nNe mettez pas une date limite postérieure à votre événement, ou on pourra s'y inscrire même quand il sera terminé !";
            return;
        }    
        if ($dateLimite < $dateJour) {
            // La date limite est déjà expirée.
            $this->code = $this->HIER;
            $this->msg = "\nLa date limite est passée. Personne ne pourra s'inscrire.";
            return;
        }    
        if ($dateLimite == $dateJour) {
            // La date limite est aujourd'hui.
            $this->code = $this->AUJOURDHUI;
            $this->msg = "\nAttention, on ne pourra s'inscrire qu'aujourd'hui.";
            return;
        }    
    }

    /*
     * Indique si la date est passée, sans tenir compte de l'heure
     */
    public static function isPasse(DateTime $uneDate) {
        // Enlever les heures de ces dates afin de ne comparer que des jours entiers
        $dateJour = (new DateTime())->setTime(0,0,0,0);
        $laDate = (new DateTime($uneDate->format('Y-m-d')));
        if ($laDate < $dateJour) {
            // La date limite est déjà expirée.
            return true;
        }
        return false;
    }

    /*
     * Compare les dates sans tenir compte des heures, minutes, secondes.
     * Retourne true si elles sont identiques, false sinon.
     */
    public static function isSameDates(DateTime $date1, DateTime $date2) {
        // Enlever les Hm:s
        $d1 = (new DateTime($date1->format('Y-m-d')));
        $d2 = (new DateTime($date2->format('Y-m-d')));
        // Comparer
        return ($d1 == $d2);
    }
}
