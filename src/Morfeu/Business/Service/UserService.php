<?php

namespace Morfeu\Business\Service;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class UserService extends BaseService
{

    private $em;

    public function __construct($em)
    {
        $this->em = $em;
    }

    protected function getRepository()
    {
        $repository = $this->em->getRepository("Morfeu\Entity\User");

        return $repository;
    }
}
