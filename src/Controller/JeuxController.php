<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Ludotheque;

class JeuxController extends ParentController
{
	/**
	 * @Route("/jeux", name="jeux")
	 */
  public function main()
  {
    $_SESSION["ongletActif"] = "JEU";
    $listeJeux = $this->getJeux();

    $util = $this->get("utilitaires");
    if ($util->estRenseigneGET("jeuChoisi"))
    {
      // L'utilisateur a choisi le jeu à afficher
      $_SESSION["jeuChoisi"] = $this->getJeuChoisi($listeJeux);
    }
    else
    {
      // On choisit au hasard un jeu à afficher.
      $_SESSION["jeuChoisi"] = $this->getJeuAuHasard($listeJeux);
    }

    $jeuTitre = "";
    $jeuNiveau = "0";
    $jeuDuree = "0";
    $jeuNb = "0";
    if (isset($_POST)) 
    {
        if ($util->estRenseignePOST("jeuTitre")) { $jeuTitre = $_POST["jeuTitre"]; }
        if ($util->estRenseignePOST("jeuNiveau")) { $jeuNiveau = $_POST["jeuNiveau"]; }
        if ($util->estRenseignePOST("jeuDuree")) { $jeuDuree = $_POST["jeuDuree"]; }
        if ($util->estRenseignePOST("jeuNb")) { $jeuNb = $_POST["jeuNb"]; }
    }

    /* Remettre les critères saisis dans le formulaire de recherche */
    return $this->render('/jeux.html.twig',["session" => $_SESSION,"listeJeux" => $listeJeux,"jeuTitre" => $jeuTitre,"jeuNiveau" => $jeuNiveau,"jeuDuree" => $jeuDuree,"jeuNb" => $jeuNb]);
  }

  /**
   * Sélection d'un jeu dans la liste.
   * @Route("/choisirJeu{idJeu}", name="choisirJeu", requirements={"idJeu" = "\d+"})
   */
  public function choisirJeu($idJeu)
  {
    $_SESSION["ongletActif"] = "JEU";
    $listeJeux = $this->getJeux();
    $_SESSION["jeuChoisi"] = $this->getJeuById($idJeu,$listeJeux);

    $jeuTitre = "";
    $jeuNiveau = "0";
    $jeuDuree = "0";
    $jeuNb = "0";
    if (isset($_POST)) 
    {
        $util = $this->get("utilitaires");
        if ($util->estRenseignePOST("jeuTitre")) { $jeuTitre = $_POST["jeuTitre"]; }
        if ($util->estRenseignePOST("jeuNiveau")) { $jeuNiveau = $_POST["jeuNiveau"]; }
        if ($util->estRenseignePOST("jeuDuree")) { $jeuDuree = $_POST["jeuDuree"]; }
        if ($util->estRenseignePOST("jeuNb")) { $jeuNb = $_POST["jeuNb"]; }
    }

    /* Remettre les critères saisis dans le formulaire de recherche */
    return $this->render('/jeux.html.twig',["session" => $_SESSION,"listeJeux" => $listeJeux,"jeuTitre" => $jeuTitre,"jeuNiveau" => $jeuNiveau,"jeuDuree" => $jeuDuree,"jeuNb" => $jeuNb]);
  }
  
  private function getJeux()
  {
    $doctrine = $this->getDoctrine();
    $em = $doctrine->getManager();
    $repository = $em->getRepository('App:Ludotheque');
    
    $jeux = $repository->getListeJeux();

	// Ajouter le code HTML à afficher pour la durée en images
	foreach ($jeux as $jeu)
	{
		$jeu->setDuree($this->getDuree($jeu));
		$jeu->getNbImg();
	}

    return $jeux;
  }
  
  private function getJeuChoisi($listeJeux)
  {
	  $idJeu = $_GET["jeuChoisi"];
	  return getJeuById($idJeu, $listeJeux);
  }
  
  private function getJeuById($idJeu, $listeJeux)
  {
      $i = count($listeJeux);
      while ($i > 0)
      {
        $i -= 1;
        if ($listeJeux[$i]->getId() == $idJeu) { return $listeJeux[$i]; }
      }
  }
  
