<?php

namespace Morfeu\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Morfeu\Bundle\UserBundle\Form\UserProfileType;
use Morfeu\Bundle\EntityBundle\Entity\User;
use Morfeu\Bundle\BusinessBundle\Enum\HttpStatus;

class ProfileController extends Controller
{

    private $userProfileService;
    private $userService;

    private function getUserProfileService()
    {
        if (!$this->userProfileService) {
            $this->userProfileService = $this->get('userProfile.service');
        }

        return $this->userProfileService;
    }

    private function getUserService()
    {
        if (!$this->userService) {
            $this->userService = $this->get('user.service');
        }

        return $this->userService;
    }

    public function indexAction()
    {
        $entity = $this->getUser();
        $userProfile = $this->getUserProfileService()->getByUser($entity);
        $form = $this->createEditForm($userProfile);

        return $this->render('UserBundle:Profile:index.html.twig', array(
            'entity' => $entity,
            'profile' => $userProfile,
            'form' => $form->createView(),
        ));
    }

    public function updateAction(Request $request)
    {
        $entity = $this->getUser();
        $userProfile = $this->getUserProfileService()->getByUser($entity);
        $original = $userProfile->getPhoto();
        $password = $request->get('password');

        $editForm = $this->createEditForm($userProfile);
        $editForm->handleRequest($request);
        $form = $this->createEditForm($userProfile);

        $userProfile->setPhoto($original);

        try {
            $password = $this->getUserService()->changePassword($entity, $password);

            if (($userProfile->getPhoto() != $original) && (!is_null($userProfile->getPhoto()))) {
                if ($original) {
                    $userProfile->removeUpload($original);
                }

                $image = $userProfile->upload($userProfile->getPhoto());

                $userProfile->setPhoto($image);
            }

            $this->getUserProfileService()->save($userProfile);

            return $this->redirect($this->generateUrl('profile', array(
                'success' => HttpStatus::SUCCESS
            )));
        } catch (\Exception $error) {
            $message = $error->getMessage();

            return $this->render('UserBundle:Profile:index.html.twig', array(
                'entity' => $entity,
                'profile' => $userProfile,
                'form' => $form->createView(),
                'message' => $message
            ));
        }

        return $this->redirect($this->generateUrl('profile'));
    }

    private function createEditForm($entity)
    {
        $form = $this->createForm(new UserProfileType(), $entity, array(
            'action' => $this->generateUrl('profile_update'),
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
