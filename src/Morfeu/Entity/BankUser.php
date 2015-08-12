<?php

namespace Morfeu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankUser
 *
 * @Table(name="bank_user", indexes={@Index(name="bank_id", columns={"bank_id"}), @Index(name="user_id", columns={"user_id"})})
 * @Entity
 */
class BankUser
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="account_number", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $accountNumber;

    /**
     * @var string
     *
     * @Column(name="agency_number", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $agencyNumber;

    /**
     * @var integer
     *
     * @Column(name="type_account", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $typeAccount;

    /**
     * @var \DateTime
     *
     * @Column(name="created_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @Column(name="updated_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @Column(name="status", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $status;

    /**
     * @var \Morfeu\Entity\Bank
     *
     * @ManyToOne(targetEntity="Morfeu\Entity\Bank")
     * @JoinColumns({
     *   @JoinColumn(name="bank_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $bank;

    /**
     * @var \Morfeu\Entity\User
     *
     * @ManyToOne(targetEntity="Morfeu\Entity\User")
     * @JoinColumns({
     *   @JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
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
     * @param \MorfeuApi\Bundle\EntityBundle\Entity\Bank $bank
     * @return BankUser
     */
    public function setBank(\MorfeuApi\Bundle\EntityBundle\Entity\Bank $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return \MorfeuApi\Bundle\EntityBundle\Entity\Bank
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set user
     *
     * @param \MorfeuApi\Bundle\EntityBundle\Entity\User $user
     * @return BankUser
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
