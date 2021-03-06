<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\BusinessBundle\Service\BaseService;
use Morfeu\Bundle\EntityBundle\Entity\Card;
use Morfeu\Bundle\BusinessBundle\Enum\Status;

class CardService extends BaseService
{

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    protected function getRepository()
    {
        return $this->em->getRepository('EntityBundle:Card');
    }

    public function get($id)
    {
        $entity = $this->getRepository()->find($id);

        return $entity;
    }

    public function getCardByUser($user)
    {
        $entities = $this->getRepository()->findBy(array(
            'user' => $user,
            'status' => Status::ACTIVE
        ));

        return $entities;
    }

    public function getTotalCardByUser($user)
    {
        $entities = $this->getCardByUser($user);

        $total = 0;
        foreach ($entities as $key => $entity) {
            $total++;
        }

        return $total;
    }

    public function insertOrUpdate($entity)
    {
        $result = $this->saveOrUpdate($entity);

        return $result;
    }

    public function getAll()
    {
        $entities = $this->getRepository()->findAll();

        return $entities;
    }

}
