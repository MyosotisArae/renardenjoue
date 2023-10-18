<?php

namespace App\Controller;
use App\Entity\User;
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
      // Tri selon RGPD
      if ($code == 1) { usort($liste, array($this, 'triRGPD')); }
      if ($code == 2) { usort($liste, array($this, 'triCompta')); }
      if ($code == 4) { usort($liste, array($this, 'triNewsletter')); }
      return $this->render('gerer_liste_inscrits.html.twig', ["session" => $_SESSION, "liste" => $liste, "annee" => $annee]);
  }

  // Tri selon le rôle : RGPD, cotisation, ou newsletter = 1 en premier, 0 à la fin

  private function triRGPD(User $a, User $b)
  {
      // Comparaison des valeurs RGPD
      if ($a->getRGPD() == $b->getRGPD())
      {
        // Ils sont identiques. Les trier par nom puis prénom.
    	return $this->triNomPrenom($a, $b);
      }
      // Sinon, tri descendant (RGPD=1 avant RGPD=0)
      return $a->getRGPD() < $b->getRGPD();
  }

  private function triCompta(User $a, User $b)
  {
      // Comparaison des valeurs User -> Inscrit -> cotisationréglée
      if ($a->getCompta() == $b->getCompta())
      {
        // Ils sont identiques. Les trier par nom puis prénom.
    	return $this->triNomPrenom($a, $b);
      }
      // Sinon, tri descendant (RGPD=1 avant RGPD=0)
      return $a->getCompta() < $b->getCompta();
  }

  private function triNewsletter(User $a, User $b)
  {
      // Comparaison des valeurs RGPD
      if ($a->getNewsletter() == $b->getNewsletter())
      {
        // Ils sont identiques. Les trier par nom puis prénom.
    	return $this->triNomPrenom($a, $b);
      }
      // Sinon, tri descendant (RGPD=1 avant RGPD=0)
      return $a->getNewsletter() < $b->getNewsletter();
  }

  // Tri en fonction du prénom et du nom (avec "inconnu" à la fin)
  private function triNomPrenom( User $a, User $b)
  {
      // Comparaison des noms
      $ctrl = $this->comparerTextes($a->getVraiNom(), $b->getVraiNom());
      // Si cette comparaison est indéterminée, comparer les prénoms
      if ($ctrl == 0) { $ctrl = $this->comparerTextes($a->getVraiPrenom(), $b->getVraiPrenom()); }
      return $ctrl;
  }

  // Compare les deux textes, et met "inconnu" en fin de liste.
  private function comparerTextes(string $nomA, string $nomB)
  {
      $p = "inconnu";
      $nbInconnu = 0;
      // Vérifions combien sont inconnus
      if (strcmp($nomA,$p) == 0) { $nbInconnu += 1; }
      if (strcmp($nomB,$p) == 0) { $nbInconnu += 1; }

      // Les 2 sont inconnus ? => Impossible de déterminer le tri selon ce critère
      if ($nbInconnu == 2) { return 0; }

      // Aucun n'est inconnu ? => comparer les deux noms
      if ($nbInconnu == 0) { return strcmp($nomA, $nomB); }

      // Un des deux est inconnu ? Le mettre à la fin
      if (strcmp($nomA,$p) == 0) { return 1; } // a inconnu
      return -1; // b inconnu
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
