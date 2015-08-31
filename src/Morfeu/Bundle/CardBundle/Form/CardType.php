<?php

namespace Morfeu\Bundle\CardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Morfeu\Bundle\RepositoryBundle\Repository\BankUserRepository;
use Morfeu\Bundle\RepositoryBundle\Repository\CarrierRepository;

class CardType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('description')
        ->add('expirationDay', 'number', array(
            'required' => false,
            'attr' => array(
                'max' => 31,
                'min' => 1,
            )
        ))
        ->add('finalNumber')
        ->add('validateAt')
        ->add('cardType', 'entity', array(
            'class' => 'EntityBundle:CardType',
            'empty_value' => 'Selecione um registro'
        ))
        ->add('bankUser', 'entity', array(
            'class' => 'EntityBundle:BankUser',
            'query_builder' => function(BankUserRepository $er){
                return $er->findActiveOrderedByName();
            },
            'empty_value' => 'Selecione um registro'
            ))
            ->add('carrier', 'entity', array(
                'class' => 'EntityBundle:Carrier',
                'query_builder' => function(CarrierRepository $er){
                    return $er->findActiveOrderedByName();
                },
                'empty_value' => 'Selecione um registro'
            ));
        }

        /**
        * @param OptionsResolverInterface $resolver
        */
        public function setDefaultOptions(OptionsResolverInterface $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => 'Morfeu\Bundle\EntityBundle\Entity\Card'
            ));
        }

        /**
        * @return string
        */
        public function getName()
        {
            return 'morfeu_bundle_entitybundle_card';
        }
    }
