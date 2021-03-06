<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Morfeu\Bundle\EntityBundle\Entity\Payment;
use Morfeu\Bundle\PaymentBundle\Form\PaymentType;
use Morfeu\Bundle\BusinessBundle\Helper\PaymentHelper;
use Morfeu\Bundle\BusinessBundle\Enum\TypePayment;

class PaymentController extends Controller
{

    private $paymentService;
    private $paymentAttachmentService;

    private function getPaymentService()
    {
        if(!$this->paymentService){
            $this->paymentService = $this->get('payment.service');
        }

        return $this->paymentService;
    }

    private function getPaymentAttachmentService()
    {
        if(!$this->paymentAttachmentService){
            $this->paymentAttachmentService = $this->get('paymentAttachment.service');
        }

        return $this->paymentAttachmentService;
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
        $entity = $this->getPaymentService()->get($id);

        if(!$entity){
            return $this->redirect($this->generateUrl('payment'));
        }

        $attachment = $this->getPaymentAttachmentService()->getByPayment($entity);

        $form = $this->createEditForm($entity);

        return $this->render('PaymentBundle:Payment:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'attachment' => $attachment
        ));
    }

    public function deleteAction(Request $request, $id, $typePayment)
    {
        $entity = $this->getPaymentService()->get($id);

        if (!$entity){
            return $this->redirect($this->generateUrl('dashboard_homepage'));
        }

        $helper = new PaymentHelper();
        $entity = $helper->delete($entity);

        $entity = $this->getPaymentService()->insertOrUpdate($entity);

        if($typePayment == TypePayment::ACCOMPLISHED){
            return $this->redirect($this->generateUrl('payment_accomplished'));
        }

        if($typePayment == TypePayment::RECEIVED){
            return $this->redirect($this->generateUrl('payment_received'));
        }

        return $this->redirect($this->generateUrl('dashboard_homepage'));
    }

    public function updateAction(Request $request, $id)
    {
        $entity = $this->getPaymentService()->get($id);

        if (!$entity){
            return $this->redirect($this->generateUrl('payment'));
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $helper = new PaymentHelper();
        $entity = $helper->updateUpdateDate($entity);

        $entity = $this->getPaymentService()->insertOrUpdate($entity);

        return $this->redirect($this->generateUrl('payment_edit', array(
            'id' => $entity->getId()
        )));
    }

    /**
    *
    * @param Payment $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Payment $entity)
    {
        $form = $this->createForm(new PaymentType(), $entity, array(
            'action' => $this->generateUrl('payment_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Atualizar',
            'attr' => array(
                'class' => 'btn btn-primary'
            )
        ));

        return $form;
    }

    public function detailAction($id)
    {
        $entity = $this->getPaymentService()->get($id);

        if (!$entity){
            return $this->redirect($this->generateUrl('payment'));
        }

        $attachment = $this->getPaymentAttachmentService()->getByPayment($entity);

        return $this->render('PaymentBundle:Payment:detail.html.twig', array(
            'payment' => $entity,
            'attachment' => $attachment,
        ));
    }

    public function printAction($id)
    {
        $entity = $this->getPaymentService()->get($id);

        if (!$entity){
            return $this->redirect($this->generateUrl('payment'));
        }

        $attachment = $this->getPaymentAttachmentService()->getByPayment($entity);

        return $this->render('PaymentBundle:Payment:print.html.twig', array(
            'payment' => $entity,
            'attachment' => $attachment,
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new Payment();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $typePayment = $entity->getPaymentType()->getId();

        for($i = 1; $i <= $entity->getPlotQuantity(); $i++){
            $entity = new Payment();
            $form = $this->createCreateForm($entity);
            $form->handleRequest($request);

            $helper = new PaymentHelper();
            $entity = $helper->plotDatePurchaseUpdate($entity, $i);
            $entity = $helper->updateCreateDate($entity);
            $entity = $helper->updateUser($entity, $this->getUser());

            $entity = $helper->updatePriceInPlot($entity);
            $entity = $helper->updateTitleInPlot($entity, $i);
            $entity->setPlotNumber($i);

            $this->getPaymentService()->insertOrUpdate($entity);
        }

        if($typePayment == TypePayment::ACCOMPLISHED){
            return $this->redirect($this->generateUrl('payment_accomplished'));
        }

        if($typePayment == TypePayment::RECEIVED){
            return $this->redirect($this->generateUrl('payment_received'));
        }
    }

    /**
    * Creates a form to create a Notice entity.
    *
    * @param Payment $entity The entity
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
            )
        ));

        return $form;
    }
}
