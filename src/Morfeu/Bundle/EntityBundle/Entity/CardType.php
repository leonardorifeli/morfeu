<?php

namespace Morfeu\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* CardType
*
* @ORM\Table(name="card_type")
 * @ORM\Entity(repositoryClass="Morfeu\Bundle\RepositoryBundle\Repository\CardTypeRepository")
*/
class CardType
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
    * @var \DateTime
    *
    * @ORM\Column(name="deleted_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
    */
    private $deletedAt;

    /**
    * @var integer
    *
    * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=true, unique=false)
    */
    private $status;



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
    * @return CardType
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
    * Set createdAt
    *
    * @param \DateTime $createdAt
    * @return CardType
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
    * @return CardType
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
    * Set deletedAt
    *
    * @param \DateTime $deletedAt
    * @return CardType
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
    * Set status
    *
    * @param integer $status
    * @return CardType
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

    public function __toString()
    {
        return $this->name;
    }
}
