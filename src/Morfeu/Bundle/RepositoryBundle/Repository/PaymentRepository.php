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

    public function findAccomplishedByUser($user, $status = null, $period = null, $periodTo = null)
    {
        $entities = $this->createQueryBuilder('c')
        ->where('c.paymentType = :type')
        ->andWhere('c.user = :user')
        ->setParameter(':type', TypePayment::ACCOMPLISHED)
        ->setParameter(':user', $user);

        if($status){
            $entities->andWhere('c.status = :status')
            ->setParameter(':status', $status);
        }

        if($period){
            $entities->andWhere('c.paymentMadeAt > :period')
            ->setParameter(':period', $period);
        }

        if($periodTo){
            $entities->andWhere('c.paymentMadeAt < :periodTo')
            ->setParameter(':periodTo', $periodTo);
        }

        $entities->orderBy('c.purchaseMadeAt', 'DESC');

        $entities = $entities->getQuery()->getResult();

        return $entities;
    }

    public function findReceivedByUser($user, $status = null, $period = null, $periodTo = null)
    {
        $entities = $this->createQueryBuilder('c')
        ->where('c.paymentType = :type')
        ->andWhere('c.user = :user')
        ->setParameter(':type', TypePayment::RECEIVED)
        ->setParameter(':user', $user);

        if($status){
            $entities->andWhere('c.status = :status')
            ->setParameter(':status', $status);
        }

        if($period){
            $entities->andWhere('c.paymentMadeAt > :period')
            ->setParameter(':period', $period);
        }

        if($periodTo){
            $entities->andWhere('c.paymentMadeAt < :periodTo')
            ->setParameter(':periodTo', $periodTo);
        }

        $entities->orderBy('c.purchaseMadeAt', 'DESC');

        $entities = $entities->getQuery()->getResult();

        return $entities;
    }

}
