<?php

namespace PW\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreateAndShareController extends Controller
{
	public function indexAction()
	{
		return $this->render('PWMainBundle:Default:index.html.twig');
	}


	public function authAction()
	{
		
	}

	public function chatAction()
	{

	}

}