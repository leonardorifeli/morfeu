<?php

namespace Morfeu\Bundle\BankBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BankController extends Controller
{

    private $bankUserService;

    private function getBankUserService()
    {
        if(!$this->bankUserService){
            $this->bankUserService = $this->get('bankUser.service');
        }

        return $this->bankUserService;
    }

    public function indexAction()
    {
        $entities = $this->getBankUserService()->getBankByUser($this->getUser());

        return $this->render('BankBundle:Bank:index.html.twig', array(
            'entities' => $entities
        ));
    }
}
