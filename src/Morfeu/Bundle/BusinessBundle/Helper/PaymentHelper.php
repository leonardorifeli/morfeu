<?php

namespace Morfeu\Bundle\BusinessBundle\Helper;

use Morfeu\Bundle\EntityBundle\Payment;
use Morfeu\Bundle\BusinessBundle\Enum\Status;

class PaymentHelper
{

    public function updateCreateDate($entity)
    {
        $date = new \DateTime();
        $entity->setCreatedAt($date);
        $entity->setUpdatedAt($date);
        return $entity;
    }

    public function updateUpdateDate($entity)
    {
        $date = new \DateTime();
        $entity->setUpdatedAt($date);
        return $entity;
    }

    public function updateUser($entity, $user)
    {
        $entity->setUser($user);
        return $entity;
    }

    public function inactive($entity)
    {
        $date = new \DateTime();
        $entity->setDeletedAt($date);
        $entity->setStatus(Status::INACTIVE);
        return $entity;
    }

    public function updateStatus($entity)
    {
        $entity->setStatus(Status::ACTIVE);
        return $entity;
    }

}
