<?php

namespace PW\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class CreateAndShareController extends Controller
{


	public function indexAction()
	{
		return new Response("Ceci est un test");
	}


	public function authAction()
	{
		
	}

	public function envoiAction($name, \Swift_mailer $mailer)
	{

	}

	public function chatAction()
	{
		return $this->render('PWMainBundle:CreateAndShare:chat.html.twig');
	}

}