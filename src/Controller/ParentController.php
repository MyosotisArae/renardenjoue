<?php
namespace App\Controller;
 
use App\Entity\User;
use App\Entity\Evenements;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
 
class ParentController extends AbstractController
{
  public function __construct(SessionInterface $session)
  {
    if (!isset($this->session)) { $this->session = $session; }
  }

  public static function getSubscribedServices(): array
  {
      return array_merge(parent::getSubscribedServices(), [ // Melange du tableau des services par defaut avec les notres
          'utilitaires' => 'App\Service\Utilitaires'
      ]);
  }

  // Fonction pour contrôler le rôle admin : user.roles = 8
  public function isAdmin()
  {
    $joueur = $this->getUser();
    if ($joueur == null) return false;
    if ($joueur->getRoles() != 8) return false;
    return true;
  }

  // Fonction pour contrôler le rôle RGPD : user.roles = 1
  public function isRoleRGPD()
  {
    $joueur = $this->getUser();
    if ($joueur == null) return false;
    if ($joueur->getRoles() != 1) return false;
    return true;
  }

  // Fonction pour contrôler le rôle comptabilité : user.roles = 2
  public function isRoleCompta()
  {
    $joueur = $this->getUser();
    if ($joueur == null) return false;
    if ($joueur->getRoles() != 2) return false;
    return true;
  }

  // Fonction pour contrôler le rôle newsletter : user.roles = 4
  public function isRoleNewsletter()
  {
    $joueur = $this->getUser();
    if ($joueur == null) return false;
    if ($joueur->getRoles() != 4) return false;
    return true;
  }

  public function getDates()
  {
    // On veut les dates des 3 derniers mois et celles des 6 prochains.
    $mesDates = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('App:Evenements')
                     ->getDatesToDisplay();

    return $mesDates;
  }

  public function getUser()
  {
    $util = $this->get("utilitaires");
    if ($util->estRenseigneSESSION("memberConnected")) { return $_SESSION['memberConnected']; }
    return null;
  }

  public function setUser(User $u)
  {
    $_SESSION['memberConnected'] = $u;
  }

  public function getSss(string $nomVar)
  {
    if ($this->isSetSss($nomVar))
    {
      return $this->session->get($nomVar);
    }
    return null;
  }
  
  public function setSss(string $nomVar, $valeur)
  {
    $this->session->set($nomVar, $valeur);
  }

  public function isSetSss(string $nomVar)
  {
    if ($this->session)
    {
      $x = $this->session->get($nomVar);
      if (is_int($x))
      {
        if ($x == 0) return true;
        else if ($x == null) return false;
        return true;
      }
      if (is_array($x))
      {
        if ($x == array()) return true;
        else if ($x == null) return false;
        return true;
      }
      if (is_string($x))
      {
        if ($x == '') return true;
        else if ($x == null) return false;
        return true;
      }
      if ($this->session->get($nomVar) == null) return false;
      return true;
    }
    return false;
  }
    
  /**
   * Cette fonction indique si l'utilisateur existe :
   * - il ne vaut pas NULL
   * - son id n'est pas zéro (la valeur que le constructeur de User.php met par défaut)
   */
  public function existe($user)
  {
    return ($user != null && $user->getId() > 0);
  }
}
?>
