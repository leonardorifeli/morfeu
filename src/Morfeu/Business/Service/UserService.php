<?php

namespace Morfeu\Business\Service;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class UserService extends BaseService implements UserProviderInterface
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

    public function loadUserByUsername($username)
    {
        $stmt = $this->getRepository()->findByUsername($username);

        if (!$user = $stmt) {
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }

        $roles = 'ROLE_ADMIN, ROLE_USER';

        return new User($user->getEmail(), $user->getPassword(), explode(',', $roles), true, true, true, true);
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Symfony\Component\Security\Core\User\User';
    }
}
