<?php

namespace PW\UserBundle\Controller;

use PW\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class SecurityController extends Controller
{
  public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('pw_main_homepage');
    }

    // Le service authentication_utils permet de récupérer le nom d'utilisateur
    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
    // (mauvais mot de passe par exemple)
    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('PWUserBundle:Security:login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }

  public function signupAction(Request $request)
  {
    $user = new User();
    $formbuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);

    $formbuilder
      ->add('username',  TextType::class)
      ->add('password',  TextType::class)
      ->add('email',  EmailType::class)
      ->add('save', SubmitType::class)
      ->getForm();

      $user->setRoles(array('ROLE_USER'));
      $user->setSalt('');

    $form = $formbuilder->getForm();

    if($request->isMethod('POST')){

      $form->handleRequest($request);

      if($form->isValid()){
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $request->getSession()->getFlashbag()->add('notice', 'User bien crée');

        return $this->redirectToRoute('pw_user_homepage');
      }
    }


      return $this->render('PWUserBundle:Security:signup.html.twig', array(
      'form' => $form->createView()));
  }
}
