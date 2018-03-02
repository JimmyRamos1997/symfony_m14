<?php

namespace Vallbona\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VallbonaWebBundle:Default:index.html.twig');
    }

     public function articleAction()
    {
        return $this->render('VallbonaWebBundle:Default:article.html.twig');
    }    
}
