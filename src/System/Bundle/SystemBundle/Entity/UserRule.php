<?php

namespace System\Bundle\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRule
 *
 * @ORM\Table(name="user_rule")
 * @ORM\Entity
 */
class UserRule
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="rule_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $rule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $updateAt;



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
     * Set userId
     *
     * @param integer $userId
     * @return UserRule
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set ruleId
     *
     * @param integer $ruleId
     * @return UserRule
     */
    public function setRuleId($ruleId)
    {
        $this->ruleId = $ruleId;

        return $this;
    }

    /**
     * Get ruleId
     *
     * @return integer
     */
    public function getRuleId()
    {
        return $this->ruleId;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return UserRule
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return UserRule
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }
}
