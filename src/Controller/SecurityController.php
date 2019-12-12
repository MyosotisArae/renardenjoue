<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserCnxType;
use App\Form\UserCreateType;
use App\Form\UserDisplayType;
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
//use Symfony\Component\Validator\Validation;
//use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends ParentController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $_SESSION["ongletActif"] = "CNX";
        if ($this->getUser()) {
          $this->redirectToRoute('compte');
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
        $this->redirectToRoute('compte');
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
            $formulaire = $this->createForm(UserDisplayType::class, $user, ['action' => 'compte']);
            return $this->render('security/connecte.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
          }
          else $formulaire->get('plainPassword')->addError(new FormError("Ce n'est pas le bon mot de passe."));
        }
        else $formulaire->get('nom')->addError(new FormError("Nom d'utilisateur inconnu."));
      }
      return $this->render('security/login.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
    }
    
    /**
     * L'utilisateur est connecté.
     * @Route("/compte", name="compte")
     */
    public function connecte(Request $request)
    {
        $_SESSION["ongletActif"] = "CNX";

        $user = $this->getUser();
        $formulaire = $this->createForm(UserDisplayType::class, $user);
        $formulaire->handleRequest($request);

        if ($request->isMethod('POST'))
        {
          $formulaire->submit($request->request->get($formulaire->getName()));
          if ($formulaire->isSubmitted() && $formulaire->isValid())
          {
            $user = $formulaire->getData();
            $this->setUser($user);
            return $this->redirectToRoute('compte');
          }
        }

        return $this->render('security/connecte.html.twig', ["session" => $_SESSION,'formulaire' => $formulaire->createView()]);
    }

    /**
     * @Route("/newUser", name="newUser")
     */
    public function newUser(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $_SESSION["ongletActif"] = "CNX";
        if ($this->getUser()) {
          $this->redirectToRoute('compte');
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
            $pwd = $user->getPlainPassword();
            $pwdEncoded = $encoder->encodePassword($user, $pwd);
            $user->setPassword($pwdEncoded);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->setUser($user);
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
     * Cette fonction indique si l'utilisateur existe :
     * - il ne vaut pas NULL
     * - son id n'est pas zéro (la valeur que le constructeur de User.php met par défaut)
     */
    private function existe($user)
    {
      return ($user != null && $user->getId() > 0);
    }
}
