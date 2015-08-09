<?php

namespace Morfeu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentTypeUser
 *
 * @ORM\Table(name="payment_type_user", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="payment_type_id", columns={"payment_type_id"})})
 * @ORM\Entity
 */
class PaymentTypeUser
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
     * @var \MorfeuApi\Bundle\EntityBundle\Entity\Card
     *
     * @ORM\ManyToOne(targetEntity="MorfeuApi\Bundle\EntityBundle\Entity\Card")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;

    /**
     * @var \MorfeuApi\Bundle\EntityBundle\Entity\PaymentType
     *
     * @ORM\ManyToOne(targetEntity="MorfeuApi\Bundle\EntityBundle\Entity\PaymentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_type_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $paymentType;



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
     * @return PaymentTypeUser
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
     * @return PaymentTypeUser
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
     * @return PaymentTypeUser
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
     * Set user
     *
     * @param \MorfeuApi\Bundle\EntityBundle\Entity\Card $user
     * @return PaymentTypeUser
     */
    public function setUser(\MorfeuApi\Bundle\EntityBundle\Entity\Card $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MorfeuApi\Bundle\EntityBundle\Entity\Card 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set paymentType
     *
     * @param \MorfeuApi\Bundle\EntityBundle\Entity\PaymentType $paymentType
     * @return PaymentTypeUser
     */
    public function setPaymentType(\MorfeuApi\Bundle\EntityBundle\Entity\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return \MorfeuApi\Bundle\EntityBundle\Entity\PaymentType 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
}
