<?php

namespace App\Controller;

use App\Entity\Evenements;
use App\Form\EvtCreateType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends ParentController
{
  /**
   * @Route("/gestion", name="gestion")
   */
  public function admin(Request $request)
  {
    return $this->render('gerer.html.twig', ["session" => $_SESSION]);
  }

  /**
   * @Route("/ajout_date", name="ajout_date")
   */
    public function newEvt(Request $request)
    {
        if (!$this->isAdmin()) {
          return $this->redirectToRoute('login');
        }

        return $this->render('gerer_date_ajout.html.twig', ["session" => $_SESSION]);
    }

    /**
     * @Route("/modif_date", name="modif_date")
     */
      public function modifEvt(Request $request)
      {
          if (!$this->isAdmin()) {
            return $this->redirectToRoute('login');
          }
          return $this->render('gerer_dates_list.html.twig', ["session" => $_SESSION, "listeDates" => $this->getDates()]);
      }

      /**
       * @Route("/voir_inscrip", name="voir_inscrip")
       */
        public function voir_inscriptions(Request $request)
        {
            if (!$this->isAdmin()) {
              return $this->redirectToRoute('login');
            }

            // Liste de nos soirées jeux
            $em = $this->getDoctrine()->getManager();
            $rpEvts = $em->getRepository('App:Evenements');
            $rpPart = $em->getRepository('App:Participant');
            $rpUser = $em->getRepository('App:User');
            $evts = $rpEvts->getDatesRenard();
            // Compléter en ajoutant leurs inscrits (ne conserver que les soirées où il y en a).
            $soireesConfirmees = [];
            foreach ($evts as $evt)
            {
              $inscrits = $rpPart->getParticipants($evt->getId());
              if (count($inscrits) > 0)
              {
                $listeInscrits = [];
                foreach ($inscrits as $p)
                {
                  $listeInscrits[] = $rpUser->findOneBy(array('id' => $p->getIdUser()));
                }
                $evt->setInscrits($listeInscrits);
                $soireesConfirmees[] = $evt;
              }
            }
            return $this->render('gerer_inscriptions.html.twig', ["session" => $_SESSION, "soirees" => $soireesConfirmees]);
        }

      /**
       * Mise à jour d'un evt qui existe déjà en base, ou création d'une date si id=0.
       * 
       * @Route("/save_evt_{id}", name="save_evt", requirements={"id" = "\d+"})
       */
        public function saveEvt(Request $request, int $id)
        {
            if (!$this->isAdmin()) {
              return $this->redirectToRoute('login');
            }
    
            $evt = new Evenements;
            if ($id > 0)
            {
              $em = $this->getDoctrine()->getManager();
              $rp = $em->getRepository('App:Evenements');
              $evt = $rp->findOneBy(array('id' => $id));
            }

            $evt->setTitre($_POST['chTitre']);
            $evt->setDescription($_POST['chDesc']);
            $evt->setDateDebutFromString($_POST['chDdeb-j'].'-'.$_POST['chDdeb-m'].'-'.$_POST['chDdeb-a']);
            $evt->setHeureDebutFromString($_POST['chHdeb-h'].':'.$_POST['chHdeb-m']);
            // Date et heure de fin sont facultatives
            $jour = $_POST['chDfin-j'];
            if ($jour != null && count($jour)>0)
            {
              $evt->setDateFinFromString($jour.'-'.$_POST['chDfin-m'].'-'.$_POST['chDfin-a']);
            }
            $heure = $_POST['chHfin-h'];
            if ($heure != null && count($heure)>0)
            {
              $evt->setHeureFinFromString($heure.':'.$_POST['chHfin-m']);
            }

            $this->saveDate($evt);
    
            return $this->render('gerer_dates_list.html.twig', ["session" => $_SESSION, "listeDates" => $this->getDates()]);
        }

        /**
         * Suppression d'un evt.
         * 
         * @Route("/del_evt_{id}", name="del_evt", requirements={"id" = "\d+"})
         */
          public function del_evt(Request $request, int $id)
          {
              if (!$this->isAdmin()) {
                return $this->redirectToRoute('login');
              }
      
              $em = $this->getDoctrine()->getManager();
              $rp = $em->getRepository('App:Evenements');
              $evt = $rp->findOneBy(array('id' => $id));
              $em->remove($evt);
              $em->flush();
    
              return $this->render('gerer_dates_list.html.twig', ["session" => $_SESSION, "listeDates" => $this->getDates()]);
          }

    /**
     * Enregistrement en base d'une nouvelle date
     */
    private function saveDate(Evenements $evt)
    {
      $em = $this->getDoctrine()->getManager();
      $em->persist($evt);
      $em->flush();
    }
}
