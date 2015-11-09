<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

        $entities = $this->getPaymentService()->getAccomplishedByUserAndStatusAndPeriod($user);

        return $this->render('PaymentBundle:Accomplished:index.html.twig', array(
            'entities' => $entities
        ));
    }

}
