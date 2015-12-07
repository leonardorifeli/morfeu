<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Morfeu\Bundle\PaymentBundle\Form\PaymentFilterType;
use Symfony\Component\HttpFoundation\Request;
use Morfeu\Bundle\BusinessBundle\Model\PaymentFilter;

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
        $user = $this->getUser();

        $period = new \DateTime("now");
        $period->setTime(0, 0);
        $period->modify('first day of this month');

        $periodTo = new \DateTime("now");
        $periodTo->setTime(0, 0);
        $periodTo->modify('last day of this month');

        $entity = new PaymentFilter();
        $filterForm = $this->createCreateFilterForm($entity);

        $entities = $this->getPaymentService()->getReceivedByUserAndStatusAndPeriod($user, null, $period, $periodTo);

        return $this->render('PaymentBundle:Received:index.html.twig', array(
            'entities' => $entities,
            'filterForm' => $filterForm->createView(),
        ));
    }

    public function filterAction(Request $request)
    {
        $user = $this->getUser();

        $entity = new PaymentFilter();
        $filterForm = $this->createCreateFilterForm($entity);
        $filterForm->handleRequest($request);

        $entities = $this->getPaymentService()->getReceivedByUserAndStatusAndPeriod($user, $entity->getStatus(), $entity->getPeriod(), $entity->getPeriodTo());

        return $this->render('PaymentBundle:Received:index.html.twig', array(
            'entities' => $entities,
            'filterForm' => $filterForm->createView(),
        ));
    }

    private function createCreateFilterForm(PaymentFilter $entity)
    {
        $form = $this->createForm(new PaymentFilterType(), $entity, array(
            'action' => $this->generateUrl('payment_received_filter'),
            'method' => 'GET',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Filtrar',
            'attr' => array(
                'class'=>'btn btn-primary'
            )
        ));

        return $form;
    }

}
