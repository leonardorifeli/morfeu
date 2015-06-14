<?php

namespace System\Bundle\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentPlot
 *
 * @ORM\Table(name="payment_plot", indexes={@ORM\Index(name="payment_id", columns={"payment_id"})})
 * @ORM\Entity
 */
class PaymentPlot
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
     * @ORM\Column(name="duedate", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $duedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="plot_number", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plotNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finalized_date", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $finalizedDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $status;

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
     * @var \System\Bundle\SystemBundle\Entity\Payment
     *
     * @ORM\ManyToOne(targetEntity="System\Bundle\SystemBundle\Entity\Payment")
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
     * Set duedate
     *
     * @param \DateTime $duedate
     * @return PaymentPlot
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;

        return $this;
    }

    /**
     * Get duedate
     *
     * @return \DateTime 
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * Set plotNumber
     *
     * @param integer $plotNumber
     * @return PaymentPlot
     */
    public function setPlotNumber($plotNumber)
    {
        $this->plotNumber = $plotNumber;

        return $this;
    }

    /**
     * Get plotNumber
     *
     * @return integer 
     */
    public function getPlotNumber()
    {
        return $this->plotNumber;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return PaymentPlot
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
     * Set finalizedDate
     *
     * @param \DateTime $finalizedDate
     * @return PaymentPlot
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
     * Set status
     *
     * @param integer $status
     * @return PaymentPlot
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return PaymentPlot
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
     * @return PaymentPlot
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
     * Set payment
     *
     * @param \System\Bundle\SystemBundle\Entity\Payment $payment
     * @return PaymentPlot
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
}
