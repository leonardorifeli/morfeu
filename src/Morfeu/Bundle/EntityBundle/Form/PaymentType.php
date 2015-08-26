<?php

namespace Morfeu\Bundle\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaymentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('name')
            ->add('description')
            ->add('price')
            ->add('type')
            ->add('plotQuantity')
            ->add('fixedPayment')
            ->add('fixedPaymentDate')
            ->add('local')
            ->add('finalizedDate')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('status')
            ->add('paymentFormUser')
            ->add('paymentTypeUser')
            ->add('user')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Morfeu\Bundle\EntityBundle\Entity\Payment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'morfeu_bundle_entitybundle_payment';
    }
}
