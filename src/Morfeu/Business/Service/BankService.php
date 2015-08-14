<?php

namespace Morfeu\Business\Service;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class BankService extends BaseService
{

    public function __construct($em)
    {
        $this->em = $em;
    }

    protected function getRepository()
    {
        $repository = $this->em->getRepository('Morfeu\Entity\Bank');

        return $repository;
    }

    public function getAll($user)
    {
        $result = $this->getRepository()->findBy(array(
            'user' => $user
            'status' => Status::ACTIVE
        ));

        return $result;
    }

}
