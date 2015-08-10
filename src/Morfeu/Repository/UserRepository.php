<?php

namespace Morfeu\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use MorfeuApi\Business\Enum\Status;

class UserRepository extends EntityRepository
{
    /*
    public function findByToken($token)
    {
        $result = $this->_em->createQuery('SELECT u FROM MorfeuApi\Entity\Tenant u WHERE u.key = :token')
        ->setParameter(':token', $token)
        ->getResult();

        if($result){
            $result = $result[0];
        }

        return $result;
    }
    */
}
