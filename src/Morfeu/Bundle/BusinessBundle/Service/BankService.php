<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\BusinessBundle\Service\BaseService;
use Morfeu\Bundle\EntityBundle\Entity\Bank;

class BankService extends BaseService {

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	protected function getRepository()
	{
		return $this->em->getRepository('EntityBundle:Bank');
	}

    public function get($id)
    {
        $entity = $this->getRepository()->find($id);

        return $entity;
    }

    public function getAll()
    {
        $entities = $this->getRepository()->findAll();

        return $entities;
    }

}
