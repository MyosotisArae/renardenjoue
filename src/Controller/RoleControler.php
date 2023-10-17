<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RoleControler extends ParentController
{
  /**
   * @Route("/RGPD", name="RGPD")
   */
  public function RGPD(Request $request)
  {
    if (!$this->isRoleRGPD()) {
      return $this->redirectToRoute('login');
    }
    return $this->listing($request);
  }

  /**
   * @Route("/Compta", name="Compta")
   */
  public function Compta(Request $request)
  {
    if (!$this->isRoleCompta()) {
      return $this->redirectToRoute('login');
    }
    return $this->listing($request);
  }

  /**
   * @Route("/Newsletter", name="Newsletter")
   */
  public function Newsletter(Request $request)
  {
    if (!$this->isRoleNewsletter()) {
      return $this->redirectToRoute('login');
    }
    return $this->listing($request);
  }

  private function listing(Request $request)
  {
      $util = $this->get("utilitaires");
      $annee = $util->getAnnee();
      $liste = $this->getUsers($annee);
      return $this->render('gerer_liste_inscrits.html.twig', ["session" => $_SESSION, "liste" => $liste, "annee" => $annee]);
  }
    
  // On veut lister les utilisateurs et déterminer s'ils sont inscrits pour l'annee demandée.
  private function getUsers(int $annee)
  {
    $em = $this->getDoctrine()->getManager();
    $rpInscrit = $em->getRepository('App:Inscrit');
    $rpUser = $em->getRepository('App:User');
    
    // Lister les utilisateurs, et les inscrits de l'année demandée
    $listeUsers = $rpUser->getUsers();
    $listeInscrits = $rpInscrit->getInscrits($annee);
	
	// Ajouter les infos concernant l'inscription
	foreach ($listeInscrits as $inscrit)
	{
		// Chercher l'utilisateur correspondant
		$userIndice = 0;
    	foreach ($listeUsers as $user)
	    {
			if ($user->getId() == $inscrit->getIdUser()) {
				$listeUsers[$userIndice]->setInscrit($inscrit);
				break;
			}
		    $userIndice ++;
	    }
		
	}

    return $listeUsers;
  }


}
