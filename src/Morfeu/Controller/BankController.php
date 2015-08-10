<?php

namespace Morfeu\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class BankController
{

    private $bankService;

    private function getBankService($app)
    {
        if(!$this->bankService){
            $this->bankService = $app['bank.service'];
        }

        return $this->bankService;
    }

    public function indexAction(Request $request, Application $app)
    {
        $result = $this->getBankService($app)->getAll();

        return $app['twig']->render('Bank/index.html.twig', array(
            'entities' => $result
        ));
    }

}
