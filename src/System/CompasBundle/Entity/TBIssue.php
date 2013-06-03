<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssue
 */
class TBIssue
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
    private $Title;

    /**
     * @var boolean
     */
    private $EndFlug;

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
    private $tbissuereplys;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissueviewhistorys;

    /**
     * @var \System\CompasBundle\Entity\TBProject
     */
    private $tbproject;

    /**
     * @var \System\CompasBundle\Entity\TBSystemUser
     */
    private $tbsystemuser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbissuereplys = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissueviewhistorys = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBIssue
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
     * Set Title
     *
     * @param string $title
     * @return TBIssue
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
     * Set EndFlug
     *
     * @param boolean $endFlug
     * @return TBIssue
     */
    public function setEndFlug($endFlug)
    {
        $this->EndFlug = $endFlug;
    
        return $this;
    }

    /**
     * Get EndFlug
     *
     * @return boolean 
     */
    public function getEndFlug()
    {
        return $this->EndFlug;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBIssue
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
     * @return TBIssue
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
     * @return TBIssue
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
     * @return TBIssue
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
     * Add tbissuereplys
     *
     * @param \System\CompasBundle\Entity\TBIssueReply $tbissuereplys
     * @return TBIssue
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
     * Add tbissueviewhistorys
     *
     * @param \System\CompasBundle\Entity\TBIssueViewHistory $tbissueviewhistorys
     * @return TBIssue
     */
    public function addTbissueviewhistory(\System\CompasBundle\Entity\TBIssueViewHistory $tbissueviewhistorys)
    {
        $this->tbissueviewhistorys[] = $tbissueviewhistorys;
    
        return $this;
    }

    /**
     * Remove tbissueviewhistorys
     *
     * @param \System\CompasBundle\Entity\TBIssueViewHistory $tbissueviewhistorys
     */
    public function removeTbissueviewhistory(\System\CompasBundle\Entity\TBIssueViewHistory $tbissueviewhistorys)
    {
        $this->tbissueviewhistorys->removeElement($tbissueviewhistorys);
    }

    /**
     * Get tbissueviewhistorys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissueviewhistorys()
    {
        return $this->tbissueviewhistorys;
    }

    /**
     * Set tbproject
     *
     * @param \System\CompasBundle\Entity\TBProject $tbproject
     * @return TBIssue
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
     * Set tbsystemuser
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemuser
     * @return TBIssue
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
