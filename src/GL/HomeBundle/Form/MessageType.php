<?php

namespace GL\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{

    private $userId;
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // $userId = $options['userId'];

        $builder
            /*->add('auteur', EntityType::class, array(
                'class' => 'GLHomeBundle:User',
                'choice_label' => 'username',
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('u')
                        ->where('u.id = '.$userId);
                }
            ))*/
            ->add('sujet', TextType::class)
            ->add('destinataire', EntityType::class, array(
                'class' => 'GLHomeBundle:User',
                'choice_label' => 'username',
            ))
            ->add('corps', TextareaType::class)
            ->add('Envoyez', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GL\HomeBundle\Entity\Message'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gl_homebundle_message';
    }


}
