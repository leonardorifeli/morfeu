<?php

namespace Morfeu\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{

    private $userProfileService;

    private function getUserProfileService()
    {
        if(!$this->userPRofileService){
            $this->userProfileService = $this->get('userProfile.service');
        }

        return $this->userProfileService;
    }

    public function indexAction()
    {
        $entity = $this->getUser();

        return $this->render('UserBundle:Profile:index.html.twig', array(
            'entity' => $entity
        ));
    }
}
