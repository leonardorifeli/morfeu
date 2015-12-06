<?php

namespace Morfeu\Bundle\PaymentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Morfeu\Bundle\RepositoryBundle\Repository\PaymentTypeRepository;
use Morfeu\Bundle\RepositoryBundle\Repository\PaymentFormRepository;
use Morfeu\Bundle\RepositoryBundle\Repository\CardRepository;
use Morfeu\Bundle\BusinessBundle\Enum\FixedPayment;
use Morfeu\Bundle\BusinessBundle\Enum\StatusPayment;

class PaymentType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('description', 'textarea', array(
            'required'    => false,
            'attr' => array(
                'class' => 'textarea'
            ),
            'empty_data'  => null
        ))
        ->add('paymentMadeAt', 'datetime', array(
            'widget' => 'single_text',
            'required' => false,
            'format' => 'dd/MM/yyyy H:m',
        ))
        ->add('purchaseMadeAt', 'datetime', array(
            'widget' => 'single_text',
            'format' => 'dd/MM/yyyy H:m',
            'required' => true,
        ))
        ->add('price', 'number', array(
            'required' => true,
            'grouping' => true,
        ))
        ->add('paymentType', 'entity', array(
            'class' => 'EntityBundle:PaymentType',
            'query_builder' => function(PaymentTypeRepository $er){
                return $er->findActiveOrderedByName();
            },
            'empty_value' => 'Selecione um registro'
            ))
            ->add('paymentForm', 'entity', array(
                'class' => 'EntityBundle:PaymentForm',
                'query_builder' => function(PaymentFormRepository $er){
                    return $er->findActiveOrderedByName();
                },
                'empty_value' => 'Selecione um registro'
                ))
                ->add('card', 'entity', array(
                    'class' => 'EntityBundle:Card',
                    'query_builder' => function(CardRepository $er){
                        return $er->findActiveOrderedByName();
                    },
                    'required' => false,
                    'empty_value' => 'Nenhum Cartão'
                    ))
                    ->add('plotQuantity', 'integer', array(

                    ))
                    ->add('fixedPayment', 'choice', array(
                        'choices' => array(
                            FixedPayment::NO => 'Não',
                            FixedPayment::YES => 'Sim'
                        )
                    ))
                    ->add('local')
                    ->add('status', 'choice', array(
                        'choices' => array(
                            StatusPayment::PENDING => 'Pendente',
                            StatusPayment::FINISHED => 'Finalizado'
                        )
                    ));
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
