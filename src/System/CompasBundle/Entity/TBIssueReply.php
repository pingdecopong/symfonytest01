<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssueReply
 */
class TBIssueReply
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $IssueId;

    /**
     * @var integer
     */
    private $IssueCategoryId;

    /**
     * @var integer
     */
    private $IssueStatusId;

    /**
     * @var integer
     */
    private $IssuePriorityId;

    /**
     * @var string
     */
    private $Body;

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
    private $tbreplyusers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdocumentissuelinks;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissuefiles;

    /**
     * @var \System\CompasBundle\Entity\TBIssue
     */
    private $tbissue;

    /**
     * @var \System\CompasBundle\Entity\TBIssueCategory
     */
    private $tbissuecategory;

    /**
     * @var \System\CompasBundle\Entity\TBIssueStatus
     */
    private $tbissuestatus;

    /**
     * @var \System\CompasBundle\Entity\TBIssuePriority
     */
    private $tbissuepriority;

    /**
     * @var \System\CompasBundle\Entity\TBSystemUser
     */
    private $tbsystemuser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbreplyusers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbdocumentissuelinks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissuefiles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set IssueId
     *
     * @param integer $issueId
     * @return TBIssueReply
     */
    public function setIssueId($issueId)
    {
        $this->IssueId = $issueId;
    
        return $this;
    }

    /**
     * Get IssueId
     *
     * @return integer 
     */
    public function getIssueId()
    {
        return $this->IssueId;
    }

    /**
     * Set IssueCategoryId
     *
     * @param integer $issueCategoryId
     * @return TBIssueReply
     */
    public function setIssueCategoryId($issueCategoryId)
    {
        $this->IssueCategoryId = $issueCategoryId;
    
        return $this;
    }

    /**
     * Get IssueCategoryId
     *
     * @return integer 
     */
    public function getIssueCategoryId()
    {
        return $this->IssueCategoryId;
    }

    /**
     * Set IssueStatusId
     *
     * @param integer $issueStatusId
     * @return TBIssueReply
     */
    public function setIssueStatusId($issueStatusId)
    {
        $this->IssueStatusId = $issueStatusId;
    
        return $this;
    }

    /**
     * Get IssueStatusId
     *
     * @return integer 
     */
    public function getIssueStatusId()
    {
        return $this->IssueStatusId;
    }

    /**
     * Set IssuePriorityId
     *
     * @param integer $issuePriorityId
     * @return TBIssueReply
     */
    public function setIssuePriorityId($issuePriorityId)
    {
        $this->IssuePriorityId = $issuePriorityId;
    
        return $this;
    }

    /**
     * Get IssuePriorityId
     *
     * @return integer 
     */
    public function getIssuePriorityId()
    {
        return $this->IssuePriorityId;
    }

    /**
     * Set Body
     *
     * @param string $body
     * @return TBIssueReply
     */
    public function setBody($body)
    {
        $this->Body = $body;
    
        return $this;
    }

    /**
     * Get Body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->Body;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBIssueReply
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
     * @return TBIssueReply
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
     * @return TBIssueReply
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
     * @return TBIssueReply
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
     * Add tbreplyusers
     *
     * @param \System\CompasBundle\Entity\TBReplyUser $tbreplyusers
     * @return TBIssueReply
     */
    public function addTbreplyuser(\System\CompasBundle\Entity\TBReplyUser $tbreplyusers)
    {
        $this->tbreplyusers[] = $tbreplyusers;
    
        return $this;
    }

    /**
     * Remove tbreplyusers
     *
     * @param \System\CompasBundle\Entity\TBReplyUser $tbreplyusers
     */
    public function removeTbreplyuser(\System\CompasBundle\Entity\TBReplyUser $tbreplyusers)
    {
        $this->tbreplyusers->removeElement($tbreplyusers);
    }

    /**
     * Get tbreplyusers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbreplyusers()
    {
        return $this->tbreplyusers;
    }

    /**
     * Add tbdocumentissuelinks
     *
     * @param \System\CompasBundle\Entity\TBDocumentIssueLink $tbdocumentissuelinks
     * @return TBIssueReply
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
     * Add tbissuefiles
     *
     * @param \System\CompasBundle\Entity\TBIssueFile $tbissuefiles
     * @return TBIssueReply
     */
    public function addTbissuefile(\System\CompasBundle\Entity\TBIssueFile $tbissuefiles)
    {
        $this->tbissuefiles[] = $tbissuefiles;
    
        return $this;
    }

    /**
     * Remove tbissuefiles
     *
     * @param \System\CompasBundle\Entity\TBIssueFile $tbissuefiles
     */
    public function removeTbissuefile(\System\CompasBundle\Entity\TBIssueFile $tbissuefiles)
    {
        $this->tbissuefiles->removeElement($tbissuefiles);
    }

    /**
     * Get tbissuefiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissuefiles()
    {
        return $this->tbissuefiles;
    }

    /**
     * Set tbissue
     *
     * @param \System\CompasBundle\Entity\TBIssue $tbissue
     * @return TBIssueReply
     */
    public function setTbissue(\System\CompasBundle\Entity\TBIssue $tbissue = null)
    {
        $this->tbissue = $tbissue;
    
        return $this;
    }

    /**
     * Get tbissue
     *
     * @return \System\CompasBundle\Entity\TBIssue 
     */
    public function getTbissue()
    {
        return $this->tbissue;
    }

    /**
     * Set tbissuecategory
     *
     * @param \System\CompasBundle\Entity\TBIssueCategory $tbissuecategory
     * @return TBIssueReply
     */
    public function setTbissuecategory(\System\CompasBundle\Entity\TBIssueCategory $tbissuecategory = null)
    {
        $this->tbissuecategory = $tbissuecategory;
    
        return $this;
    }

    /**
     * Get tbissuecategory
     *
     * @return \System\CompasBundle\Entity\TBIssueCategory 
     */
    public function getTbissuecategory()
    {
        return $this->tbissuecategory;
    }

    /**
     * Set tbissuestatus
     *
     * @param \System\CompasBundle\Entity\TBIssueStatus $tbissuestatus
     * @return TBIssueReply
     */
    public function setTbissuestatus(\System\CompasBundle\Entity\TBIssueStatus $tbissuestatus = null)
    {
        $this->tbissuestatus = $tbissuestatus;
    
        return $this;
    }

    /**
     * Get tbissuestatus
     *
     * @return \System\CompasBundle\Entity\TBIssueStatus 
     */
    public function getTbissuestatus()
    {
        return $this->tbissuestatus;
    }

    /**
     * Set tbissuepriority
     *
     * @param \System\CompasBundle\Entity\TBIssuePriority $tbissuepriority
     * @return TBIssueReply
     */
    public function setTbissuepriority(\System\CompasBundle\Entity\TBIssuePriority $tbissuepriority = null)
    {
        $this->tbissuepriority = $tbissuepriority;
    
        return $this;
    }

    /**
     * Get tbissuepriority
     *
     * @return \System\CompasBundle\Entity\TBIssuePriority 
     */
    public function getTbissuepriority()
    {
        return $this->tbissuepriority;
    }

    /**
     * Set tbsystemuser
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemuser
     * @return TBIssueReply
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
