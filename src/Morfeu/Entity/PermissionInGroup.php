<?php

namespace Morfeu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermissionInGroup
 *
 * @ORM\Table(name="permission_in_group", indexes={@ORM\Index(name="group_permission_id", columns={"group_permission_id"}), @ORM\Index(name="permission_id", columns={"permission_id"})})
 * @ORM\Entity
 */
class PermissionInGroup
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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $status;

    /**
     * @var \MorfeuApi\Bundle\EntityBundle\Entity\GroupPermission
     *
     * @ORM\ManyToOne(targetEntity="MorfeuApi\Bundle\EntityBundle\Entity\GroupPermission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_permission_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $groupPermission;

    /**
     * @var \MorfeuApi\Bundle\EntityBundle\Entity\Permission
     *
     * @ORM\ManyToOne(targetEntity="MorfeuApi\Bundle\EntityBundle\Entity\Permission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $permission;



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
     * @return PermissionInGroup
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
     * @return PermissionInGroup
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
     * Set status
     *
     * @param integer $status
     * @return PermissionInGroup
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
     * Set groupPermission
     *
     * @param \MorfeuApi\Bundle\EntityBundle\Entity\GroupPermission $groupPermission
     * @return PermissionInGroup
     */
    public function setGroupPermission(\MorfeuApi\Bundle\EntityBundle\Entity\GroupPermission $groupPermission = null)
    {
        $this->groupPermission = $groupPermission;

        return $this;
    }

    /**
     * Get groupPermission
     *
     * @return \MorfeuApi\Bundle\EntityBundle\Entity\GroupPermission 
     */
    public function getGroupPermission()
    {
        return $this->groupPermission;
    }

    /**
     * Set permission
     *
     * @param \MorfeuApi\Bundle\EntityBundle\Entity\Permission $permission
     * @return PermissionInGroup
     */
    public function setPermission(\MorfeuApi\Bundle\EntityBundle\Entity\Permission $permission = null)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return \MorfeuApi\Bundle\EntityBundle\Entity\Permission 
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
