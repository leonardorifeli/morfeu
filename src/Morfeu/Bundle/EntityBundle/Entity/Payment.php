<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Morfeu\Bundle\BusinessBundle\Enum\StatusPayment;
use Morfeu\Bundle\BusinessBundle\Enum\FixedPayment;

/**
* Payment
*
* @ORM\Table(name="payment", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="payment_type_user_id", columns={"payment_type_id"}), @ORM\Index(name="payment_form_user_id", columns={"payment_form_id"})})
* @ORM\Entity(repositoryClass="Morfeu\Bundle\RepositoryBundle\Repository\PaymentRepository")
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
    * @ORM\Column(name="valid_date", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $validDate;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="payment_made_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $paymentMadeAt;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="purchase_made_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $purchaseMadeAt;

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
    * @ORM\Column(name="fixed_payment_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $fixedPaymentAt;

    /**
    * @var string
    *
    * @ORM\Column(name="local", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
    */
    private $local;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="finalized_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $finalizedAt;

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
    * @var \Morfeu\Bundle\EntityBundle\Entity\PaymentForm
    *
    * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\PaymentForm")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="payment_form_id", referencedColumnName="id", nullable=true)
    * })
    */
    private $paymentForm;

    /**
    * @var \Morfeu\Bundle\EntityBundle\Entity\PaymentType
    *
    * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\PaymentType")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="payment_type_id", referencedColumnName="id", nullable=true)
    * })
    */
    private $paymentType;

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
    * @var \Morfeu\Bundle\EntityBundle\Entity\Card
    *
    * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\Card")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="card_id", referencedColumnName="id", nullable=true)
    * })
    */
    private $card;



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
    * Set validDate
    *
    * @param \DateTime $validDate
    * @return Payment
    */
    public function setValidDate($validDate)
    {
        $this->validDate = $validDate;

        return $this;
    }

    /**
    * Get validDate
    *
    * @return \DateTime
    */
    public function getValidDate()
    {
        return $this->validDate;
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
    * Set fixedPaymentAt
    *
    * @param \DateTime $fixedPaymentAt
    * @return Payment
    */
    public function setFixedPaymentAt($fixedPaymentAt)
    {
        $this->fixedPaymentAt = $fixedPaymentAt;

        return $this;
    }

    /**
    * Get fixedPaymentAt
    *
    * @return \DateTime
    */
    public function getFixedPaymentAt()
    {
        return $this->fixedPaymentAt;
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
    * Set finalizedAt
    *
    * @param \DateTime $finalizedAt
    * @return Payment
    */
    public function setFinalizedAt($finalizedAt)
    {
        $this->finalizedAt = $finalizedAt;

        return $this;
    }

    /**
    * Get finalizedAt
    *
    * @return \DateTime
    */
    public function getFinalizedAt()
    {
        return $this->finalizedAt;
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
    * Set status
    *
    * @param integer $status
    * @return Payment
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
    * Set paymentForm
    *
    * @param \Morfeu\Bundle\EntityBundle\Entity\PaymentForm $paymentForm
    * @return Payment
    */
    public function setPaymentForm(\Morfeu\Bundle\EntityBundle\Entity\PaymentForm $paymentForm = null)
    {
        $this->paymentForm = $paymentForm;

        return $this;
    }

    /**
    * Get paymentForm
    *
    * @return \Morfeu\Bundle\EntityBundle\Entity\PaymentForm
    */
    public function getPaymentForm()
    {
        return $this->paymentForm;
    }

    /**
    * Set paymentType
    *
    * @param \Morfeu\Bundle\EntityBundle\Entity\PaymentType $paymentType
    * @return Payment
    */
    public function setPaymentType(\Morfeu\Bundle\EntityBundle\Entity\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
    * Get paymentType
    *
    * @return \Morfeu\Bundle\EntityBundle\Entity\PaymentType
    */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
    * Set user
    *
    * @param \Morfeu\Bundle\EntityBundle\Entity\User $user
    * @return Payment
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
    * Set card
    *
    * @param \Morfeu\Bundle\EntityBundle\Entity\Card $card
    * @return Payment
    */
    public function setCard(\Morfeu\Bundle\EntityBundle\Entity\Card $card = null)
    {
        $this->card = $card;

        return $this;
    }

    /**
    * Get card
    *
    * @return \Morfeu\Bundle\EntityBundle\Entity\Card
    */
    public function getCard()
    {
        return $this->card;
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

    public function statusComplete()
    {
        $status = "";

        if($this->status == StatusPayment::PAID){
            $status = "Pago";
        }

        if($this->status == StatusPayment::NOT_PAID){
            $status = "Não Pago";
        }

        return $status;
    }


    public function fixedComplete()
    {
        $fixed = "";

        if($this->fixedPayment == FixedPayment::YES){
            $fixed = "Sim";
        }

        if($this->fixedPayment == FixedPayment::NO){
            $fixed = "Não";
        }

        return $fixed;
    }

    /**
    * Get the value of Payment Made At
    *
    * @return \DateTime
    */
    public function getPaymentMadeAt()
    {
        return $this->paymentMadeAt;
    }

    /**
    * Set the value of Payment Made At
    *
    * @param \DateTime paymentMadeAt
    *
    * @return self
    */
    public function setPaymentMadeAt(\DateTime $paymentMadeAt)
    {
        $this->paymentMadeAt = $paymentMadeAt;

        return $this;
    }

    /**
    * Get the value of Purchase Made At
    *
    * @return \DateTime
    */
    public function getPurchaseMadeAt()
    {
        return $this->purchaseMadeAt;
    }

    /**
    * Set the value of Purchase Made At
    *
    * @param \DateTime purchaseMadeAt
    *
    * @return self
    */
    public function setPurchaseMadeAt(\DateTime $purchaseMadeAt)
    {
        $this->purchaseMadeAt = $purchaseMadeAt;

        return $this;
    }

}
