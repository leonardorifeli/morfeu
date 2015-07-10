<?php

namespace System\Bundle\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentFormUser
 *
 * @ORM\Table(name="payment_form_user", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="payment_id", columns={"payment_id"}), @ORM\Index(name="card_id", columns={"card_id"})})
 * @ORM\Entity
 */
class PaymentFormUser
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
     * @var \System\Bundle\SystemBundle\Entity\Payment
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\Payment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $payment;

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
     * @var \System\Bundle\SystemBundle\Entity\Card
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\Card")
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return PaymentFormUser
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
     * @return PaymentFormUser
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
     * @return PaymentFormUser
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
     * Set payment
     *
     * @param \System\Bundle\SystemBundle\Entity\Payment $payment
     * @return PaymentFormUser
     */
    public function setPayment(\System\Bundle\SystemBundle\Entity\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \System\Bundle\SystemBundle\Entity\Payment 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set user
     *
     * @param \System\Bundle\SystemBundle\Entity\User $user
     * @return PaymentFormUser
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

    /**
     * Set card
     *
     * @param \System\Bundle\SystemBundle\Entity\Card $card
     * @return PaymentFormUser
     */
    public function setCard(\System\Bundle\SystemBundle\Entity\Card $card = null)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return \System\Bundle\SystemBundle\Entity\Card 
     */
    public function getCard()
    {
        return $this->card;
    }
}
