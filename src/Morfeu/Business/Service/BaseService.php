<?php

namespace Morfeu\Business\Service;

use Silex\Application;

abstract class BaseService{

    abstract protected function getRepository();

    public function saveOrUpdate($entity)
    {
        if(!$entity->getId()){
            $result = $this->getEm()->persist($entity);
            $result = $this->getEm()->flush();
        }else{
            $result = $this->getEm()->flush();
        }

        return $result;
    }

}
