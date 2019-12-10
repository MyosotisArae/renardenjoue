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
//use Symfony\Component\Validator\Validation;
//use Symfony\Component\Form\Extension\Validator\ValidatorExtension;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {
        $_SESSION["ongletActif"] = "CNX";
        // if ($this->getUser()) {
        //    $this->redirectToRoute('target_path');
        // }

        $user = new User;
        $formulaire = $this->createForm(UserCnxType::class, $user);
        if ($request->isMethod('POST'))
        {
          $formulaire->submit($request->request->get($formulaire->getName()));
          if ($formulaire->isSubmitted() && $formulaire->isValid())
          {
            $user = $formulaire->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $_SESSION["user"] = $user;
            return $this->redirectToRoute('compte');
          }
        }

        return $this->render('security/login.html.twig', ['formulaire' => $formulaire->createView()]);
    }

/*
    public function login(Request $request)
    {
        $_SESSION["ongletActif"] = "CNX";
        
        if ($this->getUser()) {
            $this->redirectToRoute('compte');
        }
        

        $user = new User;
        //$formulaire = $this->createForm(UserCnxType::class, $user); //, ['action' => $this->generateUrl('compte')]);
        $formulaire = $this->createFormBuilder($user)
            ->add('nom',      TextType::class,     ['label' => "Nom d'utilisateur"])
            ->add('password', PasswordType::class, ['label' => 'Mot de passe'])
            ->add('submit',   SubmitType::class,   ['label' => 'Connexion', 'attr' => ['method' => 'POST']])
            ->getForm();

        $formulaire->handleRequest($request);
print_r(">>> method:'".$request->getMethod()."' <<<");
if ($request->getMethod() != 'GET') die;
        //$formulaire->submit($request->request->get($formulaire->getName()));
        if ($formulaire->isSubmitted() && $formulaire->isValid())
        {
          $user = $formulaire->getData();
          //$_SESSION["user"] = $user;
          return $this->redirectToRoute('compte');
        }

        return $this->render('security/login.html.twig', ['formulaire' => $formulaire->createView()]);
    }
*/
    /**
     * L'utilisateur est connecté.
     * @Route("/compte", name="compte")
     */
    public function connecte(Request $request)
    {
        $_SESSION["ongletActif"] = "CMP";
        if ($this->getUser())
        {
          var_dump("------------------- this->getUser() ------------------------");
          var_dump($this->getUser());
          //$this->redirectToRoute('target_path');
        }

        //$user = $_SESSION["user"];
        $user = new User;
        $formulaire = $this->createForm(UserDisplayType::class, $user);
        $formulaire->handleRequest($request);

        if ($request->isMethod('POST'))
        {
          $formulaire->submit($request->request->get($formulaire->getName()));
          if ($formulaire->isSubmitted() && $formulaire->isValid())
          {
            $user = $formulaire->getData();
            $_SESSION["user"] = $user;
            //return $this->redirectToRoute('compte');
          }
        }

        return $this->render('security/connecte.html.twig', ['formulaire' => $formulaire->createView()]);
    }

    /**
     * @Route("/newUser", name="newUser")
     */
    public function newUser(Request $request)
    {
        $_SESSION["ongletActif"] = "CNX";
        // if ($this->getUser()) {
        //    $this->redirectToRoute('target_path');
        // }

        $user = new User;
        $formulaire = $this->createForm(UserCreateType::class, $user);

        if ($request->isMethod('POST'))
        {
          $formulaire->submit($request->request->get($formulaire->getName()));
          if ($formulaire->isSubmitted() && $formulaire->isValid())
          {
            $user = $formulaire->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $_SESSION["user"] = $user;
            return $this->redirectToRoute('compte');
          }
        }

        return $this->render('security/newUser.html.twig', ['formulaire' => $formulaire->createView()]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
}
