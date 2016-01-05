<?php

namespace Morfeu\Bundle\PaymentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Morfeu\Bundle\BusinessBundle\Enum\StatusPayment;

class PaymentFilterType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $status = array(
            StatusPayment::PENDING => 'Pendente',
            StatusPayment::FINISHED => 'Finalizado',
            StatusPayment::ALL => 'Todos',
        );

        $builder
        ->add('period', 'date', array(
            'widget' => 'single_text',
            'required' => false,
            'format' => 'd/MM/yyyy',
        ))
        ->add('periodTo', 'date', array(
            'widget' => 'single_text',
            'format' => 'd/MM/yyyy',
            'required' => false,
        ))
        ->add('status', 'choice', array(
            'choices' => $status,
            'required' => false,
            'empty_value' => "Selecione uma opção"
        ));
    }

    /**
    * @param OptionsResolverInterface $resolver
    */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Morfeu\Bundle\BusinessBundle\Model\PaymentFilter'
        ));
    }

    /**
    * @return string
    */
    public function getName()
    {
        return 'morfeu_filter_payment';
    }
}
