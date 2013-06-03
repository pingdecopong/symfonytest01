<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDocumentCategory
 */
class TBDocumentCategory
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
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $IconFileName;

    /**
     * @var boolean
     */
    private $DeleteFlug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdocuments;

    /**
     * @var \System\CompasBundle\Entity\TBProject
     */
    private $tbproject;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbdocuments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBDocumentCategory
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
     * Set Name
     *
     * @param string $name
     * @return TBDocumentCategory
     */
    public function setName($name)
    {
        $this->Name = $name;
    
        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return TBDocumentCategory
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
     * Set IconFileName
     *
     * @param string $iconFileName
     * @return TBDocumentCategory
     */
    public function setIconFileName($iconFileName)
    {
        $this->IconFileName = $iconFileName;
    
        return $this;
    }

    /**
     * Get IconFileName
     *
     * @return string 
     */
    public function getIconFileName()
    {
        return $this->IconFileName;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBDocumentCategory
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
     * Add tbdocuments
     *
     * @param \System\CompasBundle\Entity\TBDocument $tbdocuments
     * @return TBDocumentCategory
     */
    public function addTbdocument(\System\CompasBundle\Entity\TBDocument $tbdocuments)
    {
        $this->tbdocuments[] = $tbdocuments;
    
        return $this;
    }

    /**
     * Remove tbdocuments
     *
     * @param \System\CompasBundle\Entity\TBDocument $tbdocuments
     */
    public function removeTbdocument(\System\CompasBundle\Entity\TBDocument $tbdocuments)
    {
        $this->tbdocuments->removeElement($tbdocuments);
    }

    /**
     * Get tbdocuments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdocuments()
    {
        return $this->tbdocuments;
    }

    /**
     * Set tbproject
     *
     * @param \System\CompasBundle\Entity\TBProject $tbproject
     * @return TBDocumentCategory
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
}
