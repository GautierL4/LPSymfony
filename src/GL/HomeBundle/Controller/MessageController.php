<?php

namespace GL\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessageController extends Controller
{
    public function showAction()
    {
        return $this->render('@GLHome/Accueil/homepage.html.twig');
    }
}
