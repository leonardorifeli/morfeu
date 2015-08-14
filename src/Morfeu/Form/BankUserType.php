<?php
namespace Morfeu\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints;

class BankUserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('agencyNumber', 'text', array(
            'required' => true
        ))
        ->add('accountNumber', 'text', array(
            'required' => true
        ))
        ->add('agencyNumber', 'entity', array(
            'class' => "Morfeu\Entity\Bank"
        ));

        return $builder;
    }

    public function getName()
    {
        return 'morfeu_bank_user';
    }

}
