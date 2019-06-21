<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController extends ParentController
{
  public function main()
  {
    $_SESSION["ongletActif"] = "A";
    return $this->render('/main.html.twig',["session" => $_SESSION]);
  }
}

?>