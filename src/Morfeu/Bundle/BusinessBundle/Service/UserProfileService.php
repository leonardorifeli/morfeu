<?php
namespace Morfeu\Bundle\BusinessBundle\Service;

use Morfeu\Bundle\BusinessBundle\Service\BaseService;
use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\EntityBundle\Entity\UserProfile;

class UserProfileService extends BaseService
{
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    protected function getRepository()
    {
        return $this->em->getRepository('EntityBundle:UserProfile');
    }

    public function getByUser($user)
    {
        if($user){
            $entities = $this->getRepository()->findOneBy(array(
                'user' => $user,
            ));

            if(!$entities){
                $entities = new UserProfile();
                $entities->setUser($user);
                $entities = $this->save($entities);
            }

            return $entities;
        }
    }

    public function save($entity)
    {
        $save = $this->saveOrUpdate($entity);

        return $save;
    }

}
