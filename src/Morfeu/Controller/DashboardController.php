<?php

namespace Morfeu\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DashboardController
{
    public function indexAction(Request $request, Application $app)
    {
        return $app['twig']->render('Dashboard/index.html.twig');
    }

}
