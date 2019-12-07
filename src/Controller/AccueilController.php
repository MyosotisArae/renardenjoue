<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends ParentController
{
  /**
   * @Route("/main", name="main")
   */
  public function main()
  {
    $_SESSION["ongletActif"] = "ACC";
    $nom = "Ami Joueur";
    $util = $this->get("utilitaires");
    if ($util->estRenseigneSESSION("userPseudo")) { $nom = $_SESSION["userPseudo"]; }

    // Date du prochain évènement :
    $nextDate = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('App:Evenements')
                     ->getNextDate();


    // Liste des derniers jeux :
    $lastGames = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('App:Ludotheque')
                      ->getLastGame();


    return $this->render('/accueil.html.twig',["session" => $_SESSION, "nextDate" => $nextDate, "lastGames" => $lastGames]);
  }
}

?>