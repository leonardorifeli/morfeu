<?php

namespace System\Bundle\SystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('password')
            ->add('active')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('resetPasswordToken')
            ->add('currentSignInAt')
            ->add('lastSignInAt')
            ->add('currentSignInIp')
            ->add('lastSignInIp')
        ;
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
