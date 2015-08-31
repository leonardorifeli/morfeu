<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\BusinessBundle\Service\BaseService;
use Morfeu\Bundle\EntityBundle\Entity\Payment;
use Morfeu\Bundle\BusinessBundle\Enum\Status;

class PaymentService extends BaseService {

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

	public function getAccomplishedByUser($user, $period = null){
		$result = $this->getRepository()->findAccomplishedByUser($user, $period);

		return $result;
	}

}
