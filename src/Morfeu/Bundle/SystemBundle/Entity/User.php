<?php

namespace Morfeu\Bundle\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

/**
* User
*
* @ORM\Table(name="user", indexes={@ORM\Index(name="tenant_id", columns={"tenant_id"})})
* @ORM\Entity(repositoryClass="Morfeu\Bundle\SystemBundle\Repository\UserRepository")
*/
class User implements UserInterface, \Serializable, AdvancedUserInterface
{
    /**
    * @var integer
    *
    * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */
    private $id;

    /**
    * @var string
    *
    * @ORM\Column(name="name", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
    */
    private $name;

    /**
    * @var string
    *
    * @ORM\Column(name="email", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
    */
    private $email;

    /**
    * @var string
    *
    * @ORM\Column(name="password", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
    */
    private $password;

    /**
    * @var integer
    *
    * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=false, unique=false)
    */
    private $status;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="created_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $createdAt;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="updated_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $updatedAt;

    /**
    * @var string
    *
    * @ORM\Column(name="reset_password_token", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
    */
    private $resetPasswordToken;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="current_sign_in_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $currentSignInAt;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="last_sign_in_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $lastSignInAt;

    /**
    * @var string
    *
    * @ORM\Column(name="current_sign_in_ip", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
    */
    private $currentSignInIp;

    /**
    * @var string
    *
    * @ORM\Column(name="last_sign_in_ip", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
    */
    private $lastSignInIp;

    /**
    * @var \Morfeu\Bundle\SystemBundle\Entity\Tenant
    *
    * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\SystemBundle\Entity\Tenant")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="tenant_id", referencedColumnName="id", nullable=true)
    * })
    */
    private $tenant;

    private $confirmPassword;

    /**
    * Get id
    *
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Set name
    *
    * @param string $name
    * @return User
    */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
    * Get name
    *
    * @return string
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * Set email
    *
    * @param string $email
    * @return User
    */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
    * Get email
    *
    * @return string
    */
    public function getEmail()
    {
        return $this->email;
    }

    /**
    * Set password
    *
    * @param string $password
    * @return User
    */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
    * Get password
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->password;
    }

    /**
    * Set status
    *
    * @param integer $status
    * @return User
    */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
    * Get status
    *
    * @return integer
    */
    public function getStatus()
    {
        return $this->status;
    }

    /**
    * Set createdAt
    *
    * @param \DateTime $createdAt
    * @return User
    */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
    * Get createdAt
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
    * Set updatedAt
    *
    * @param \DateTime $updatedAt
    * @return User
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
    * Get updatedAt
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
    * Set resetPasswordToken
    *
    * @param string $resetPasswordToken
    * @return User
    */
    public function setResetPasswordToken($resetPasswordToken)
    {
        $this->resetPasswordToken = $resetPasswordToken;

        return $this;
    }

    /**
    * Get resetPasswordToken
    *
    * @return string
    */
    public function getResetPasswordToken()
    {
        return $this->resetPasswordToken;
    }

    /**
    * Set currentSignInAt
    *
    * @param \DateTime $currentSignInAt
    * @return User
    */
    public function setCurrentSignInAt($currentSignInAt)
    {
        $this->currentSignInAt = $currentSignInAt;

        return $this;
    }

    /**
    * Get currentSignInAt
    *
    * @return \DateTime
    */
    public function getCurrentSignInAt()
    {
        return $this->currentSignInAt;
    }

    /**
    * Set lastSignInAt
    *
    * @param \DateTime $lastSignInAt
    * @return User
    */
    public function setLastSignInAt($lastSignInAt)
    {
        $this->lastSignInAt = $lastSignInAt;

        return $this;
    }

    /**
    * Get lastSignInAt
    *
    * @return \DateTime
    */
    public function getLastSignInAt()
    {
        return $this->lastSignInAt;
    }

    /**
    * Set currentSignInIp
    *
    * @param string $currentSignInIp
    * @return User
    */
    public function setCurrentSignInIp($currentSignInIp)
    {
        $this->currentSignInIp = $currentSignInIp;

        return $this;
    }

    /**
    * Get currentSignInIp
    *
    * @return string
    */
    public function getCurrentSignInIp()
    {
        return $this->currentSignInIp;
    }

    /**
    * Set lastSignInIp
    *
    * @param string $lastSignInIp
    * @return User
    */
    public function setLastSignInIp($lastSignInIp)
    {
        $this->lastSignInIp = $lastSignInIp;

        return $this;
    }

    /**
    * Get lastSignInIp
    *
    * @return string
    */
    public function getLastSignInIp()
    {
        return $this->lastSignInIp;
    }

    /**
    * Set tenant
    *
    * @param \Morfeu\Bundle\SystemBundle\Entity\Tenant $tenant
    * @return User
    */
    public function setTenant(\Morfeu\Bundle\SystemBundle\Entity\Tenant $tenant = null)
    {
        $this->tenant = $tenant;

        return $this;
    }

    /**
    * Get tenant
    *
    * @return \Morfeu\Bundle\SystemBundle\Entity\Tenant
    */
    public function getTenant()
    {
        return $this->tenant;
    }



    /**
    * Returns the roles granted to the user.
    *
    * <code>
    * public function getRoles()
    * {
    *     return array('ROLE_USER');
    * }
    * </code>
    *
    * Alternatively, the roles might be stored on a ``roles`` property,
    * and populated in any number of different ways when the user object
    * is created.
    *
    * @return Role[] The user roles
    */
    public function getRoles()
    {
        $roles = array();
        $roles[] = 'ROLE_ADMIN';

        return $roles;
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->getActive();
    }

    /**
    * Removes sensitive data from the user.
    *
    * This is important if, at any given point, sensitive information like
    * the plain-text password is stored on this object.
    */
    public function eraseCredentials()
    {
        //TODO: Implement eraseCredentials() method.
    }

    /**
    * Returns the salt that was originally used to encode the password.
    *
    * This can return null if the password was not encoded using a salt.
    *
    * @return string|null The salt
    */
    public function getSalt()
    {
        return null;
    }

    /**
    * (PHP 5 &gt;= 5.1.0)<br/>
    * String representation of object
    * @link http://php.net/manual/en/serializable.serialize.php
    * @return string the string representation of the object or null
    */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
        ));
    }

    /**
    * (PHP 5 &gt;= 5.1.0)<br/>
    * Constructs the object
    * @link http://php.net/manual/en/serializable.unserialize.php
    * @param string $serialized <p>
    * The string representation of the object.
    * </p>
    * @return void
    */
    public function unserialize($serialized)
    {
        list (
        $this->id,
        $this->email,
        $this->password,
        ) = unserialize($serialized);
    }

    public function __toString()
    {
        return (string)$this->getEmail();
    }

    public function generateNewPassword()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }

        return implode($pass);
    }

    public function getUsername()
    {
        return $this->email;
    }

    /**
    * Get the value of Confirm Password
    *
    * @return mixed
    */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
    * Set the value of Confirm Password
    *
    * @param mixed confirmPassword
    *
    * @return self
    */
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }

}
