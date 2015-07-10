<?php

namespace System\Bundle\SystemBundle\Repository;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query;

class UserRepository extends EntityRepository implements UserProviderInterface{

    public function supportsClass($class)
    {
        return $this->getEntityName() === $class
        || is_subclass_of($class, $this->getEntityName());
    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $class));
        }

        return $this->find($user->getId());
    }

    public function loadUserByUsername($username)
    {
        $q = $this
        ->createQueryBuilder('u')
        ->where('u.email = :email')
        ->setParameter('email', $username)
        ->getQuery();

        try {
            $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            $message = sprintf(
            'Unable to find an active admin AcmeUserBundle:User object identified by "%s".',
            $username);
            throw new UsernameNotFoundException($message, 0, $e);
        }

        return $user;
    }
}
