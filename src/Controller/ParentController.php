<?php
namespace App\Controller;
 
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
 
class ParentController extends AbstractController
{
  public function __construct(SessionInterface $session)
  {
    if (!isset($this->session)) { $this->session = $session; }
    /*
    $msg = $this->getSss('msgAlert', '');
    if ($msg != '')
    {
      if ($msg[0] != '!') $this->setSss('msgAlert', '');
      else $this->setSss('msgAlert', substr($msg,1));
    }
    */
  }

  public static function getSubscribedServices(): array
  {
      return array_merge(parent::getSubscribedServices(), [ // Melange du tableau des services par defaut avec les notres
          'utilitaires' => 'App\Service\Utilitaires'
      ]);
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
}
?>