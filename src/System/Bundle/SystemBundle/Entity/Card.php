<?php

namespace System\Bundle\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="carrier_user_id", columns={"carrier_user_id"}), @ORM\Index(name="bank_user_id", columns={"bank_user_id"})})
 * @ORM\Entity
 */
class Card
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
     * @ORM\Column(name="description", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration_day", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $expirationDay;

    /**
     * @var string
     *
     * @ORM\Column(name="final_number", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $finalNumber;

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
     * @var \System\Bundle\SystemBundle\Entity\BankUser
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\BankUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $bankUser;

    /**
     * @var \System\Bundle\SystemBundle\Entity\CarrierUser
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\CarrierUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carrier_user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $carrierUser;

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
     * Set name
     *
     * @param string $name
     * @return Card
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
     * Set description
     *
     * @param string $description
     * @return Card
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set expirationDay
     *
     * @param integer $expirationDay
     * @return Card
     */
    public function setExpirationDay($expirationDay)
    {
        $this->expirationDay = $expirationDay;

        return $this;
    }

    /**
     * Get expirationDay
     *
     * @return integer 
     */
    public function getExpirationDay()
    {
        return $this->expirationDay;
    }

    /**
     * Set finalNumber
     *
     * @param string $finalNumber
     * @return Card
     */
    public function setFinalNumber($finalNumber)
    {
        $this->finalNumber = $finalNumber;

        return $this;
    }

    /**
     * Get finalNumber
     *
     * @return string 
     */
    public function getFinalNumber()
    {
        return $this->finalNumber;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Card
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
     * @return Card
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
     * @return Card
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
     * Set bankUser
     *
     * @param \System\Bundle\SystemBundle\Entity\BankUser $bankUser
     * @return Card
     */
    public function setBankUser(\System\Bundle\SystemBundle\Entity\BankUser $bankUser = null)
    {
        $this->bankUser = $bankUser;

        return $this;
    }

    /**
     * Get bankUser
     *
     * @return \System\Bundle\SystemBundle\Entity\BankUser 
     */
    public function getBankUser()
    {
        return $this->bankUser;
    }

    /**
     * Set carrierUser
     *
     * @param \System\Bundle\SystemBundle\Entity\CarrierUser $carrierUser
     * @return Card
     */
    public function setCarrierUser(\System\Bundle\SystemBundle\Entity\CarrierUser $carrierUser = null)
    {
        $this->carrierUser = $carrierUser;

        return $this;
    }

    /**
     * Get carrierUser
     *
     * @return \System\Bundle\SystemBundle\Entity\CarrierUser 
     */
    public function getCarrierUser()
    {
        return $this->carrierUser;
    }

    /**
     * Set user
     *
     * @param \System\Bundle\SystemBundle\Entity\User $user
     * @return Card
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
