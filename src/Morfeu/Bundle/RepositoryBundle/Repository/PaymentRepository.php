<?php

namespace Morfeu\Bundle\RepositoryBundle\Repository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query;
use Morfeu\Bundle\BusinessBundle\Enum\TypePayment;
use Morfeu\Bundle\BusinessBundle\Enum\StatusPayment;

class PaymentRepository extends EntityRepository{

    public function findActiveOrderedByName()
    {
        $result =  $this->createQueryBuilder('c')
        ->where('c.status = :status')
        ->setParameter(':status', StatusPayment::PENDING)
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

        if(($status != StatusPayment::DELETED) || (!$status)){
            $entities->andWhere('c.status <> :deletedStatus')
            ->setParameter(':deletedStatus', StatusPayment::DELETED);
        }

        if($status){
            $entities->andWhere('c.status = :status')
            ->setParameter(':status', $status);
        }

        if($period){
            $entities->andWhere('c.purchaseMadeAt > :period')
            ->setParameter(':period', $period);
        }

        if($periodTo){
            $entities->andWhere('c.purchaseMadeAt < :periodTo')
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

        if($status != StatusPayment::DELETED){
            $entities->andWhere('c.status <> :deletedStatus')
            ->setParameter(':deletedStatus', StatusPayment::DELETED);
        }

        if($status){
            $entities->andWhere('c.status = :status')
            ->setParameter(':status', $status);
        }

        if($period){
            $entities->andWhere('c.purchaseMadeAt >= :period')
            ->setParameter(':period', $period);
        }

        if($periodTo){
            $entities->andWhere('c.purchaseMadeAt =< :periodTo')
            ->setParameter(':periodTo', $periodTo);
        }

        $entities->orderBy('c.purchaseMadeAt', 'DESC');

        $entities = $entities->getQuery()->getResult();

        return $entities;
    }

}
