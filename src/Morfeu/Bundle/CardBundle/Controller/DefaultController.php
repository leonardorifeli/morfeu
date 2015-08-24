<?php

namespace Morfeu\Bundle\CardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CardBundle:Default:index.html.twig', array('name' => $name));
    }
}
