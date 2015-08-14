<?php

namespace Morfeu\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class BankController
{

    private $bankUserService;

    private function getBankUserService($app)
    {
        if(!$this->bankUserService){
            $this->bankUserService = $app['bankUser.service'];
        }

        return $this->bankUserService;
    }

    public function indexAction(Request $request, Application $app)
    {
        $user = $app['user'];

        $result = $this->getBankUserService($app)->getAll($user);

        return $app['twig']->render('Bank/index.html.twig', array(
            'entities' => $result
        ));
    }

}
