<?php

namespace System\Bundle\SystemBundle\Business\Service;

abstract class BaseService
{

    protected $em;

    protected abstract function getRepository();

    protected function saveOrUpdate($entity) {
        if (!$entity->getId()) {
            $entity = $this->em->persist($entity);
            $entity = $this->em->flush();
        } else {
            $entity = $this->em->flush();
        }

        return $entity;
    }
    
    public function listAll() {
		return $this->getRepository()->findAll();
	}

	public function find($id) {
		return $this->getRepository()->find($id);
	}

}
