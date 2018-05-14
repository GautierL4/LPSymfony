<?php

namespace GL\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GLHomeBundle:Default:index.html.twig');
    }
}
