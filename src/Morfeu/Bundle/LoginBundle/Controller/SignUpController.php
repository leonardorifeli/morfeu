<?php

namespace Morfeu\Bundle\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\HttpFoundation\Request;

use Morfeu\Bundle\SystemBundle\Form\SignUpType;
use Morfeu\Bundle\SystemBundle\Entity\User;

class SignUpController extends Controller
{
    public function indexAction()
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);

        return $this->render('LoginBundle:SignUp:index.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function createCreateForm($entity)
    {
        $form = $this->createForm(new SignUpType(), $entity, array(
            'action' => $this->generateUrl('user_create_sign-up'),
            'method' => 'POST',
        ));

        return $form;
    }
}
