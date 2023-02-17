<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FaqController extends ParentController
{
  /**
   * @Route("/faq", name="faq")
   */
  public function main()
  {
    $_SESSION["ongletActif"] = "FAQ";

    return $this->render('/faq.html.twig',["session" => $_SESSION]);
    $_SESSION["messageAlert"] = "";
  }

}

?>
