<?php

namespace Morfeu\Bundle\CardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Morfeu\Bundle\EntityBundle\Entity\Card;
use Morfeu\Bundle\CardBundle\Form\CardType;
use Morfeu\Bundle\BusinessBundle\Helper\CardHelper;

class CardController extends Controller
{

    private $cardService;

    private function getCardService()
    {
        if(!$this->cardService){
            $this->cardService = $this->get('card.service');
        }

        return $this->cardService;
    }

    public function indexAction()
    {
        $entities = $this->getCardService()->getCardByUser($this->getUser());

        $delete = array();
        foreach($entities as $key => $entity){
            $delete[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }

        return $this->render('CardBundle:Card:index.html.twig', array(
            'entities' => $entities,
            'delete' => $delete
        ));
    }

    public function newAction()
    {
        $entity = new Card();
        $form = $this->createCreateForm($entity);

        return $this->render('CardBundle:Card:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new Card();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $helper = new CardHelper();
            $entity = $helper->updateCreateDate($entity);
            $entity = $helper->updateUser($entity, $this->getUser());
            $entity = $helper->updateStatus($entity);

            $entity = $this->getCardService()->insertOrUpdate($entity);
        }

        return $this->redirect($this->generateUrl('card'));
    }

    public function editAction($id)
    {
        $entity = $this->getCardService()->get($id);

        if (!$entity) {
            return $this->redirect($this->generateUrl('card'));
        }

        $form = $this->createEditForm($entity);

        return $this->render('CardBundle:Card:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    public function updateAction(Request $request, $id)
    {
        $entity = $this->getCardService()->get($id);

        if (!$entity) {
            return $this->redirect($this->generateUrl('card'));
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $helper = new CardHelper();
            $entity = $helper->updateUpdateDate($entity);
            $entity = $this->getCardService()->insertOrUpdate($entity);

            return $this->redirect($this->generateUrl('card'));
        }

        return $this->redirect($this->generateUrl('card'));
    }

    public function deleteAction(Request $request, $id)
    {

        $entity = $this->getCardService()->get($id);

        if (!$entity) {
            return $this->redirect($this->generateUrl('card'));
        }

        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $helper = new CardHelper();
            $entity = $helper->inactive($entity);
            $entity = $this->getCardService()->insertOrUpdate($entity);
        }

        return $this->redirect($this->generateUrl('card'));
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
        ->setAction($this->generateUrl('card_delete', array('id' => $id)))
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
    private function createEditForm(Card $entity)
    {
        $form = $this->createForm(new CardType(), $entity, array(
            'action' => $this->generateUrl('card_update', array('id' => $entity->getId())),
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
    * @param Card $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Card $entity)
    {
        $form = $this->createForm(new CardType(), $entity, array(
            'action' => $this->generateUrl('card_create'),
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
