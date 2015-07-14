<?php
namespace System\Bundle\SystemBundle\Business\Service;

use System\Bundle\SystemBundle\Business\Service\BaseService;
use Doctrine\ORM\EntityManager;

class UserService extends BaseService
{
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

    public function save($entity)
    {
        $save = $this->saveOrUpdate($entity);

        return $save;
    }

}
