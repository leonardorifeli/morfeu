<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInGroup
 *
 * @ORM\Table(name="user_in_group", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="group_permission_id", columns={"group_permission_id"})})
 * @ORM\Entity
 */
class UserInGroup
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
     * @var \Morfeu\Bundle\EntityBundle\Entity\GroupPermission
     *
     * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\GroupPermission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_permission_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $groupPermission;

    /**
     * @var \Morfeu\Bundle\EntityBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\User")
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return UserInGroup
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
     * @return UserInGroup
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
     * Set groupPermission
     *
     * @param \Morfeu\Bundle\EntityBundle\Entity\GroupPermission $groupPermission
     * @return UserInGroup
     */
    public function setGroupPermission(\Morfeu\Bundle\EntityBundle\Entity\GroupPermission $groupPermission = null)
    {
        $this->groupPermission = $groupPermission;

        return $this;
    }

    /**
     * Get groupPermission
     *
     * @return \Morfeu\Bundle\EntityBundle\Entity\GroupPermission 
     */
    public function getGroupPermission()
    {
        return $this->groupPermission;
    }

    /**
     * Set user
     *
     * @param \Morfeu\Bundle\EntityBundle\Entity\User $user
     * @return UserInGroup
     */
    public function setUser(\Morfeu\Bundle\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Morfeu\Bundle\EntityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
