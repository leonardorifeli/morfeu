<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReceivedController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaymentBundle:Received:index.html.twig');
    }
}
