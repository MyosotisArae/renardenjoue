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
    $texteAvant = array(
      utf8_encode("Bienvenue, ".$nom." !"),
      utf8_encode("Vous �tes chez le Renard Enjou�. Notre association a �t� cr��e en 2019. "),
      utf8_encode('Notre but est de permettre aux amateurs de "jeux modernes" '.
                  "de Bussy et ses environs de se retrouver pour jouer. ")
    );
    $texteApres = array(
      utf8_encode("- utiliser le formulaire de contact, soit pour me pr�venir que vous venez � un des �v�nements de mon calendrier, soir pour me demander d'ajouter � ce calendrier un �v�nement que vous organisez."),
      utf8_encode('- consulter la rubrique "Inviter des joueurs" du forum '.
                  " pour voir ce qu'organisent les autres joueurs."),
      utf8_encode('- proposer votre �v�nement dans cette m�me rubrique.')
      );
    return $this->render('/accueil.html.twig',["session" => $_SESSION, "texteAvant" => $texteAvant, "texteApres" => $texteApres]);
  }
}

?>