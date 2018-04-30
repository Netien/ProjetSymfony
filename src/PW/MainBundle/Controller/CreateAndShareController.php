<?php

namespace PW\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PW\MainBundle\Entity\Groupe;
use PW\UserBundle\Entity\User;

class CreateAndShareController extends Controller
{
	public function indexAction()
	{

		$user = $this->getUser();

		$repository = $this
	  	->getDoctrine()
	  	->getManager()
	  	->getRepository('PWUserBundle:User')
		;

		$listGroupes = $user->getGroups();

		$arraygrp = [];

		foreach ($listGroupes as $group) 
		{
	 		$id = $group->getId();
	  		$arraygrp[] = array(
    			'id' => $group->getId(),
    			'titre' => $group->getTitre()
    		);
	  		
		}
		return $this->render('PWMainBundle:Default:index.html.twig',array('name' =>$user->getUsername(), 'arraygrp' => $arraygrp));
	}

	public function signupAction()
	{
		return $this->render('PWMainBundle:Default:register.html.twig');
	}

	public function authAction()
	{
		
	}

	public function chatAction()
	{

	}

	public function profileAction()
	{

		$user = $this->getUser();
		$listGroupes = $user->getGroups();

		$arraygrp = []; 

		foreach ($listGroupes as $group) 
		{
	 		$id = $group->getId();
	  		$arraygrp[] = array(
    			'id' => $group->getId(),
    			'titre' => $group->getTitre()
    		);
	  		
		}



		return $this->render('PWMainBundle:Default:profile.html.twig',array('username' =>$user->getUsername(),'password'=>$user->getPassword(),'mail'=>$user->getEmail(), 'arraygrp' => $arraygrp));
	}


	public function editProfileAction(Request $request)
	{
		$user = $this->getUser();

		$listGroupes = $user->getGroups();

		$arraygrp = []; 

		foreach ($listGroupes as $group) 
		{
	 		$id = $group->getId();
	  		$arraygrp[] = array(
    			'id' => $group->getId(),
    			'titre' => $group->getTitre()
    		);
	  		
		}

		$user1 = new User();
		    $formbuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);
	 $formbuilder
      ->add('username',  TextType::class)
      ->add('password',  TextType::class)
      ->add('email',  EmailType::class)
      ->add('save', SubmitType::class)
      ->getForm();

	   $user1->setRoles(array('ROLE_USER'));
      $user1->setSalt('');

    $form = $formbuilder->getForm();
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
	return $this->render('PWMainBundle:CreateAndShare:editProfile',array(
      'form' => $form->createView(),'name' =>$user->getUsername(), 'arraygrp' => $arraygrp));
}

	public function creategrpAction(Request $request)
	{

	$user = $this->getUser();

		$listGroupes = $repository->getGroups();

		$arraygrp = []; 

		foreach ($listGroupes as $group) 
		{
	 		$id = $group->getId();
	  		$arraygrp[] = array(
    			'id' => $group->getId(),
    			'titre' => $group->getTitre()
    		);
	  		
		}

		$groupe = new Groupe();
		$formbuilder = $this->get('form.factory')->createBuilder(FormType::class, $groupe);

		$formbuilder
			->add('titre',	TextType::class)
			->add('description',	TextType::class)
			->add('save',	SubmitType::class)
			->getForm();


		$form = $formbuilder->getForm();


		if($request->isMethod('POST')){

			$form->handleRequest($request);
			$nom= $user->getUsername();
			$groupe->setPseudoLeader($nom);
			$groupe->addUser($user);
			$user->addGroup($groupe);

			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($groupe);
				$em->flush();

				$request->getSession()->getFlashbag()->add('notice', 'Groupe bien crée');

				return $this->redirectToRoute('pw_main_homepage');
			}
		}


		  return $this->render('PWMainBundle:Default:addGroupe.html.twig', array(
      'form' => $form->createView(),'name' =>$user->getUsername(), 'arraygrp' => $arraygrp));
	}

}