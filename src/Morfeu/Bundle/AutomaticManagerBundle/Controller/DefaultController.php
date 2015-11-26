<?php

namespace Morfeu\Bundle\AutomaticManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AutomaticManagerBundle:Default:index.html.twig', array('name' => $name));
    }
}
