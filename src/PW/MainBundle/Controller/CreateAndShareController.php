<?php

namespace PW\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreateAndShareController extends Controller
{
	public function indexAction()
	{


	
		$user = $this->getUser();

		$repository = $this
	  	->getDoctrine()
	  	->getManager()
	  	->getRepository('PWMainBundle:Groupe')
		;

		$listGroupes = $repository->findAll();

		$arraygrp = [];

		$em = $this->getDoctrine()->getManager();

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


	public function authAction()
	{
		
	}

	public function chatAction()
	{

	}

}