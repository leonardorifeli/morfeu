<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

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
     * @var \Morfeu\Bundle\EntityBundle\Entity\Payment
     *
     * @ORM\ManyToOne(targetEntity="Morfeu\Bundle\EntityBundle\Entity\Payment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $payment;

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
     * @param \Morfeu\Bundle\EntityBundle\Entity\Payment $payment
     * @return PaymentFormUser
     */
    public function setPayment(\Morfeu\Bundle\EntityBundle\Entity\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \Morfeu\Bundle\EntityBundle\Entity\Payment 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set user
     *
     * @param \Morfeu\Bundle\EntityBundle\Entity\User $user
     * @return PaymentFormUser
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
     * @return PaymentFormUser
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
}
