<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentAttachment
 *
 * @ORM\Table(name="payment_attachment", indexes={@ORM\Index(name="payment_id", columns={"payment_id"})})
 * @ORM\Entity
 */
class PaymentAttachment
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
     * @ORM\Column(name="file", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $file;

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
     * @return PaymentAttachment
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
     * Set file
     *
     * @param string $file
     * @return PaymentAttachment
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return PaymentAttachment
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
     * @return PaymentAttachment
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
     * @return PaymentAttachment
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
     * @return PaymentAttachment
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
}
