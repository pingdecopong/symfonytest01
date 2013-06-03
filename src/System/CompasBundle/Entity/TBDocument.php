<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDocument
 */
class TBDocument
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $ProjectId;

    /**
     * @var integer
     */
    private $DocumentCategoryId;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var boolean
     */
    private $DeleteFlug;

    /**
     * @var \DateTime
     */
    private $CreatedDatetime;

    /**
     * @var \DateTime
     */
    private $UpdatedDatetime;

    /**
     * @var integer
     */
    private $CreatedUserId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdocumentfiles;

    /**
     * @var \System\CompasBundle\Entity\TBProject
     */
    private $tbproject;

    /**
     * @var \System\CompasBundle\Entity\TBDocumentCategory
     */
    private $tbdocumentcategory;

    /**
     * @var \System\CompasBundle\Entity\TBSystemUser
     */
    private $tbsystemuser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbdocumentfiles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set ProjectId
     *
     * @param integer $projectId
     * @return TBDocument
     */
    public function setProjectId($projectId)
    {
        $this->ProjectId = $projectId;
    
        return $this;
    }

    /**
     * Get ProjectId
     *
     * @return integer 
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }

    /**
     * Set DocumentCategoryId
     *
     * @param integer $documentCategoryId
     * @return TBDocument
     */
    public function setDocumentCategoryId($documentCategoryId)
    {
        $this->DocumentCategoryId = $documentCategoryId;
    
        return $this;
    }

    /**
     * Get DocumentCategoryId
     *
     * @return integer 
     */
    public function getDocumentCategoryId()
    {
        return $this->DocumentCategoryId;
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return TBDocument
     */
    public function setTitle($title)
    {
        $this->Title = $title;
    
        return $this;
    }

    /**
     * Get Title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return TBDocument
     */
    public function setDescription($description)
    {
        $this->Description = $description;
    
        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBDocument
     */
    public function setDeleteFlug($deleteFlug)
    {
        $this->DeleteFlug = $deleteFlug;
    
        return $this;
    }

    /**
     * Get DeleteFlug
     *
     * @return boolean 
     */
    public function getDeleteFlug()
    {
        return $this->DeleteFlug;
    }

    /**
     * Set CreatedDatetime
     *
     * @param \DateTime $createdDatetime
     * @return TBDocument
     */
    public function setCreatedDatetime($createdDatetime)
    {
        $this->CreatedDatetime = $createdDatetime;
    
        return $this;
    }

    /**
     * Get CreatedDatetime
     *
     * @return \DateTime 
     */
    public function getCreatedDatetime()
    {
        return $this->CreatedDatetime;
    }

    /**
     * Set UpdatedDatetime
     *
     * @param \DateTime $updatedDatetime
     * @return TBDocument
     */
    public function setUpdatedDatetime($updatedDatetime)
    {
        $this->UpdatedDatetime = $updatedDatetime;
    
        return $this;
    }

    /**
     * Get UpdatedDatetime
     *
     * @return \DateTime 
     */
    public function getUpdatedDatetime()
    {
        return $this->UpdatedDatetime;
    }

    /**
     * Set CreatedUserId
     *
     * @param integer $createdUserId
     * @return TBDocument
     */
    public function setCreatedUserId($createdUserId)
    {
        $this->CreatedUserId = $createdUserId;
    
        return $this;
    }

    /**
     * Get CreatedUserId
     *
     * @return integer 
     */
    public function getCreatedUserId()
    {
        return $this->CreatedUserId;
    }

    /**
     * Add tbdocumentfiles
     *
     * @param \System\CompasBundle\Entity\TBDocumentFile $tbdocumentfiles
     * @return TBDocument
     */
    public function addTbdocumentfile(\System\CompasBundle\Entity\TBDocumentFile $tbdocumentfiles)
    {
        $this->tbdocumentfiles[] = $tbdocumentfiles;
    
        return $this;
    }

    /**
     * Remove tbdocumentfiles
     *
     * @param \System\CompasBundle\Entity\TBDocumentFile $tbdocumentfiles
     */
    public function removeTbdocumentfile(\System\CompasBundle\Entity\TBDocumentFile $tbdocumentfiles)
    {
        $this->tbdocumentfiles->removeElement($tbdocumentfiles);
    }

    /**
     * Get tbdocumentfiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdocumentfiles()
    {
        return $this->tbdocumentfiles;
    }

    /**
     * Set tbproject
     *
     * @param \System\CompasBundle\Entity\TBProject $tbproject
     * @return TBDocument
     */
    public function setTbproject(\System\CompasBundle\Entity\TBProject $tbproject = null)
    {
        $this->tbproject = $tbproject;
    
        return $this;
    }

    /**
     * Get tbproject
     *
     * @return \System\CompasBundle\Entity\TBProject 
     */
    public function getTbproject()
    {
        return $this->tbproject;
    }

    /**
     * Set tbdocumentcategory
     *
     * @param \System\CompasBundle\Entity\TBDocumentCategory $tbdocumentcategory
     * @return TBDocument
     */
    public function setTbdocumentcategory(\System\CompasBundle\Entity\TBDocumentCategory $tbdocumentcategory = null)
    {
        $this->tbdocumentcategory = $tbdocumentcategory;
    
        return $this;
    }

    /**
     * Get tbdocumentcategory
     *
     * @return \System\CompasBundle\Entity\TBDocumentCategory 
     */
    public function getTbdocumentcategory()
    {
        return $this->tbdocumentcategory;
    }

    /**
     * Set tbsystemuser
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemuser
     * @return TBDocument
     */
    public function setTbsystemuser(\System\CompasBundle\Entity\TBSystemUser $tbsystemuser = null)
    {
        $this->tbsystemuser = $tbsystemuser;
    
        return $this;
    }

    /**
     * Get tbsystemuser
     *
     * @return \System\CompasBundle\Entity\TBSystemUser 
     */
    public function getTbsystemuser()
    {
        return $this->tbsystemuser;
    }
}
