<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class CalendrierController extends ParentController
{
  public function main()
  {
    $_SESSION["ongletActif"] = "CAL";
    return $this->render('/calendrier.html.twig',["listeDates" => $this->getDates(),"session" => $_SESSION]);
    //return $this->render('/test.html.twig');
  }

  private function getDates()
  {
    // On veut les dates des 3 derniers mois et celles des 6 prochains.
    $mesDates = $this->getDoctrine()
        ->getManager()
        ->getRepository('App:Evenements')
        ->getDatesToDisplay();

    return $mesDates;
  }
}

?>