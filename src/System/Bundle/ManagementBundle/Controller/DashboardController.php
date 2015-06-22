<?php

namespace System\Bundle\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManagementBundle:Dashboard:index.html.twig');
    }
}
