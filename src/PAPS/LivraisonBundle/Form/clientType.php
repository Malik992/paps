<?php

namespace PAPS\LivraisonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class clientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom',TextType::class,array("label"=>"Nom"))
        ->add('prenom',TextType::class,array("label"=>"Prénom"))
        ->add('telephone',NumberType::class,array("label"=>"Téléphone"))
        ->add('adresse',TextType::class,array("label"=>"Adresse"))
        ->add('email',EmailType::class,array("label"=>"Email"))
        ->add('password',PasswordType::class,array("label"=>"Password"))
        ->add('submit',SubmitType::class,array("label"=>"Inscription"));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PAPS\LivraisonBundle\Entity\client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'paps_livraisonbundle_client';
    }


}
