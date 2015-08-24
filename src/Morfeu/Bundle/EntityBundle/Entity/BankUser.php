<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankUser
 *
 * @ORM\Table(name="bank_user", indexes={@ORM\Index(name="bank_id", columns={"bank_id"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="bank_type_id", columns={"bank_type_id"})})
 * @ORM\Entity
 */
class BankUser
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
     * @ORM\Column(name="account_number", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $accountNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="agency_number", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $agencyNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_account", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $typeAccount;

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
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $deletedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $status;

    /**
     * @var \Morfeu\Bundle\EntityBundle\Entity\BankType
     *
     * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\BankType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_type_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $bankType;

    /**
     * @var \Morfeu\Bundle\EntityBundle\Entity\Bank
     *
     * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\Bank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $bank;

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
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return BankUser
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string 
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set agencyNumber
     *
     * @param string $agencyNumber
     * @return BankUser
     */
    public function setAgencyNumber($agencyNumber)
    {
        $this->agencyNumber = $agencyNumber;

        return $this;
    }

    /**
     * Get agencyNumber
     *
     * @return string 
     */
    public function getAgencyNumber()
    {
        return $this->agencyNumber;
    }

    /**
     * Set typeAccount
     *
     * @param integer $typeAccount
     * @return BankUser
     */
    public function setTypeAccount($typeAccount)
    {
        $this->typeAccount = $typeAccount;

        return $this;
    }

    /**
     * Get typeAccount
     *
     * @return integer 
     */
    public function getTypeAccount()
    {
        return $this->typeAccount;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return BankUser
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
     * @return BankUser
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return BankUser
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return BankUser
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
     * Set bankType
     *
     * @param \Morfeu\Bundle\EntityBundle\Entity\BankType $bankType
     * @return BankUser
     */
    public function setBankType(\Morfeu\Bundle\EntityBundle\Entity\BankType $bankType = null)
    {
        $this->bankType = $bankType;

        return $this;
    }

    /**
     * Get bankType
     *
     * @return \Morfeu\Bundle\EntityBundle\Entity\BankType 
     */
    public function getBankType()
    {
        return $this->bankType;
    }

    /**
     * Set bank
     *
     * @param \Morfeu\Bundle\EntityBundle\Entity\Bank $bank
     * @return BankUser
     */
    public function setBank(\Morfeu\Bundle\EntityBundle\Entity\Bank $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return \Morfeu\Bundle\EntityBundle\Entity\Bank 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set user
     *
     * @param \Morfeu\Bundle\EntityBundle\Entity\User $user
     * @return BankUser
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
