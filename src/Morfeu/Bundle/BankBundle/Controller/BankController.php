<?php

namespace Morfeu\Bundle\BankBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Morfeu\Bundle\EntityBundle\Entity\BankUser;
use Morfeu\Bundle\BankBundle\Form\BankUserType;
use Morfeu\Bundle\BusinessBundle\Helper\BankHelper;

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

    public function newAction()
    {
        $entity = new BankUser();
        $form = $this->createCreateForm($entity);

        return $this->render('BankBundle:Bank:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new BankUser();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $helper = new BankHelper();
        $entity = $helper->updateCreateDate($entity);
        $entity = $helper->updateUser($entity, $this->getUser());
        $entity = $helper->updateStatus($entity);

        $entity = $this->getBankUserService()->insertOrUpdate($entity);

        return $this->redirect($this->generateUrl('bank'));
    }

    /**
    * Creates a form to create a Notice entity.
    *
    * @param BankUser $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(BankUser $entity)
    {
        $form = $this->createForm(new BankUserType(), $entity, array(
            'action' => $this->generateUrl('bank_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Cadastrar',
            'attr' => array(
                'class'=>'btn btn-primary'
            )));

            return $form;
        }
    }
