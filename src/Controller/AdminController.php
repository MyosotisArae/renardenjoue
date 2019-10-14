<?php
namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Require ROLE_ADMIN for *every* controller method in this class.
 *
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends ParentController
{
    /**
     * Besoin du ROLE_ADMIN for only this controller method.
     *
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminDashboard()
    {
      $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
      $user = $this->getUser();
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function blabla()
    {
      $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
      $user = $this->getUser();
    }
}
?>