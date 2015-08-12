<?php

namespace Morfeu\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use MorfeuApi\Business\Enum\Status;

class UserRepository extends EntityRepository
{

    public function findUserByUsername($username)
    {

        $result = $this->_em->createQuery("SELECT u FROM Morfeu\Entity\User u WHERE u.username = :username")
        ->setParameter(":username", $username)
        ->getResult();

        if($result){
            $result = $result[0];
        }

        return $result;

    }

}
