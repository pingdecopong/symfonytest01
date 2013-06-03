<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssueFile
 */
class TBIssueFile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $IssueReplyId;

    /**
     * @var string
     */
    private $FileName;

    /**
     * @var string
     */
    private $PhysicalFileName;

    /**
     * @var string
     */
    private $Comment;

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
     * @var \System\CompasBundle\Entity\TBIssueReply
     */
    private $tbissuereply;

    /**
     * @var \System\CompasBundle\Entity\TBSystemUser
     */
    private $tbsystemuser;


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
     * Set IssueReplyId
     *
     * @param integer $issueReplyId
     * @return TBIssueFile
     */
    public function setIssueReplyId($issueReplyId)
    {
        $this->IssueReplyId = $issueReplyId;
    
        return $this;
    }

    /**
     * Get IssueReplyId
     *
     * @return integer 
     */
    public function getIssueReplyId()
    {
        return $this->IssueReplyId;
    }

    /**
     * Set FileName
     *
     * @param string $fileName
     * @return TBIssueFile
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
     * Set PhysicalFileName
     *
     * @param string $physicalFileName
     * @return TBIssueFile
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
     * @return TBIssueFile
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
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBIssueFile
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
     * @return TBIssueFile
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
     * @return TBIssueFile
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
     * @return TBIssueFile
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
     * Set tbissuereply
     *
     * @param \System\CompasBundle\Entity\TBIssueReply $tbissuereply
     * @return TBIssueFile
     */
    public function setTbissuereply(\System\CompasBundle\Entity\TBIssueReply $tbissuereply = null)
    {
        $this->tbissuereply = $tbissuereply;
    
        return $this;
    }

    /**
     * Get tbissuereply
     *
     * @return \System\CompasBundle\Entity\TBIssueReply 
     */
    public function getTbissuereply()
    {
        return $this->tbissuereply;
    }

    /**
     * Set tbsystemuser
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemuser
     * @return TBIssueFile
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
