<?php

namespace Morfeu\Bundle\RepositoryBundle\Repository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query;

class PaymentRepository extends EntityRepository{

    public function findActiveOrderedByName()
    {
        $result =  $this->createQueryBuilder('c')
        ->orderBy('c.name', 'ASC');

        return $result;
    }

}
