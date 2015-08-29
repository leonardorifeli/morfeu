<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Morfeu\Bundle\EntityBundle\Entity\Payment;
use Morfeu\Bundle\PaymentBundle\Form\PaymentType;

use Morfeu\Bundle\BusinessBundle\Helper\PaymentHelper;

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

    public function accomplishedAction()
    {
        return $this->render('PaymentBundle:Accomplished:index.html.twig');
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

    public function editAction(Request $request, $id)
    {
        $payment = $this->getPaymentService()->get($id);

        if($payment){
            dump($payment);
        }

        exit;
    }

    public function createAction(Request $request)
    {
        $entity = new Payment();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $helper = new PaymentHelper();

            $entity = $helper->updateCreateDate($entity);
            $entity = $helper->updateUser($entity, $this->getUser());
            $entity = $helper->updateStatus($entity);

            $entity = $this->getPaymentService()->insertOrUpdate($entity);

            return $this->redirect($this->generateUrl('payment_edit', array(
                'id' => $entity->getId()
            )));
        }

        return $this->redirect($this->generateUrl('payment_edit', array(
            'id' => $entity->getId()
        )));
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
