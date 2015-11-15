<?php

namespace Morfeu\Budle\ExportMailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ExportMailBundle:Default:index.html.twig', array('name' => $name));
    }
}
