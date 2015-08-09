<?php

namespace Morfeu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProfile
 *
 * @ORM\Table(name="user_profile", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class UserProfile
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
     * @ORM\Column(name="photo", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $photo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_birth", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $profession;

    /**
     * @var \MorfeuApi\Bundle\EntityBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MorfeuApi\Bundle\EntityBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;



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
     * Set photo
     *
     * @param string $photo
     * @return UserProfile
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return UserProfile
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set profession
     *
     * @param string $profession
     * @return UserProfile
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string 
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set user
     *
     * @param \MorfeuApi\Bundle\EntityBundle\Entity\User $user
     * @return UserProfile
     */
    public function setUser(\MorfeuApi\Bundle\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MorfeuApi\Bundle\EntityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
