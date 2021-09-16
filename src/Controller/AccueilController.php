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

    $em  = $this->getDoctrine()
                ->getManager();

    // Date des prochains évènements :
    $nextEvts = $em->getRepository('App:Evenements')
                   ->getNextEvts();
    //$nextEvts = [];
    // Liste des derniers jeux :
    $lastGames = $em->getRepository('App:Ludotheque')
                    ->getLastGame();


    return $this->render('/accueil.html.twig',["session" => $_SESSION, "nextEvts" => $nextEvts, "lastGames" => $lastGames]);
  }
}

?>
