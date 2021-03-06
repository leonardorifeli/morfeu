<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\BusinessBundle\Service\BaseService;
use Morfeu\Bundle\EntityBundle\Entity\Payment;
use Morfeu\Bundle\BusinessBundle\Enum\Status;
use Morfeu\Bundle\BusinessBundle\Enum\StatusPayment;

class PaymentService extends BaseService
{

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    protected function getRepository()
    {
        return $this->em->getRepository('EntityBundle:Payment');
    }

    public function get($id)
    {
        $entity = $this->getRepository()->find($id);

        return $entity;
    }

    public function insertOrUpdate($entity)
    {
        $result = $this->saveOrUpdate($entity);

        return $result;
    }

    public function getAccomplishedByUserAndStatusAndPeriod($user, $status = null, $period = null, $periodTo = null)
    {
        if($period){
            $period->setTime(0, 0);
            $period->modify('-1 day');
        }

        if($periodTo){
            $periodTo->setTime(0, 0);
            $periodTo->modify('+1 day');
        }

        $result = $this->getRepository()->findAccomplishedByUser($user, $status, $period, $periodTo);

        return $result;
    }

    public function getTotalAccomplishedByUserAndPeriod($user, $status = null, $period = null, $periodTo = null)
    {
        $entities = $this->getRepository()->findAccomplishedByUser($user, $status, $period, $periodTo);

        $total = 0;
        foreach ($entities as $key => $entity) {
            $total = $total + $entity->getPrice();
        }

        return $total;
    }

    public function getReceivedByUserAndStatusAndPeriod($user, $status = null, $period = null, $periodTo = null)
    {
        if($period){
            $period->setTime(0, 0);
            $period->modify('-1 day');
        }

        if($periodTo){
            $periodTo->setTime(0, 0);
            $periodTo->modify('+1 day');
        }
        
        $result = $this->getRepository()->findReceivedByUser($user, $status, $period, $periodTo);

        return $result;
    }

}
