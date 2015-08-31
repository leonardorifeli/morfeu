<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccomplishedController extends Controller
{

    public function indexAction()
    {
        return $this->render('PaymentBundle:Accomplished:index.html.twig');
    }

}
