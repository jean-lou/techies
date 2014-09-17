<?php

namespace Techies\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TechiesUserBundle:Default:index.html.twig', array());
    }

    public function loggedAction()
    {
        return $this->render('TechiesUserBundle:Default:logged.html.twig', array());
    }
}
