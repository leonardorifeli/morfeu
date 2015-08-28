<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Morfeu\Bundle\EntityBundle\Entity\Payment;
use Morfeu\Bundle\PaymentBundle\Form\PaymentType;

class PaymentController extends Controller
{

    private $paymentService;

    private function getPaymentService()
    {
        if(!$this->paymentService){
            $this->paymentService = $this->get('payment.service');
        }

        return $this->paymentService;
    }

    public function indexAction()
    {
        return $this->render('PaymentBundle:Payment:index.html.twig');
    }

    public function newAction()
    {
        $entity = new Payment();
        $form = $this->createCreateForm($entity);

        return $this->render('PaymentBundle:Payment:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }


    /**
    * Creates a form to create a Notice entity.
    *
    * @param Card $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Payment $entity)
    {
        $form = $this->createForm(new PaymentType(), $entity, array(
            'action' => $this->generateUrl('payment_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Cadastrar',
            'attr' => array(
                'class'=>'btn btn-primary'
            )));

            return $form;
        }
    }
