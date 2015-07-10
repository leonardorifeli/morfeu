<?php

namespace System\Bundle\SystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SignUpType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'teste123'
                )
            ))
            ->add('tenant', 'hidden')
            ->add('email', 'email', array(
                'required' => true
            ))
            ->add('password', 'password', array(
                'required' => true
            ))
            ->add('confirmPassword', 'password', array(
                'required' => true
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'System\Bundle\SystemBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'system_bundle_systembundle_user';
    }
}
