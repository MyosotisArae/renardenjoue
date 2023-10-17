<?php
namespace App\Service;

use \DateTime;

class Utilitaires
{

    /**
     * Calcul de l'année du forum (année associative en cours) en fonction de la date
     * @return int
     */
	public function getAnnee()
	{
		$annee = date("Y");
		// L'année associative va de septembre à aout.
		// Si on est avant septembre, il faut donc revenir à l'année précédente.
		$mois = date("n");
		if ($mois < 9) { $annee -= 1; }
		return $annee;
	}

    /**
      Retourne True si la variable de session portant ce nom existe et est renseignée.
      S'utilise comme ceci dans les Controlleurs :
      $util = $this->get("utilitaires");
      if ($util->estRenseigneSESSION("userPseudo")) { ... }
    */
    public function estRenseigneSESSION($NomDeVariableDeSession)
    {
    	if (!isset($_SESSION)) return False;
    	if (!isset($_SESSION[$NomDeVariableDeSession])) return False;
    	return !is_null($_SESSION[$NomDeVariableDeSession]);
    }

    public function estRenseignePOST($NomDeVariablePostee)
    {
    	if (!isset($_POST)) return false;
    	if (!isset($_POST[$NomDeVariablePostee])) return false;
    	return $this->estNonNul($_POST[$NomDeVariablePostee]);
    }

    public function estRenseigneGET($NomDeVariablePostee)
    {
    	if (!isset($_GET)) return false;
    	if (!isset($_GET[$NomDeVariablePostee])) return false;
    	return $this->estNonNul($_GET[$NomDeVariablePostee]);
    }

    public function estNonNul($variable)
    {
    	if (is_null($variable)) return false;
    	$var = $this->suprimerEspacesApostropheEtGuillemets(strval($variable));
    	if ($var == '0') return false;
    	if (strlen($var) == 0) return false;
    	return true;
    }

    function suprimerEspacesApostropheEtGuillemets($chaine)
    {
    	$resultat = trim($chaine);
    	$resultat = str_replace("'","&#39;",$resultat);
    	$resultat = str_replace('"',"&quot;",$resultat);
    	return $resultat;
    }

    public static function traduireDate($chaine)
    {
        $laDate= new DateTime($chaine);
        $resultat = $laDate->format("l d F Y");
        // Traduction du jour
        $resultat = str_ireplace("Monday","Lundi",$resultat);
        $resultat = str_ireplace("Tuesday","Mardi",$resultat);
        $resultat = str_ireplace("Wednesday","Mercredi",$resultat);
        $resultat = str_ireplace("Thursday","Jeudi",$resultat);
        $resultat = str_ireplace("Friday","Vendredi",$resultat);
        $resultat = str_ireplace("Saturday","Samedi",$resultat);
        $resultat = str_ireplace("Sunday","Dimanche",$resultat);

        // Traduction du mois
        $resultat = str_ireplace("January","Janvier",$resultat);
        $resultat = str_ireplace("February","Février",$resultat);
        $resultat = str_ireplace("March","Mars",$resultat);
        $resultat = str_ireplace("April","Avril",$resultat);
        $resultat = str_ireplace("May","Mai",$resultat);
        $resultat = str_ireplace("June","Juin",$resultat);
        $resultat = str_ireplace("July","Juillet",$resultat);
        $resultat = str_ireplace("August","Août",$resultat);
        $resultat = str_ireplace("ber","bre",$resultat);

        // Si on est le premier du mois, changer 1 en 1er
        $resultat = str_ireplace(" 1 "," 1er",$resultat);

        return $resultat;
    }
}
?>
