<?php

namespace Morfeu\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Morfeu\Form\BankUserType;
use Morfeu\Entity\BankUser;

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

    public function newAction(Request $request, Application $app)
    {
        $entity = new BankUser();

        $form = $this->createCreateForm($app);

        return $app['twig']->render('Bank/new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function createAction(Request $request, Application $app)
    {
        echo 1;
        exit;
    }

    private function createCreateForm(Application $app)
    {
        $form = $app['form.factory']->createBuilder(new \Morfeu\Form\BankUserType())
        ->setAction("bank/create")
        ->setMethod('POST')
        ->add('btn','submit', array(
            'label' => "Cadastrar",
            'attr' => array(
                'class' => 'btn btn-success'
            )
        ))->getForm();

        return $form;
    }

}
