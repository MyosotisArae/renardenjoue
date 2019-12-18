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
    $this->setSss('msgAlert', '');
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

}
?>