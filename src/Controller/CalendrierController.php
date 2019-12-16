<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use App\Entity\Participant;
use \DateTime;
use \DateInterval;
=======
>>>>>>> f2dfef2397485dcd4f1daa1219278ee358d4b321

class CalendrierController extends ParentController
{
  /**
   * @Route("/calendrier", name="calendrier")
   */
  public function main()
  {
    $_SESSION["ongletActif"] = "CAL";
    return $this->render('/calendrier.html.twig',["listeDates" => $this->getDates(),"session" => $_SESSION, "cas" => 0]);
    //return $this->render('/test.html.twig');
  }

  /**
   * Inscription de l'utilisateur courant à la soirée d'id num
   * @Route("/inscription{num}", name="inscription", requirements={"num" = "\d+"})
   */
  public function inscription($num)
  {
    $_SESSION["ongletActif"] = "CAL";

    $evt = $this->getEvenement($num);
    if ($evt == null)
    {
      // Cet évènement n'existe pas (url trafiquée)
      return $this->render('/calendrier.html.twig',["listeDates" => $this->getDates(),"session" => $_SESSION, "cas" => 0]);
    }

    $user = $this->getUser();
    if ($user != null)
    {
      // L'utilisateur s'est connecté.
      $p  = new Participant($user->getId(), $evt->getId());
      $em = $this->getDoctrine()
                 ->getManager();
      $em->persist($p);
      $em->flush();
      return $this->redirect('afficherEvt'.$evt->getId());
    }
    else
    {
      // Tu n'es pas réellement connecté. Tu me prends pour un jambon ?
      return $this->redirectToRoute('login');
    }
  }

  /**
   * Désnscription de l'utilisateur courant à la soirée d'id num
   * @Route("/deinscription{num}", name="inscription", requirements={"num" = "\d+"})
   */
  public function deinscription($num)
  {
    $_SESSION["ongletActif"] = "CAL";

    $evt = $this->getEvenement($num);
    if ($evt == null)
    {
      // Cet évènement n'existe pas (url trafiquée)
      return $this->render('/calendrier.html.twig',["listeDates" => $this->getDates(),"session" => $_SESSION, "cas" => 0]);
    }

    $user = $this->getUser();
    if ($user != null)
    {
      // L'utilisateur s'est connecté.
      $p  = new Participant($user->getId(), $evt->getId());
      $em = $this->getDoctrine()
                 ->getManager();
      $em->remove($p);
      $em->flush();
      return $this->redirect('afficherEvt'.$evt->getId());
    }
    else
    {
      // Tu n'es pas réellement connecté. Tu me prends pour un jambon ?
      return $this->redirectToRoute('login');
    }
  }

  /**
   * Affichage du détail d'un évènement
   * @Route("/afficherEvt{num}", name="afficherEvt", requirements={"num" = "\d+"})
   */
  public function afficherEvt($num)
  {
    $_SESSION["ongletActif"] = "CAL";
    $cas = 0;
    /* Cas à gérer :
      0. C'est un évènement sans inscription (Le titre n'est pas Les renards jouent).
         => Ne pas exécuter ce qui suit.
      1. L'évènement est passé (date de début inférieure à aujourd'hui moins 2 jours)
         => Afficher l'évènement sans bouton d'inscription.
         1.1. Si la date de fin est passée, ne rien écrire.
         1.2. Sinon, indiquer que les inscriptions sont closes.
      2. L'inscription est encore possible.
         2.1. L'utilisateur est connecté
              2.1.1. Il y participe déjà.
                     => Mettre un bouton de désinscription.
              2.1.2. Il n'y participe pas encore.
                     => Mettre un bouton d'inscription.
         2.2. L'utilisateur n'est pas connecté
              => Mettre un bouton pour le rediriger vers la page de connexion.
    */

    $evt = $this->getEvenement($num);
    if ($evt == null)
    {
      // Cet évènement n'existe pas (url trafiquée)
      return $this->render('/calendrier.html.twig',["listeDates" => $this->getDates(),"session" => $_SESSION, "cas" => 0]);
    }

    // Vérifier la date de l'évènement.
    $dateDebut = $evt->getDateDebut();
    $limiteInscription = new Datetime(date_format($dateDebut, 'Y-m-d'));
    $delai = new DateInterval("P3D");
    $now = new DateTime('now');
    $limiteInscription = $limiteInscription->sub($delai);

    $this->util = $this->get("utilitaires");

    if ($evt->getTitre() == 'Les renards jouent')
    {

      if ($now < $limiteInscription)
      {
        // Cas 2.
        if ($this->util->estRenseigneSESSION('memberConnected'))
        {
          // Cas 2.1.
          if ($this->getParticipation($num))
          {
            $cas = 211;
          }
          {
            $cas = 212;
          }
        }
        else
        {
          // Cas 2.2.
          $cas = 22;
        }
      }
      else
      {
        $cas = 12;
        if ($dateDebut < $now) { $cas = 11; }
      }
    }

    return $this->render('/evtDetail.html.twig',["listeDates" => $this->getDates(),"session" => $_SESSION, "cas" => $cas, "evt" => $evt, "limite" => $limiteInscription]);
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

  private function getEvenement($idEvt)
  {
    $evt = $this->getDoctrine()
                ->getManager()
                ->getRepository('App:Evenements')
                ->find($idEvt);

    return $evt;
  }

  private function getParticipation($idEvt)
  {
    $participe = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('App:Participant')
                      ->getParticipation($_SESSION["memberConnected"]->getId(), $idEvt);

    return $participe;
  }
}

?>