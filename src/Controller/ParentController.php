<?php
namespace App\Controller;
 
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
 
class ParentController extends AbstractController
{
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
}
?>