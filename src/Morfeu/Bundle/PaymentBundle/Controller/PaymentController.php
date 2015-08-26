<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReceivedController extends Controller
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
        return $this->render('PaymentBundle:Payment:new.html.twig');
    }

    public function newAction()
    {
        $entity = new Card();
        $form = $this->createCreateForm($entity);

        return $this->render('CardBundle:Card:new.html.twig', array(
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
    private function createCreateForm(Card $entity)
    {
        $form = $this->createForm(new CardType(), $entity, array(
            'action' => $this->generateUrl('card_create'),
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
}
