<?php

namespace Morfeu\Bundle\UserBundle\Form;

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
            ->add('status')
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
            'data_class' => 'Morfeu\Bundle\EntityBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'morfeu_bundle_userbundle_user';
    }
}
