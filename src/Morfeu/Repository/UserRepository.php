<?php

namespace Morfeu\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Morfeu\Business\Enum\Status;

class UserRepository extends EntityRepository
{

    public function findByUsername($username)
    {

        $result = $this->_em->createQuery("SELECT u FROM Morfeu\Entity\User u WHERE u.email = :username AND u.status = :status")
        ->setParameter(":username", $username)
        ->setParameter(":status", Status::ACTIVE)
        ->getResult();
        
        if($result){
            $result = $result[0];
        }

        return $result;

    }

}
