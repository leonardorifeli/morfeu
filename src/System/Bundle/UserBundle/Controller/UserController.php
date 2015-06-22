<?php

namespace System\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use System\Bundle\SystemBundle\Form\UserType;
use System\Bundle\SystemBundle\Entity\User;

class UserController extends Controller
{

    private $userService;

    private function getUserService()
    {
        if(!$this->userService){
            $this->userService = $this->get('user.service');
        }

        return $this->userService;
    }

    public function indexAction()
    {
        echo 1;
        exit;
    }

    public function createSignUpAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $entity->setActive(1);
        $entity->setCreatedAt(new \DateTime);

        try{
            $user = $this->getUserService()->save($entity);

            return $this->redirect($this->generateUrl('sign-in'));
        }catch(\Exception $e){
            return $this->render('LoginBundle:SignUp:index.html.twig', array(
                'form' => $form->createView(),
                'error' => $e->getMessage(),
            ));
        }

        return $this->render('LoginBundle:SignUp:index.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function createCreateForm($entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST',
        ));

        return $form;
    }
}
