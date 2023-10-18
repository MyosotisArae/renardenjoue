<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RoleControler extends ParentController
{
  /**
   * @Route("/Admin{code}", name="AdminRoles", requirements={"code" = "\d+"})
   */
  public function AdminRoles(Request $request, int $code)
  {
      $joueur = $this->getUser();
      // Pour accéder à l'écran de ce rôle, l'utilisateur :
      // - doit être connecté
      if ($joueur == null) {
          $this->setSss("Utilisateur non connecté");
          return $this->redirectToRoute('login');
      }
      // - doit demander l'écran correspondant à son rôle
      // RGPD = 1
      // Compta = 2
      // Newsletter = 4
      if ($joueur->getRoles() != $code) {
          $this->setSss("Code utilisé : ".$joueur->getRoles()."; code requis : ".$code);
          return $this->redirectToRoute('login');
      }
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
