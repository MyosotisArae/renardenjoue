<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AccueilController extends ParentController
{
  public function main()
  {
    $_SESSION["ongletActif"] = "A";
    $nom = "Ami Joueur";
    $util = $this->get("utilitaires");
    if ($util->estRenseigneSESSION("userPseudo")) { $nom = $_SESSION["userPseudo"]; }
    $texteAvant = array(
      utf8_encode("Bienvenue, ".$nom." !"),
      utf8_encode("Vous êtes chez le Renard Enjoué. Notre association a été créée en 2019. "),
      utf8_encode("On compte bien vous transmettre notre passion du jeu, alors, lancez-vous et rejoignez-nous !")
    );
    $texteApres = array(
      utf8_encode('Notre but est de promouvoir les "jeux modernes" '.
                  "en vous proposant de venir jouer avec nous, en soirée ou en journée. "),
      utf8_encode("Nous ferons de notre mieux pour trouver des jeux adaptés à vos goûts, à votre style, à vos envies. ".
                  "Nous en avons plus de 200, il y en a forcément un qui est fait pour vous !"),
      utf8_encode("Nous nous situons à Bussy Saint Georges, face à la ludothèque."),
      utf8_encode("N'hésitez pas à nous contacter, nous sommes très disponibles, nous pourrons certainement organiser une soirée jeux à la date et l'heure qui vous conviennent.")
      );
    return $this->render('/accueil.html.twig',["session" => $_SESSION, "texteAvant" => $texteAvant, "texteApres" => $texteApres]);
  }
}

?>