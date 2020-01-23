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
