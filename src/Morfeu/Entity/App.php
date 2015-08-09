<?php

namespace MorfeuApi\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
* @Table(name="app")
* @Entity(repositoryClass="MorfeuApi\Repository\AppRepository")
**/
class App
{

    /** @Id @Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=true) @GeneratedValue **/
    private $id;

    /**
    * @ManyToOne(targetEntity="Tenant")
    * @JoinColumn(name="tenant_id", referencedColumnName="id")
    **/
    private $tenant;

    /** @Column(name="url_page", type="string", length=255, nullable=true) **/
    private $urlPage;

    /** @Column(name="provider", type="string", length=255, nullable=true) **/
    private $provider;

    /** @Column(name="updated_at", type="datetime", precision=0, scale=0, nullable=false, unique=false) **/
    private $updatedAt;

    /** @Column(name="created_at", type="datetime", precision=0, scale=0, nullable=false, unique=false) **/
    private $createdAt;

    /** @Column(name="status", type="integer", precision=0, scale=0, nullable=false, unique=false) **/
    private $status;

    /**
    * Get the value of Id
    *
    * @return mixed
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Set the value of Id
    *
    * @param mixed id
    *
    * @return self
    */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
    * Get the value of Tenant
    *
    * @return mixed
    */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
    * Set the value of Tenant
    *
    * @param mixed tenant
    *
    * @return self
    */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;

        return $this;
    }

    /**
    * Get the value of Url Page
    *
    * @return mixed
    */
    public function getUrlPage()
    {
        return $this->urlPage;
    }

    /**
    * Set the value of Url Page
    *
    * @param mixed urlPage
    *
    * @return self
    */
    public function setUrlPage($urlPage)
    {
        $this->urlPage = $urlPage;

        return $this;
    }

    /**
    * Get the value of App Token
    *
    * @return mixed
    */
    public function getAppToken()
    {
        return $this->appToken;
    }

    /**
    * Set the value of App Token
    *
    * @param mixed appToken
    *
    * @return self
    */
    public function setAppToken($appToken)
    {
        $this->appToken = $appToken;

        return $this;
    }

    /**
    * Get the value of App Secret
    *
    * @return mixed
    */
    public function getAppSecret()
    {
        return $this->appSecret;
    }

    /**
    * Set the value of App Secret
    *
    * @param mixed appSecret
    *
    * @return self
    */
    public function setAppSecret($appSecret)
    {
        $this->appSecret = $appSecret;

        return $this;
    }

    /**
    * Get the value of Updated At
    *
    * @return mixed
    */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
    * Set the value of Updated At
    *
    * @param mixed updatedAt
    *
    * @return self
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
    * Get the value of Created At
    *
    * @return mixed
    */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
    * Set the value of Created At
    *
    * @param mixed createdAt
    *
    * @return self
    */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
    * Get the value of Status
    *
    * @return mixed
    */
    public function getStatus()
    {
        return $this->status;
    }

    /**
    * Set the value of Status
    *
    * @param mixed status
    *
    * @return self
    */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

}