  private function getJeuAuHasard($listeJeux)
  {
      $nb = count($listeJeux);
      if ($nb == 0) return new Ludotheque();
      $i = random_int(0, $nb - 1);
      return $listeJeux[$i];
  }

  private function getDuree($jeu)
  {
    $dureeMin = $jeu->getDureemin();
    $dureeMax = $jeu->getDureemax();

  	$codeHTML = "";
  	// Si la duree max est inferieure ou egale a 3h, on affiche 1 a 3 horloges
  	if ($dureeMax <= 180)
  	{
  		$couleur="rouge";
  		if ($dureeMin == $dureeMax) { $couleur="vert"; }
  		
  		// Afficher des horloges vertes pleines tant que la duree minimale n'est pas atteinte.
  		$indiceCSS = 1;
  		$dureeVerte = $dureeMin;
  		$dureeRouge = $dureeMax;
  		while ($dureeVerte >= 60)
  		{
  			$codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/secteur60vert.gif\">";
  			$codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/cadran.gif\">";
  			$dureeVerte -= 60;
  			$dureeRouge -= 60;
  			$indiceCSS += 1;
  		}
  		
  		if ($dureeVerte > 0 && $dureeRouge >= 60)
  		{
  			$codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/secteur60rouge.gif\">";
  			$codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/secteur".$this->getNumeroSecteur($dureeVerte)."vert.gif\">";
  			$codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/cadran.gif\">";
  			$dureeRouge -= 60;
  			$indiceCSS += 1;
  			$dureeVerte = 0;
  		}
  		
  		while ($dureeRouge >= 60)
  		{
  			$codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/secteur60rouge.gif\">";
  			$codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/cadran.gif\">";
  			$dureeRouge -= 60;
  			$indiceCSS += 1;
  		}

  		// Afficher un rond blanc sous la derniere horloge
  		if ($dureeRouge + $dureeVerte > 0)
  		{
  		  $codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/secteurBlanc.gif\">";
  	  }
  		
  		// Si le temps rouge n'est pas nul, afficher une horloge rouge correspondant au temps restant.
  		$afficherUnDernierCadran = false;
  		if ($dureeRouge > 0)
  		{
  		  $codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/secteur".$this->getNumeroSecteur($dureeRouge).$couleur.".gif\">";
  		  $afficherUnDernierCadran = true;
  	  }

  		if ($dureeVerte > 0 && $dureeVerte < $dureeRouge)
  		{
  			$codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/secteur".$this->getNumeroSecteur($dureeVerte)."vert.gif\">";
  			$afficherUnDernierCadran = true;
  		}
  		
  		// Puis dessiner l'horloge par dessus ce dernier laps de temps.
  		if ($afficherUnDernierCadran)
  		{
  		  $codeHTML .= "<img class=\"imageCarree".$indiceCSS."\" src=\"../images/cadran.gif\">";
  	  }
  
  		return $codeHTML;
    }
  	$codeHTML .= "<img class=\"imageCarree1\" src=\"../images/secteur60vert.gif\">";
  	$codeHTML .= "<img class=\"imageCarree1\" src=\"../images/cadran.gif\">";
  	// Les durees sont indiquees par du texte.
  	$nbHeuresMin = (int)($dureeMin/60);
  	$codeHTML .= "<span class=\"texteCarre1\">".$nbHeuresMin."h</span>";
  	$codeHTML .= "<img class=\"imageCarree2\" src=\"../images/secteur60rouge.gif\">";
  	$codeHTML .= "<img class=\"imageCarree2\" src=\"../images/cadran.gif\">";
  	$nbHeuresMax = (int)($dureeMax/60);
  	$codeHTML .= "<span class=\"texteCarre1 texteCarre2\">".$nbHeuresMax."h</span>";
  	return $codeHTML;
  }

  function getNumeroSecteur($duree)
  {
  	// On ne dispose pas d'une image de secteur pour chaque minute.
  	// Donc on renvoie le secteur qui s'approche le plus de la duree indiquee.
  	if ($duree >= 40) return 45;
  	if ($duree >= 30) return 30;
  	if ($duree >= 18) return 20;
  	if ($duree >= 13) return 15;
  	if ($duree >= 8)  return 10;
  	return 5;
  }
}

?>
