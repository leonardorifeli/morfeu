<?php

namespace System\Bundle\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LoginBundle:Default:index.html.twig', array('name' => $name));
    }
}
