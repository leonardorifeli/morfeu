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
    private $app;

    public function __construct($em, $app)
    {
        $this->em = $em;
        $this->app = $app;
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

        $this->app['user'] = $user;

        $userProvider = new User($user->getEmail(), $user->getPassword(), explode(',', $roles), true, true, true, true);

        return $userProvider;
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
