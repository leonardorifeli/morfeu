<?php

namespace Morfeu\Bundle\RepositoryBundle\Repository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query;
use Morfeu\Bundle\BusinessBundle\Enum\TypePayment;

class PaymentRepository extends EntityRepository{

    public function findActiveOrderedByName()
    {
        $result =  $this->createQueryBuilder('c')
        ->orderBy('c.name', 'ASC');

        return $result;
    }

    public function findAccomplishedByUser($user, $period = null)
    {
        $result = $this->createQueryBuilder('c')
        ->where('c.paymentType = :type')
        ->andWhere('c.user = :user')
        ->setParameter(':type', TypePayment::ACCOMPLISHED)
        ->setParameter(':user', $user)
        ->orderBy('c.id', 'DESC')
        ->getQuery()
        ->getResult();

        return $result;
    }

}
