<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

abstract class BaseService
{

    protected $em;

    protected abstract function getRepository();

    protected function saveOrUpdate($entity)
    {
        if (!$entity->getId()) {
            $this->em->persist($entity);
            $this->em->flush();
        } else {
            $this->em->flush();
        }

        return $entity;
    }

    public function listAll()
    {
        return $this->getRepository()->findAll();
    }

    public function find($id)
    {
        return $this->getRepository()->find($id);
    }

}
