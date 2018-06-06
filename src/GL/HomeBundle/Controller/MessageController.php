<?php

namespace GL\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GL\HomeBundle\Entity\Message;
use GL\HomeBundle\Form\MessageType;

class MessageController extends Controller
{
    public function showAction()
    {
        return $this->render('@GLHome/Accueil/homepage.html.twig');
    }

    public function sendMailAction(){
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);


        return $this->render('@GLHome/Message/sendmail.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showMailBoxAction()
    {
        
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
