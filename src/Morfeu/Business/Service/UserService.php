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
    private $userService;

    public function __construct($em, $userService)
    {
        $this->em = $em;
        $this->userService = $userService;
    }

    protected function getRepository()
    {
        $repository = $this->em->getRepository("Morfeu\Entity\User");

        return $repository;
    }

    public function loadUserByUsername($username)
    {
        echo $username;
        exit;
        $stmt = $this->conn->executeQuery('SELECT * FROM user WHERE email = ?', array(strtolower($username)));

        if (!$user = $stmt->fetch()) {
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }

        $user['roles'] = 'ROLE_ADMIN, ROLE_USER';

        var_dump($user);
        exit;

        return new User($user['email'], $user['password'], explode(',', $user['roles']), true, true, true, true);
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
