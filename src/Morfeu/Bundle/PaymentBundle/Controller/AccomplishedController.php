<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Morfeu\Bundle\PaymentBundle\Form\PaymentFilterType;
use Symfony\Component\HttpFoundation\Request;
use Morfeu\Bundle\BusinessBundle\Model\PaymentFilter;

class AccomplishedController extends Controller
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
        $period->modify('first day of this month');

        $periodTo = new \DateTime("now");
        $periodTo->modify('last day of this month');

        $entities = $this->getPaymentService()->getAccomplishedByUserAndStatusAndPeriod($user, null, $period, $periodTo);

        $entity = new PaymentFilter();
        $filterForm = $this->createCreateFilterForm($entity);

        return $this->render('PaymentBundle:Accomplished:index.html.twig', array(
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

        $entities = $this->getPaymentService()->getAccomplishedByUserAndStatusAndPeriod($user, $entity->getStatus(), $entity->getPeriod(), $entity->getPeriodTo());

        return $this->render('PaymentBundle:Accomplished:index.html.twig', array(
            'entities' => $entities,
            "linkReset" => $this->generateUrl("payment_accomplished"),
            'filterForm' => $filterForm->createView(),
        ));
    }

    private function createCreateFilterForm(PaymentFilter $entity)
    {
        $form = $this->createForm(new PaymentFilterType(), $entity, array(
            'action' => $this->generateUrl('payment_accomplished_filter'),
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
