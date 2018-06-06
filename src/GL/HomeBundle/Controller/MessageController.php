<?php

namespace GL\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessageController extends Controller
{
    public function showAction()
    {
        return $this->render('@GLHome/Accueil/homepage.html.twig');
    }

    public function createAction(Request $request)
    {
        $entityManager = $this->getDoctrine->getManager();

        $message = new Message();
        $message->setAuteur($auteur);
        $message->setDestinataire($destinataire);
        $message->setSujet('TestDuSujet');
        $message->setCorps('TestDuCorps');
    }


}
