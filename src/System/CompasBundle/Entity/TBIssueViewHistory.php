<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssueViewHistory
 */
class TBIssueViewHistory
{
    /**
     * @var integer
     */
    private $ProjectEnterId;

    /**
     * @var integer
     */
    private $IssueId;

    /**
     * @var \System\CompasBundle\Entity\TBProjectEnter
     */
    private $tbprojectenter;

    /**
     * @var \System\CompasBundle\Entity\TBIssue
     */
    private $tbissue;


    /**
     * Set ProjectEnterId
     *
     * @param integer $projectEnterId
     * @return TBIssueViewHistory
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
     * Set IssueId
     *
     * @param integer $issueId
     * @return TBIssueViewHistory
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
     * Set tbprojectenter
     *
     * @param \System\CompasBundle\Entity\TBProjectEnter $tbprojectenter
     * @return TBIssueViewHistory
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

    /**
     * Set tbissue
     *
     * @param \System\CompasBundle\Entity\TBIssue $tbissue
     * @return TBIssueViewHistory
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
}
