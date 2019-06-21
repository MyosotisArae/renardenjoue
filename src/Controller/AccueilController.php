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
      utf8_encode("Vous �tes chez le Renard Enjou�. Notre association a �t� cr��e en 2019. "),
      utf8_encode("On compte bien vous transmettre notre passion du jeu, alors, lancez-vous et rejoignez-nous !")
    );
    $texteApres = array(
      utf8_encode('Notre but est de promouvoir les "jeux modernes" '.
                  "en vous proposant de venir jouer avec nous, en soir�e ou en journ�e. "),
      utf8_encode("Nous ferons de notre mieux pour trouver des jeux adapt�s � vos go�ts, � votre style, � vos envies. ".
                  "Nous en avons plus de 200, il y en a forc�ment un qui est fait pour vous !"),
      utf8_encode("Nous nous situons � Bussy Saint Georges, face � la ludoth�que."),
      utf8_encode("N'h�sitez pas � nous contacter, nous sommes tr�s disponibles, nous pourrons certainement organiser une soir�e jeux � la date et l'heure qui vous conviennent.")
      );
    return $this->render('/accueil.html.twig',["session" => $_SESSION, "texteAvant" => $texteAvant, "texteApres" => $texteApres]);
  }
}

?>