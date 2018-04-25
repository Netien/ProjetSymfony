<?php

namespace PW\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PWMainBundle:Default:index.html.twig');
    }
}
