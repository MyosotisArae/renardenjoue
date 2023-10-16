<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserCnxType;
use App\Form\UserCreateType;
use App\Form\UserDisplayType;
use App\Form\ForgotPwdType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SecurityController extends ParentController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, UserPasswordEncoderInterface $encoder)
    {
      $_SESSION["ongletActif"] = "CNX";
      if ($this->getUser()) {
        return $this->redirectToRoute('compte');
      }

      $user = new User;
      $formulaire = $this->createForm(UserCnxType::class, $user, ['action' => 'check']);

      return $this->render('security/login.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
    }

    
    /**
     * L'utilisateur tente de se logguer sur son compte.
     * @Route("/check", name="check")
     */
    public function checkPassword(Request $request, UserPasswordEncoderInterface $encoder)
    {
      $_SESSION["ongletActif"] = "CNX";
      if ($this->getUser()) {
        return $this->redirectToRoute('compte');
      }
      $msgErreur = "";
      $user = new User;
      $formulaire = $this->createForm(UserCnxType::class, $user);
      $formulaire->submit($request->request->get($formulaire->getName()));
      if ($formulaire->isSubmitted() && $formulaire->isValid())
      {
        $user = $formulaire->getData();
        $userEnBase = $this->findUser($user);
        
        if ($this->existe($userEnBase))
        {
          if ($encoder->isPasswordValid($userEnBase, $user->getPlainPassword()))
          {
            $this->setUser($userEnBase);
            $this->setSss('msgAlert', "Bienvenue,".$user->getNom());
            $formulaire = $this->createForm(UserDisplayType::class, $userEnBase, ['action' => 'compte']);
            return $this->render('security/connecte.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
          }
          else $formulaire->get('plainPassword')->addError(new FormError("Ce n'est pas le bon mot de passe."));
        }
        else $formulaire->get('nom')->addError(new FormError("Nom d'utilisateur inconnu."));
      }
      return $this->render('security/login.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
    }
    
    /**
     * L'utilisateur est connecté et met à jour son profil
     * @Route("/majUser", name="majUser")
     */
    public function majUser(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $_SESSION["ongletActif"] = "CNX";

        $message = '';
        $user = $this->getUser();
        if ($user == null) {
          return $this->redirectToRoute('login');
        }

        if ($request->isMethod('POST'))
        {
          $user = $this->getDisplayedUser($user);
          if ($this->updateUser($user, $encoder))
          {
            $this->setSss('msgAlert', "Les modifications ont bien été enregistrées.");
            $_SESSION["memberConnected"] = $user;
          }
          else
          {
            $this->setSss('msgAlert', "Une erreur s'est produite. Vos modifications n'ont pas été prises en compte.");
          }
        }
        $formulaire = $this->createForm(UserDisplayType::class, $user);
        $formulaire->handleRequest($request);

        return $this->render('security/connecte.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView(), 'message' => '']);
    }

    
    /**
     * L'utilisateur est connecté et ouvre son profil depuis une autre page.
     * @Route("/compte", name="compte")
     */
    public function connecte(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $_SESSION["ongletActif"] = "CNX";

        $message = '';
        $user = $this->getUser();
        if ($user == null) {
          return $this->redirectToRoute('login');
        }
        $formulaire = $this->createForm(UserDisplayType::class, $user);
        $formulaire->handleRequest($request);
/*
        if ($request->isMethod('POST'))
        {
          //$user = $formulaire->getData();
          $user = $this->getDisplayedUser($user);
          if ($this->updateUser($user, $encoder))
          {
            $this->setSss('msgAlert', "Les modifications ont bien été enregistrées.");
            $_SESSION["memberConnected"] = $user;
          }
          else
          {
            $this->setSss('msgAlert', "Une erreur s'est produite. Vos modifications n'ont pas été prises en compte.");
          }
        }
 */
        return $this->render('security/connecte.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView(), 'message' => '']);
    }

    /**
     * @Route("/newUser", name="newUser")
     */
    public function newUser(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $_SESSION["ongletActif"] = "CNX";
        if ($this->getUser()) {
          return $this->redirectToRoute('compte');
        }

        $user = new User;
        $formulaire = $this->createForm(UserCreateType::class, $user);

        if ($request->isMethod('POST'))
        {
          $formulaire->submit($request->request->get($formulaire->getName()));
          if ($formulaire->isSubmitted() && $formulaire->isValid())
          {
            $user = $formulaire->getData();

            // Vérifier l'unicité de ce nom.
            $userEnBase = $this->findUser($user);
            if ($this->existe($userEnBase))
            {
              $formulaire->get('nom')->addError(new FormError("Le nom ".$user->getNom()." est déjà pris, désolé."));
              return $this->render('security/newUser.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
            }
            $this->saveUser($user, $encoder);
            return $this->redirectToRoute('compte');
          }
        }

        return $this->render('security/newUser.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
      $_SESSION["ongletActif"] = "CNX";
      $user = new User;
      $this->setUser($user);
      $formulaire = $this->createForm(UserCnxType::class, $user, ['action' => 'check']);
      return $this->render('security/login.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
    }

    /**
     * @Route("/oubli-mot-de-passe", name="app_forgotten_password", methods="GET|POST")
     */
    public function forgottenPassword(Request $request, MailerInterface $mailer) //, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator): Response
    {
      $_SESSION["ongletActif"] = "CNX";
      if ($this->getUser()) {
        return $this->redirectToRoute('compte');
      }

      $user = new User;
      $user->setNom("tata");
      $user->setPlainPassword("tata");
      $formulaire = $this->createForm(ForgotPwdType::class, $user);
      //$transport = new EsmtpTransport('localhost');
      //$mailer = new Mailer($transport);
      $email = (new Email())
            ->from('myosotis.arae@gmail.com')
            ->to('libell.arae@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Test mot de passe oublié')
            ->text('Cliquez sur ce lien:')
            ->html('<div style="display: inline-block; border : 2px solid orange;">
          <table style="font-family:"Times New Roman";">
            <tr>
              <td>
                <img style="height : 9em;width : auto;" src="http://lerenardenjoue.webou.net/logo.png">
              </td>
              <td>
                <h1 style="font-size : 2em;text-align : center;">Le Renard Enjoué</h1>
                <h2 style="font-size : 1em;text-align : center;">Association buxangeorgienne<br>de jeux de société modernes</h2>
                <br>
                Site : <a style="font-size : 1em;text-align : center;" href="https://renardenjoue.araetech.eu/">https://renardenjoue.araetech.eu/</a>
              </td>
            </tr>
          </table>
        </div>');
      //$mailer->send($email);
      /*
      
      if ($request->isMethod('POST'))
      {
 
        $email = $request->request->get('email');

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneByEmail($email);

        if ($user === null) {
            $this->addFlash('danger', 'Email Inconnu, recommence !');
            return $this->redirectToRoute('app_forgotten_password');
        }
        $token = $tokenGenerator->generateToken();

        try
        {
            $user->setResetToken($token);
            $entityManager->flush();
        } catch (\Exception $e)
        {
            $this->addFlash('warning', $e->getMessage());
            return $this->redirectToRoute('home');
        }

        $url = $this->generateUrl('app_reset_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);

        $message = (new \Swift_Message('Oubli de mot de passe - Réinitialisation'))
            ->setFrom(array('vivioclock@gmail.com'=> 'Les VallesBaques'))
            ->setTo($user->getEmail())
            ->setBody(
            $this->renderView(
                'security/emails/resetPasswordMail.html.twig',
                [
                    'user'=>$user,
                    'url'=>$url
                ]
            ),
                'text/html'
            );
        $mailer->send($message);

        $this->addFlash('notice', 'Mail envoyé, tu vas pouvoir te connecter à nouveau !');

        return $this->redirectToRoute('security_login');
      }
      */
      return $this->render('security/forgottenPassword.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
    }
 
    /**** Réinisialiation du mot de passe par mail
     * @Route("/reinitialiser-mot-de-passe/{token}", name="app_reset_password")
     */
    public function resetPassword(Request $request, string $token, UserPasswordEncoderInterface $passwordEncoder)
    {
        //Reset avec le mail envoyé
        if ($request->isMethod('POST')) {
            $entityManager = $this->getDoctrine()->getManager();
 
            $user = $entityManager->getRepository(User::class)->findOneByResetToken($token);
            /* @var $user User */
 
            if ($user === null) {
                $this->setSss('msgAlert', "Mot de passe non reconnu");
                return $this->redirectToRoute('home');
            }
 
            $user->setResetToken(null);
            $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
            $entityManager->flush();
 
            $this->setSss('msgAlert', "Mot de passe mis à jour !");
 
            return $this->redirectToRoute('security_login');
        }else {
 
            return $this->render('security/resetPassword.html.twig', ['token' => $token]);
        }
 
    }

    /**
     * Recherche d'un utilisateur par son nom.
     */
    private function findUser(User $user)
    {
      $doctrine = $this->getDoctrine();
      $em = $doctrine->getManager();
      $repository = $em->getRepository('App:User');
      return $repository->getUser($user);
    }

    /**
     * Enregistrement en base d'un nouvel utilisateur
     */
    private function saveUser(User $user, $encoder)
    {
      $pwd = $user->getPlainPassword();
      $pwdEncoded = $encoder->encodePassword($user, $pwd);
      $user->setPassword($pwdEncoded);
      $_SESSION["memberConnected"] = $user;

      $em = $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();
      $this->setUser($user);
    }

    /**
     * Modification en base de l'utilisateur
     */
    private function updateUser(User $user, $encoder)
    {
      $userEnBase = $this->findUser($user);
      // L'utilisateur a bien été trouvé en base ?
      if (!$userEnBase) return false;
      // Encoder le mot de passe
      $pwd = $user->getPlainPassword();
      $pwdEncoded = $encoder->encodePassword($user, $pwd);
      $userEnBase->setPassword($pwdEncoded);
      // Si l'email est renseigné, l'enregistrer (ainsi, on empèche la suppression accidentelle de l'email)
      $email = $user->getEmail();
      if (strlen($email) > 3) $userEnBase->setEmail($email);
      // Identifiant Discord
      $idDiscord = $user->getUserId();
      if (strlen($idDiscord) > 10) $userEnBase->setUserId($idDiscord);
      // Nb de joueurs
      $nb = $user->getNbJoueurs();
      $userEnBase->setNbJoueurs($nb);

      $em = $this->getDoctrine()->getManager();
      $em->flush();
      $this->setUser($userEnBase);
      $this->setSss('msgAlert', "Votre compte a été mis à jour.");
      return true;
    }

    // Met à jour $User selon les champs obtenus dans le formulaire du profil
    /**
     * @return User
     */
    private function getDisplayedUser(User $user)
    {
        if ($user)
        {
            $user->setPlainPassword($_POST["user_display_plainPassword"]);
            $user->setUserId($_POST["user_display_userId"]);
            $user->setEmail($_POST["user_display_email"]);
            $user->setNbJoueurs($_POST["user_display_nbJoueurs"]);
        }
        return $user;
    }

}
