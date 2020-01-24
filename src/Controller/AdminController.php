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

        $evt = new Evenements;
        $formulaire = $this->createForm(EvtCreateType::class, $evt);

        if ($request->isMethod('POST'))
        {
          $formulaire->submit($request->request->get($formulaire->getName()));
          if ($formulaire->isSubmitted() && $formulaire->isValid())
          {
            $evt = $formulaire->getData();
            $this->saveEvt($evt);
            return $this->redirectToRoute('gestion');
          }
        }

        return $this->render('gerer_date_ajout.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
    }

    /**
     * @Route("/modif_date", name="modif_date")
     */
      public function modifEvt(Request $request)
      {
          if (!$this->isAdmin()) {
            return $this->redirectToRoute('login');
          }
          $evts = $this->getDates();
          foreach ($evts as $evt)
          {
            echo $evt->getId().":";
            if ($evt->getDateFin() == null) echo "nul";
            else echo $evt->getDateFin()->format('Y-m-d');
            echo ".  ";
          }
          return $this->render('gerer_dates_list.html.twig', ["session" => $_SESSION, "listeDates" => $evts]);
      }

      /**
       * Mise à jour d'un evt qui existe déjà en base.
       * 
       * @Route("/save_evt", name="save_evt")
       */
        public function save_evt(Request $request)
        {
            if (!$this->isAdmin()) {
              return $this->redirectToRoute('login');
            }
    
            $evt = new Evenements;
            $evt->setTitre($_POST['chTitre']);
            $evt->setDescription($_POST['chDesc']);
            $evt->setDateDebutFromString($_POST['chDdeb-j'].'-'.$_POST['chDdeb-m'].'-'.$_POST['chDdeb-a']);
            $evt->setHeureDebutFromString($_POST['chHdeb-h'].':'.$_POST['chHdeb-m']);
            $evt->setDateFinFromString($_POST['chDfin-j'].'-'.$_POST['chDfin-m'].'-'.$_POST['chDfin-a']);
            $evt->setHeureFinFromString($_POST['chHfin-h'].':'.$_POST['chHfin-m']);

            $this->saveEvt($evt);
    
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
     * Enregistrement en base d'un nouvel utilisateur
     */
    private function saveEvt(Evenements $evt)
    {
      $em = $this->getDoctrine()->getManager();
      $em->persist($evt);
      $em->flush();
    }
}
