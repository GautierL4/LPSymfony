<?php

namespace GL\HomeBundle\Controller;

use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GL\HomeBundle\Entity\Notification;

class NotificationController extends Controller
{
    public function createAction(){
        $notification = new Notification();

        $user = $this->getUser();

        // Ici on utiliserait plutôt l'entité correspondant au conseiller de l'utilisateur
        // Cependant la partie gestion des utilisateurs est réalisé par un autre binôme
        $notification->setUser($user);

        $now = new \DateTime();
        var_dump($now);
        $notification->setDate($now);

        // Ici on ajouterais un générateur de description en fonction de l'action précèdente (Upload/Validation ...)
        $notification->setDescription("Cette partie dépend de la partie upload non réalisé par le group (binôme manquant)");

        $notification->setStatut(false);

        $em = $this->getDoctrine()->getManager();
        $em->persist($notification);
        $em->flush();

        return $this->redirectToRoute('gl_home_homepage');
    }

    public function showAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();
        $notifications = $em
            ->getRepository('GLHomeBundle:Notification')
            ->findBy(array('user' => $user));

        foreach($notifications as $notification){

        }
        

        return $this->render('@GLHome/Notification/notifications.html.twig', array(
            'notifications' => $notifications
        ));
    }

}
