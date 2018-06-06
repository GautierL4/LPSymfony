<?php

namespace GL\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GL\HomeBundle\Entity\Message;
use GL\HomeBundle\Form\MessageType;

class MessageController extends Controller
{
    public function showAction()
    {
        return $this->render('@GLHome/Accueil/homepage.html.twig');
    }

    public function sendMailAction(Request $request){
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);

        if($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            $request->getSession()->getFlashBag()->add('validation', 'Message envoyé.');

            return $this->redirectToRoute('gl_home_mailpage');
        }


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
