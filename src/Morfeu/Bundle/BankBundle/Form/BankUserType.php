<?php

namespace Morfeu\Bundle\BankBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BankUserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('accountNumber')
            ->add('agencyNumber')
            ->add('bankType', 'entity',array(
                'class' => 'EntityBundle:BankType',
                'empty_value' => 'Selecione um registro'
            ))
            ->add('bank', 'entity', array(
                'class' => 'EntityBundle:Bank',
                'choice_label' => 'name',
                'empty_value' => 'Selecione um registro'
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Morfeu\Bundle\EntityBundle\Entity\BankUser'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'morfeu_bundle_entitybundle_bankuser';
    }
}
