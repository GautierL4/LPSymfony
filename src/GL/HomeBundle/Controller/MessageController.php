<?php

namespace GL\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GL\HomeBundle\Entity\Message;
use GL\HomeBundle\Form\MessageType;

class MessageController extends Controller
{

    public function sendMailAction(Request $request){
        $message = new Message();

        $user = $this->getUser();
        $userId = $user->getId();
        $message->setAuteur($user);

        $form = $this->createForm(MessageType::class, $message, array(
            'userId' => $user->getId(),
        ));

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

    public function showMailBoxAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();
        $messagesRecu = $em
            ->getRepository('GLHomeBundle:Message')
            ->findBy(array('destinataire' => $user));

        return $this->render('@GLHome/Message/mailbox.html.twig', array(
            'user' => $user,
            'messages' => $messagesRecu
        ));

    }

    public function showSendMailAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();
        $messageEnvoye = $em
            ->getRepository('GLHomeBundle:Message')
            ->findBy(array('auteur' => $user));

        return $this->render('GLHome/Message/mailbox.html.twig', array(
            'messages' => $messageEnvoye
        ));
    }

    public function showAction($id){

        $em = $this->getDoctrine()->getManager();

        $message = $em
            ->getRepository('GLHomeBundle:Message')
            ->find($id);

        return $this->render('@GLHome/Message/show.html.twig', array(
            'message' => $message
        ));

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
