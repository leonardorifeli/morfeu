<?php

namespace System\Bundle\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="payment_type_user_id", columns={"payment_type_user_id"}), @ORM\Index(name="payment_form_user_id", columns={"payment_form_user_id"})})
 * @ORM\Entity
 */
class Payment
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
     * @ORM\Column(name="date", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $date;

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
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="plot_quantity", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plotQuantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="fixed_payment", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fixedPayment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fixed_payment_date", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fixedPaymentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $local;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finalized_date", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $finalizedDate;

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
     * @var \System\Bundle\SystemBundle\Entity\PaymentFormUser
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\PaymentFormUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_form_user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $paymentFormUser;

    /**
     * @var \System\Bundle\SystemBundle\Entity\PaymentTypeUser
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\PaymentTypeUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_type_user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $paymentTypeUser;

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
     * Set date
     *
     * @param \DateTime $date
     * @return Payment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Payment
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
     * @return Payment
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
     * Set price
     *
     * @param float $price
     * @return Payment
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Payment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set plotQuantity
     *
     * @param integer $plotQuantity
     * @return Payment
     */
    public function setPlotQuantity($plotQuantity)
    {
        $this->plotQuantity = $plotQuantity;

        return $this;
    }

    /**
     * Get plotQuantity
     *
     * @return integer 
     */
    public function getPlotQuantity()
    {
        return $this->plotQuantity;
    }

    /**
     * Set fixedPayment
     *
     * @param integer $fixedPayment
     * @return Payment
     */
    public function setFixedPayment($fixedPayment)
    {
        $this->fixedPayment = $fixedPayment;

        return $this;
    }

    /**
     * Get fixedPayment
     *
     * @return integer 
     */
    public function getFixedPayment()
    {
        return $this->fixedPayment;
    }

    /**
     * Set fixedPaymentDate
     *
     * @param \DateTime $fixedPaymentDate
     * @return Payment
     */
    public function setFixedPaymentDate($fixedPaymentDate)
    {
        $this->fixedPaymentDate = $fixedPaymentDate;

        return $this;
    }

    /**
     * Get fixedPaymentDate
     *
     * @return \DateTime 
     */
    public function getFixedPaymentDate()
    {
        return $this->fixedPaymentDate;
    }

    /**
     * Set local
     *
     * @param string $local
     * @return Payment
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set finalizedDate
     *
     * @param \DateTime $finalizedDate
     * @return Payment
     */
    public function setFinalizedDate($finalizedDate)
    {
        $this->finalizedDate = $finalizedDate;

        return $this;
    }

    /**
     * Get finalizedDate
     *
     * @return \DateTime 
     */
    public function getFinalizedDate()
    {
        return $this->finalizedDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Payment
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
     * @return Payment
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
     * Set paymentFormUser
     *
     * @param \System\Bundle\SystemBundle\Entity\PaymentFormUser $paymentFormUser
     * @return Payment
     */
    public function setPaymentFormUser(\System\Bundle\SystemBundle\Entity\PaymentFormUser $paymentFormUser = null)
    {
        $this->paymentFormUser = $paymentFormUser;

        return $this;
    }

    /**
     * Get paymentFormUser
     *
     * @return \System\Bundle\SystemBundle\Entity\PaymentFormUser 
     */
    public function getPaymentFormUser()
    {
        return $this->paymentFormUser;
    }

    /**
     * Set paymentTypeUser
     *
     * @param \System\Bundle\SystemBundle\Entity\PaymentTypeUser $paymentTypeUser
     * @return Payment
     */
    public function setPaymentTypeUser(\System\Bundle\SystemBundle\Entity\PaymentTypeUser $paymentTypeUser = null)
    {
        $this->paymentTypeUser = $paymentTypeUser;

        return $this;
    }

    /**
     * Get paymentTypeUser
     *
     * @return \System\Bundle\SystemBundle\Entity\PaymentTypeUser 
     */
    public function getPaymentTypeUser()
    {
        return $this->paymentTypeUser;
    }

    /**
     * Set user
     *
     * @param \System\Bundle\SystemBundle\Entity\User $user
     * @return Payment
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
