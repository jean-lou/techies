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

    public function testAction()
    {
        $article = new Article();
        $article->setTitle("L'histoire d'un bon weekend !");
        $article->setContent("Le weekend était vraiment trop bien !");
        $article->setCreatedAt(new \DateTime('now',new \DateTimeZone('Europe/Paris')));
        $article->setEnabled(true);
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        if ($user)
        {
            $article->setUser($user);

        }
        $em->persist($article);
        $em->flush();
        $url=$this->generateUrl('suplol_user_homepage');
        return $this->redirect($url);
    }
}
