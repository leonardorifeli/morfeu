<?php

namespace System\Bundle\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankUser
 *
 * @ORM\Table(name="bank_user", indexes={@ORM\Index(name="bank_id", columns={"bank_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $status;

    /**
     * @var \System\Bundle\SystemBundle\Entity\Bank
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\Bank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $bank;

    /**
     * @var \System\Bundle\SystemBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\User")
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
     * Set bank
     *
     * @param \System\Bundle\SystemBundle\Entity\Bank $bank
     * @return BankUser
     */
    public function setBank(\System\Bundle\SystemBundle\Entity\Bank $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return \System\Bundle\SystemBundle\Entity\Bank 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set user
     *
     * @param \System\Bundle\SystemBundle\Entity\User $user
     * @return BankUser
     */
    public function setUser(\System\Bundle\SystemBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \System\Bundle\SystemBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
