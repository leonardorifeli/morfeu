<?php

namespace Morfeu\Bundle\BusinessBundle\Helper;

use Morfeu\Bundle\EntityBundle\Payment;
use Morfeu\Bundle\BusinessBundle\Enum\Status;

class PaymentHelper
{
    public function plotDatePurchaseUpdate($entity, $numberMonth)
    {
        if($numberMonth > 1){
            $numberMonth = ($numberMonth-1);
            $numberMonth = "P{$numberMonth}M";
            $interval = new \DateInterval($numberMonth);
            $newDate = $entity->getPurchaseMadeAt()->add($interval);

            $entity->setPurchaseMadeAt($newDate);
        }

        return $entity;
    }

    public function updateCreateDate($entity)
    {
        $date = new \DateTime("now");
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

    public function updatePriceInPlot($entity)
    {
        $price = $entity->getPrice()/$entity->getPlotQuantity();
        $entity->setPrice($price);

        return $entity;
    }

    public function updateTitleInPlot($entity, $plotNumber)
    {
        $title = "{$entity->getName()} - Parcela #{$plotNumber}/{$entity->getPlotQuantity()}";

        $entity->setName($title);

        return $entity;
    }

    public function updateUser($entity, $user)
    {
        $entity->setUser($user);
        return $entity;
    }

    public function delete($entity)
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
