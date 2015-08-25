<?php

namespace Morfeu\Bundle\RepositoryBundle\Repository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query;
use Morfeu\Bundle\BusinessBundle\Enum\Status;

class CardTypeRepository extends EntityRepository{

    public function findActiveOrderedByName()
    {
        $result = $this->createQueryBuilder('c')
        ->where('c.status = :status')
        ->setParameter(':status', Status::ACTIVE)
        ->orderBy('c.name', 'ASC');

        return $result;
    }

}
