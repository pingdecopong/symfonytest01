<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssueCategory
 */
class TBIssueCategory
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
     * @var integer
     */
    private $SortNo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissuereplys;

    /**
     * @var \System\CompasBundle\Entity\TBProject
     */
    private $tbproject;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbissuereplys = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBIssueCategory
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
     * @return TBIssueCategory
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
     * @return TBIssueCategory
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
     * @return TBIssueCategory
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
     * @return TBIssueCategory
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
     * Set SortNo
     *
     * @param integer $sortNo
     * @return TBIssueCategory
     */
    public function setSortNo($sortNo)
    {
        $this->SortNo = $sortNo;
    
        return $this;
    }

    /**
     * Get SortNo
     *
     * @return integer 
     */
    public function getSortNo()
    {
        return $this->SortNo;
    }

    /**
     * Add tbissuereplys
     *
     * @param \System\CompasBundle\Entity\TBIssueReply $tbissuereplys
     * @return TBIssueCategory
     */
    public function addTbissuereply(\System\CompasBundle\Entity\TBIssueReply $tbissuereplys)
    {
        $this->tbissuereplys[] = $tbissuereplys;
    
        return $this;
    }

    /**
     * Remove tbissuereplys
     *
     * @param \System\CompasBundle\Entity\TBIssueReply $tbissuereplys
     */
    public function removeTbissuereply(\System\CompasBundle\Entity\TBIssueReply $tbissuereplys)
    {
        $this->tbissuereplys->removeElement($tbissuereplys);
    }

    /**
     * Get tbissuereplys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissuereplys()
    {
        return $this->tbissuereplys;
    }

    /**
     * Set tbproject
     *
     * @param \System\CompasBundle\Entity\TBProject $tbproject
     * @return TBIssueCategory
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
