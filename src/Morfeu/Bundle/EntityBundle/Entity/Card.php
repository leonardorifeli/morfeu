<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Card
*
* @ORM\Table(name="card", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="carrier_user_id", columns={"carrier_id"}), @ORM\Index(name="bank_user_id", columns={"bank_user_id"}), @ORM\Index(name="card_type_id", columns={"card_type_id"})})
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
    * @var string
    *
    * @ORM\Column(name="validate_at", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
    */
    private $validateAt;

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
    * @ORM\Column(name="deleted_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $deletedAt;

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
    * @var \Morfeu\Bundle\EntityBundle\Entity\BankUser
    *
    * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\BankUser")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="bank_user_id", referencedColumnName="id", nullable=true)
    * })
    */
    private $bankUser;

    /**
    * @var \Morfeu\Bundle\EntityBundle\Entity\CardType
    *
    * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\CardType")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="card_type_id", referencedColumnName="id", nullable=true)
    * })
    */
    private $cardType;

    /**
    * @var \Morfeu\Bundle\EntityBundle\Entity\Carrier
    *
    * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\Carrier")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="carrier_id", referencedColumnName="id", nullable=true)
    * })
    */
    private $carrier;

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
    * Set deletedAt
    *
    * @param \DateTime $deletedAt
    * @return Card
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
    * @param \Morfeu\Bundle\EntityBundle\Entity\BankUser $bankUser
    * @return Card
    */
    public function setBankUser(\Morfeu\Bundle\EntityBundle\Entity\BankUser $bankUser = null)
    {
        $this->bankUser = $bankUser;

        return $this;
    }

    /**
    * Get bankUser
    *
    * @return \Morfeu\Bundle\EntityBundle\Entity\BankUser
    */
    public function getBankUser()
    {
        return $this->bankUser;
    }

    /**
    * Set cardType
    *
    * @param \Morfeu\Bundle\EntityBundle\Entity\CardType $cardType
    * @return Card
    */
    public function setCardType(\Morfeu\Bundle\EntityBundle\Entity\CardType $cardType = null)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
    * Get cardType
    *
    * @return \Morfeu\Bundle\EntityBundle\Entity\CardType
    */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
    * Set carrier
    *
    * @param \Morfeu\Bundle\EntityBundle\Entity\Carrier $carrier
    * @return Card
    */
    public function setCarrier(\Morfeu\Bundle\EntityBundle\Entity\Carrier $carrier = null)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
    * Get carrier
    *
    * @return \Morfeu\Bundle\EntityBundle\Entity\Carrier
    */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
    * Set user
    *
    * @param \Morfeu\Bundle\EntityBundle\Entity\User $user
    * @return Card
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

    /**
    * Set the value of Id
    *
    * @param integer id
    *
    * @return self
    */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
    * Get the value of Validate At
    *
    * @return string
    */
    public function getValidateAt()
    {
        return $this->validateAt;
    }

    /**
    * Set the value of Validate At
    *
    * @param string validateAt
    *
    * @return self
    */
    public function setValidateAt($validateAt)
    {
        $this->validateAt = $validateAt;

        return $this;
    }

}
