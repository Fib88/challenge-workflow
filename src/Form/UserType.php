<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('role')
//            ->add('roles', ChoiceType::class ,array(
//                'attr' => array('class'=>'form-control','style'=>'margin:5px 0;'),
//                'choices' => array(
//                    'agent' => 'ROLE_AGENT',
//                    'second line' => 'ROLE_SECOND_LINE_AGENT',
//                    'manager' => 'ROLE_MANAGER',
//                    'user' => 'ROLE_USER'
//                ),
//                'required'=>true,
//            ))
            ->add('password')
            ->add('firstname')
            ->add('lastname')
            ->add('isVerified')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
