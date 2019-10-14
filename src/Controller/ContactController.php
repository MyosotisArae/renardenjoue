<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ContactController extends ParentController
{
  public function main()
  {
    $_SESSION["ongletActif"] = "CTC";

    return $this->render('/contact.html.twig',["session" => $_SESSION]);
    $_SESSION["messageAlert"] = "";
  }

  public function envoi()
  {
    $_SESSION["ongletActif"] = "CTC";
    $this->envoyerMail();

    return $this->render('/contact.html.twig',["session" => $_SESSION]);
    $_SESSION["messageAlert"] = "";
  }

  function envoyerMail()
  {
  	if (!$this->estRenseignePOST("titreMail"))
  	{
  		$_SESSION["messageAlert"] = "Merci de ne pas laisser vide le titre de votre message.";
  		return;
  	}
  	if (!$this->estRenseignePOST("contenuMail"))
  	{
  		$_SESSION["messageAlert"] = "Vous n'avez rien écrit dans votre message !";
  		return;
  	}
  	$leTitre   = htmlspecialchars($_POST["titreMail"]);
  	$leMessage = htmlspecialchars($_POST["contenuMail"]);
  	$leDestinataire = "webmaster@lerenardenjoue.webou.net";
  	
    $headers = 'From: webmaster@lerenardenjoue.webou.net' . "\r\n" .
    'Reply-To: webmaster@lerenardenjoue.webou.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($leDestinataire, $leTitre, $leMessage, $headers);
    
    $_SESSION["messageAlert"] = "Merci. Votre message a bien été transmis au webmaster.";
  }

  private function estRenseignePOST($NomDeVariablePostee)
  {
    if (!isset($_POST)) return false;
    if (!isset($_POST[$NomDeVariablePostee])) return false;
    return $this->estNonNul($_POST[$NomDeVariablePostee]);
  }

  private function estNonNul($variable)
{
	if (is_null($variable)) return false;
	$var = $this->suprimerEspacesApostropheEtGuillemets(strval($variable));
	if ($var == '0') return false;
	if (strlen($var) == 0) return false;
	return true;
}

function suprimerEspacesApostropheEtGuillemets($chaine)
{
	$resultat = trim($chaine);
	$resultat = str_replace("'","&#39;",$resultat);
	$resultat = str_replace('"',"&quot;",$resultat);
	return $resultat;
}

  
}

?>