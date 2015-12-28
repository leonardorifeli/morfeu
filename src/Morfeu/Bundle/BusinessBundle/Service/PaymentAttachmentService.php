<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\BusinessBundle\Service\BaseService;
use Morfeu\Bundle\EntityBundle\Entity\Payment;
use Morfeu\Bundle\BusinessBundle\Enum\Status;
use Morfeu\Bundle\BusinessBundle\Enum\StatusPayment;
use Morfeu\Bundle\BusinessBundle\Enum\Attachment;

class PaymentAttachmentService extends BaseService
{

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    protected function getRepository()
    {
        return $this->em->getRepository('EntityBundle:PaymentAttachment');
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

    public function getByUser($user)
    {
        $entities = $this->getRepository()->findBy(array(
            'user' => $user,
            'status' => Attachment::STATUS_ACTIVE,
        ), array(
            'id' => 'DESC',
        ));

        return $entities;
    }

    public function getByPayment($payment)
    {
        $entities = $this->getRepository()->findBy(array(
            'payment' => $payment,
            'status' => Attachment::STATUS_ACTIVE,
        ), array(
            'id' => 'DESC',
        ));

        return $entities;
    }

}
