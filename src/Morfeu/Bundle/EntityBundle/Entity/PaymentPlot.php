<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

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


}
