<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBReplyUser
 */
class TBReplyUser
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
     * @var integer
     */
    private $ProjectEnterId;

    /**
     * @var \System\CompasBundle\Entity\TBIssueReply
     */
    private $tbissuereply;

    /**
     * @var \System\CompasBundle\Entity\TBProjectEnter
     */
    private $tbprojectenter;


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
     * @return TBReplyUser
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
     * Set ProjectEnterId
     *
     * @param integer $projectEnterId
     * @return TBReplyUser
     */
    public function setProjectEnterId($projectEnterId)
    {
        $this->ProjectEnterId = $projectEnterId;
    
        return $this;
    }

    /**
     * Get ProjectEnterId
     *
     * @return integer 
     */
    public function getProjectEnterId()
    {
        return $this->ProjectEnterId;
    }

    /**
     * Set tbissuereply
     *
     * @param \System\CompasBundle\Entity\TBIssueReply $tbissuereply
     * @return TBReplyUser
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
     * Set tbprojectenter
     *
     * @param \System\CompasBundle\Entity\TBProjectEnter $tbprojectenter
     * @return TBReplyUser
     */
    public function setTbprojectenter(\System\CompasBundle\Entity\TBProjectEnter $tbprojectenter = null)
    {
        $this->tbprojectenter = $tbprojectenter;
    
        return $this;
    }

    /**
     * Get tbprojectenter
     *
     * @return \System\CompasBundle\Entity\TBProjectEnter 
     */
    public function getTbprojectenter()
    {
        return $this->tbprojectenter;
    }
}
