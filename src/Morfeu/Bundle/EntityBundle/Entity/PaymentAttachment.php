<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* PaymentAttachment
*
* @ORM\Table(name="payment_attachment", indexes={@ORM\Index(name="payment_id", columns={"payment_id"})})
* @ORM\Entity
*/
class PaymentAttachment extends BaseEntity
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
    * Get the value of Id
    *
    * @return integer
    */
    public function getId()
    {
        return $this->id;
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
    * Get the value of Name
    *
    * @return string
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * Set the value of Name
    *
    * @param string name
    *
    * @return self
    */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
    * Get the value of File
    *
    * @return string
    */
    public function getFile()
    {
        return $this->file;
    }

    /**
    * Set the value of File
    *
    * @param string file
    *
    * @return self
    */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
    * Get the value of Created At
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
    * Set the value of Created At
    *
    * @param \DateTime createdAt
    *
    * @return self
    */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
    * Get the value of Updated At
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
    * Set the value of Updated At
    *
    * @param \DateTime updatedAt
    *
    * @return self
    */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
    * Get the value of Status
    *
    * @return integer
    */
    public function getStatus()
    {
        return $this->status;
    }

    /**
    * Set the value of Status
    *
    * @param integer status
    *
    * @return self
    */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
    * Get the value of Payment
    *
    * @return \Morfeu\Bundle\EntityBundle\Entity\Payment
    */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
    * Set the value of Payment
    *
    * @param \Morfeu\Bundle\EntityBundle\Entity\Payment payment
    *
    * @return self
    */
    public function setPayment(\Morfeu\Bundle\EntityBundle\Entity\Payment $payment)
    {
        $this->payment = $payment;

        return $this;
    }

}
