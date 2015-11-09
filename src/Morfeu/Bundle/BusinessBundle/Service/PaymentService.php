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

    public function getAccomplishedByUserAndStatusAndPeriod($user, $status = null, $period = null)
    {
        $result = $this->getRepository()->findAccomplishedByUser($user, $period, $status);

        return $result;
    }

    public function getTotalAccomplishedByUserAndPeriod($user, $status, $period = null)
    {
        $entities = $this->getRepository()->findAccomplishedByUser($user, $status, $period);

        $total = 0;
        foreach ($entities as $key => $entity) {
            $total = $total + $entity->getPrice();
        }

        return $total;
    }

    public function getReceivedByUserAndStatusAndPeriod($user, $status = null, $period = null)
    {
        $result = $this->getRepository()->findReceivedByUser($user, $period, $status);

        return $result;
    }

}
