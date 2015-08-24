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

        $delete = array();
        foreach($entities as $key => $entity){
            $delete[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }

        return $this->render('BankBundle:Bank:index.html.twig', array(
            'entities' => $entities,
            'delete' => $delete
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

        if ($form->isValid()) {
            $helper = new BankHelper();
            $entity = $helper->updateCreateDate($entity);
            $entity = $helper->updateUser($entity, $this->getUser());
            $entity = $helper->updateStatus($entity);

            $entity = $this->getBankUserService()->insertOrUpdate($entity);
        }

        return $this->redirect($this->generateUrl('bank'));
    }

    public function editAction($id)
    {
        $entity = $this->getBankUserService()->get($id);

        if (!$entity) {
            return $this->redirect($this->generateUrl('bank'));
        }

        $form = $this->createEditForm($entity);

        return $this->render('BankBundle:Bank:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    public function updateAction(Request $request, $id)
    {
        $entity = $this->getBankUserService()->get($id);

        if (!$entity) {
            return $this->redirect($this->generateUrl('bank'));
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $helper = new BankHelper();
            $entity = $helper->updateUpdateDate($entity);
            $entity = $this->getBankUserService()->insertOrUpdate($entity);

            return $this->redirect($this->generateUrl('bank'));
        }

        return $this->redirect($this->generateUrl('bank'));
    }

    public function deleteAction(Request $request, $id)
    {

        $entity = $this->getBankUserService()->get($id);

        if (!$entity) {
            return $this->redirect($this->generateUrl('bank'));
        }

        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $helper = new BankHelper();
            $entity = $helper->inactive($entity);
            $entity = $this->getBankUserService()->insertOrUpdate($entity);
        }

        return $this->redirect($this->generateUrl('bank'));
    }

    /**
    * Creates a form to delete a CompetitorAction entity by id.
    *
    * @param mixed $id The entity id
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm($id)
    {
        $form = $this->createFormBuilder()
        ->setAction($this->generateUrl('bank_delete', array('id' => $id)))
        ->setMethod('DELETE')
        ->add('submit', 'submit', array(
            'label' => 'Excluir',
            'attr' => array(
                'class' => 'btn btn-danger',
                'onclick' => 'return confirm("Tem certeza que deseja efetuar a exclusão?");'
            )
        ))
        ->getForm();

        return $form;
    }

    /**
    * Creates a form to edit a CompetitorAction entity.
    *
    * @param CompetitorAction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BankUser $entity)
    {
        $form = $this->createForm(new BankUserType(), $entity, array(
            'action' => $this->generateUrl('bank_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Atualizar',
            'attr' => array(
                'class' => 'btn btn-primary'
            )
        ));

        return $form;
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
