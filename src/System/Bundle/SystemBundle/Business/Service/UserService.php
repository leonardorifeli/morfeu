<?php
namespace System\Bundle\SystemBundle\Business\Service;

use System\Bundle\SystemBundle\Service\BaseService;

class UserService extends BaseService
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    protected function getRepository()
    {
        return $this->em->getRepository('SystemBundle:User');
    }

    public function getByEmail($email)
    {
        $entity = $this->getRepository()->findOneBy(array(
            'email' => $email
        ));

        return $entity;
    }

}
