<?php

namespace SMTC\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EditUsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('users', 'collection', array(
                'type'           => new UserType(),
                'label'          => 'Usuarios',
                'attr'           => array(
                    'class' => 'row users'
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {

    }

    public function getName()
    {
        return 'users';
    }
}
