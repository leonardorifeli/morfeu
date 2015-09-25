<?php

namespace Morfeu\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Morfeu\Bundle\UserBundle\Form\UserType;
use Morfeu\Bundle\EntityBundle\Entity\User;

class ProfileController extends Controller
{

    private $userProfileService;

    private function getUserProfileService()
    {
        if (!$this->userPRofileService) {
            $this->userProfileService = $this->get('userProfile.service');
        }

        return $this->userProfileService;
    }

    public function indexAction()
    {
        $entity = $this->getUser();
        $form = $this->createUpdateForm($entity);

        return $this->render('UserBundle:Profile:index.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    private function createUpdateForm(User $entity)
    {

        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('profile'),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Atualizar',
            'attr' => array(
                'class' => 'btn btn-primary'
            )));

        return $form;

    }
}
