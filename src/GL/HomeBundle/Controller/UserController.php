<?php

namespace GL\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GL\HomeBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserController extends Controller
{
    public function showAction()
    {
        return $this->render('@GLHome/Accueil/homepage.html.twig');
    }

    public function connectAction(Request $request){
        $user = new User();

        // $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);

        $formBuilder = $this->createFormBuilder($user);

        $formBuilder
            ->add('email', TextType::class, array('label' => 'Adresse mail', 'required' => true))
            ->add('password', TextType::class, array('label' => 'Mot de passe', 'required' => true))
            ->add('Connectez vous', SubmitType::class)
        ;

        $form = $formBuilder->getForm();

        if($request->isMethod("POST")){

            $form->handleRequest($request);

            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                
            }
        }

        return $this->render('@GLHome/Accueil/connect.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function validConnectAction(SessionInterface $session){

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
