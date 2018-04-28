<?php

namespace PW\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreateAndShareController extends Controller
{
	public function indexAction()
	{


// Si la requête courante n'est pas derrière un pare-feu, $token est null

// Sinon, on récupère l'utilisateur
$user = $this->getUser();

// Si l'utilisateur courant est anonyme, $user vaut « anon. »

// Sinon, c'est une instance de notre entité User, on peut l'utiliser normalement

		return $this->render('PWMainBundle:Default:index.html.twig',array('name' =>$user->getUsername()));
	}


	public function authAction()
	{
		
	}

	public function chatAction()
	{

	}

}