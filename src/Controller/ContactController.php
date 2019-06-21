<?php
namespace App\Controller;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Ludotheque;

class ContactController extends ParentController
{
  private $mailer;

  public function __construct(MailerInterface $mailer)
  {
      $this->mailer = $mailer;
  }

  public function main()
  {
    $_SESSION["ongletActif"] = "C";

  return $this->render('/contact.html.twig',["session" => $_SESSION]);
  }

  public function sendNotification()
  {
      $email = (new Email())
          ->from('webmaster@lerenardenjoue.webou.net.com')
          ->to('you@example.com')
          ->subject('Time for Symfony Mailer!')
          ->text('Sending emails is fun again!')
          ->html('<p>See Twig integration for better HTML integration!</p>');

      $this->mailer->send($email);
  }
}

?>