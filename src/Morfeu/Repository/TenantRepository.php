<?php

namespace MorfeuApi\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use MorfeuApi\Business\Enum\Status;

class TenantRepository extends EntityRepository
{
    public function findByToken($token)
    {
        $result = $this->_em->createQuery('SELECT u FROM MorfeuApi\Entity\Tenant u WHERE u.key = :token')
        ->setParameter(':token', $token)
        ->getResult();

        if($result){
            $result = $result[0];
        }

        return $result;
    }

    public function findActualAppByTenant($tenant)
    {
        $result = $this->_em->createQuery('SELECT u FROM MorfeuApi\Entity\App u WHERE u.tenant = :tenant AND u.status = :status')
        ->setParameter(':tenant', $tenant)
        ->setParameter(':status', Status::ACTIVE)
        ->getResult();

        if($result){
            $result = $result[0];
        }

        return $result;
    }
}
