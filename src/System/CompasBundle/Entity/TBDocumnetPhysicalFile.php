<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDocumnetPhysicalFile
 */
class TBDocumnetPhysicalFile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $DocumentFileId;

    /**
     * @var string
     */
    private $PhysicalFileName;

    /**
     * @var string
     */
    private $Comment;

    /**
     * @var integer
     */
    private $Size;

    /**
     * @var integer
     */
    private $Version;

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
    private $tbdocumentissuelinks;

    /**
     * @var \System\CompasBundle\Entity\TBDocumentFile
     */
    private $tbdocumentfile;

    /**
     * @var \System\CompasBundle\Entity\TBSystemUser
     */
    private $tbsystemuser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbdocumentissuelinks = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set DocumentFileId
     *
     * @param integer $documentFileId
     * @return TBDocumnetPhysicalFile
     */
    public function setDocumentFileId($documentFileId)
    {
        $this->DocumentFileId = $documentFileId;
    
        return $this;
    }

    /**
     * Get DocumentFileId
     *
     * @return integer 
     */
    public function getDocumentFileId()
    {
        return $this->DocumentFileId;
    }

    /**
     * Set PhysicalFileName
     *
     * @param string $physicalFileName
     * @return TBDocumnetPhysicalFile
     */
    public function setPhysicalFileName($physicalFileName)
    {
        $this->PhysicalFileName = $physicalFileName;
    
        return $this;
    }

    /**
     * Get PhysicalFileName
     *
     * @return string 
     */
    public function getPhysicalFileName()
    {
        return $this->PhysicalFileName;
    }

    /**
     * Set Comment
     *
     * @param string $comment
     * @return TBDocumnetPhysicalFile
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;
    
        return $this;
    }

    /**
     * Get Comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Set Size
     *
     * @param integer $size
     * @return TBDocumnetPhysicalFile
     */
    public function setSize($size)
    {
        $this->Size = $size;
    
        return $this;
    }

    /**
     * Get Size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * Set Version
     *
     * @param integer $version
     * @return TBDocumnetPhysicalFile
     */
    public function setVersion($version)
    {
        $this->Version = $version;
    
        return $this;
    }

    /**
     * Get Version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBDocumnetPhysicalFile
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
     * @return TBDocumnetPhysicalFile
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
     * @return TBDocumnetPhysicalFile
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
     * @return TBDocumnetPhysicalFile
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
     * Add tbdocumentissuelinks
     *
     * @param \System\CompasBundle\Entity\TBDocumentIssueLink $tbdocumentissuelinks
     * @return TBDocumnetPhysicalFile
     */
    public function addTbdocumentissuelink(\System\CompasBundle\Entity\TBDocumentIssueLink $tbdocumentissuelinks)
    {
        $this->tbdocumentissuelinks[] = $tbdocumentissuelinks;
    
        return $this;
    }

    /**
     * Remove tbdocumentissuelinks
     *
     * @param \System\CompasBundle\Entity\TBDocumentIssueLink $tbdocumentissuelinks
     */
    public function removeTbdocumentissuelink(\System\CompasBundle\Entity\TBDocumentIssueLink $tbdocumentissuelinks)
    {
        $this->tbdocumentissuelinks->removeElement($tbdocumentissuelinks);
    }

    /**
     * Get tbdocumentissuelinks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdocumentissuelinks()
    {
        return $this->tbdocumentissuelinks;
    }

    /**
     * Set tbdocumentfile
     *
     * @param \System\CompasBundle\Entity\TBDocumentFile $tbdocumentfile
     * @return TBDocumnetPhysicalFile
     */
    public function setTbdocumentfile(\System\CompasBundle\Entity\TBDocumentFile $tbdocumentfile = null)
    {
        $this->tbdocumentfile = $tbdocumentfile;
    
        return $this;
    }

    /**
     * Get tbdocumentfile
     *
     * @return \System\CompasBundle\Entity\TBDocumentFile 
     */
    public function getTbdocumentfile()
    {
        return $this->tbdocumentfile;
    }

    /**
     * Set tbsystemuser
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemuser
     * @return TBDocumnetPhysicalFile
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
