<?php

namespace System\Bundle\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ManagementBundle:Default:index.html.twig', array('name' => $name));
    }
}
