<?php
namespace Morfeu\Bundle\BusinessBundle\Service;

use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\BusinessBundle\Service\BaseService;

class UserService extends BaseService
{
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    protected function getRepository()
    {
        return $this->em->getRepository('EntityBundle:User');
    }

    public function getByEmail($email)
    {
        $entity = $this->getRepository()->findOneBy(array(
            'email' => $email
        ));

        return $entity;
    }

    public function changePassword($user, $password)
    {
        if ($user) {
            if (($password) && (strlen($password) < 8)) {
                throw new \Exception("A senha deve possui mais que oito caracteres. Por gentileza, verifique.");
            }

            $user->setPassword($password);
            $this->save($user);

            return $password;
        }
    }

    public function get($id)
    {
        $entities = $this->getRepository()->find($id);

        return $entities;
    }

    public function save($entity)
    {
        $save = $this->saveOrUpdate($entity);

        return $save;
    }

}
