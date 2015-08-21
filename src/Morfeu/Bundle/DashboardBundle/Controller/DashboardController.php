<?php

namespace Morfeu\Bundle\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {

        return $this->render('DashboardBundle:Dashboard:index.html.twig');
    }
}
