<?php

namespace System\Bundle\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SystemBundle:Default:index.html.twig', array('name' => $name));
    }
}
