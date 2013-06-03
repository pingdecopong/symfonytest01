<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDocumentFile
 */
class TBDocumentFile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $DocumentId;

    /**
     * @var string
     */
    private $FileName;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdocumnetphysicalfiles;

    /**
     * @var \System\CompasBundle\Entity\TBDocument
     */
    private $tbdocument;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbdocumnetphysicalfiles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set DocumentId
     *
     * @param integer $documentId
     * @return TBDocumentFile
     */
    public function setDocumentId($documentId)
    {
        $this->DocumentId = $documentId;
    
        return $this;
    }

    /**
     * Get DocumentId
     *
     * @return integer 
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Set FileName
     *
     * @param string $fileName
     * @return TBDocumentFile
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
    
        return $this;
    }

    /**
     * Get FileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBDocumentFile
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
     * @return TBDocumentFile
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
     * @return TBDocumentFile
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
     * Add tbdocumnetphysicalfiles
     *
     * @param \System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfiles
     * @return TBDocumentFile
     */
    public function addTbdocumnetphysicalfile(\System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfiles)
    {
        $this->tbdocumnetphysicalfiles[] = $tbdocumnetphysicalfiles;
    
        return $this;
    }

    /**
     * Remove tbdocumnetphysicalfiles
     *
     * @param \System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfiles
     */
    public function removeTbdocumnetphysicalfile(\System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfiles)
    {
        $this->tbdocumnetphysicalfiles->removeElement($tbdocumnetphysicalfiles);
    }

    /**
     * Get tbdocumnetphysicalfiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdocumnetphysicalfiles()
    {
        return $this->tbdocumnetphysicalfiles;
    }

    /**
     * Set tbdocument
     *
     * @param \System\CompasBundle\Entity\TBDocument $tbdocument
     * @return TBDocumentFile
     */
    public function setTbdocument(\System\CompasBundle\Entity\TBDocument $tbdocument = null)
    {
        $this->tbdocument = $tbdocument;
    
        return $this;
    }

    /**
     * Get tbdocument
     *
     * @return \System\CompasBundle\Entity\TBDocument 
     */
    public function getTbdocument()
    {
        return $this->tbdocument;
    }
}
