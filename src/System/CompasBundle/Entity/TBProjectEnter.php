<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBProjectEnter
 */
class TBProjectEnter
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
    private $SystemuserId;

    /**
     * @var integer
     */
    private $RoleNo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbreplyusers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissueviewhistorys;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbinformationviewhistorys;

    /**
     * @var \System\CompasBundle\Entity\TBSystemUser
     */
    private $tbsystemuser;

    /**
     * @var \System\CompasBundle\Entity\TBProject
     */
    private $tbproject;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbreplyusers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissueviewhistorys = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbinformationviewhistorys = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBProjectEnter
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
     * Set SystemuserId
     *
     * @param integer $systemuserId
     * @return TBProjectEnter
     */
    public function setSystemuserId($systemuserId)
    {
        $this->SystemuserId = $systemuserId;
    
        return $this;
    }

    /**
     * Get SystemuserId
     *
     * @return integer 
     */
    public function getSystemuserId()
    {
        return $this->SystemuserId;
    }

    /**
     * Set RoleNo
     *
     * @param integer $roleNo
     * @return TBProjectEnter
     */
    public function setRoleNo($roleNo)
    {
        $this->RoleNo = $roleNo;
    
        return $this;
    }

    /**
     * Get RoleNo
     *
     * @return integer 
     */
    public function getRoleNo()
    {
        return $this->RoleNo;
    }

    /**
     * Add tbreplyusers
     *
     * @param \System\CompasBundle\Entity\TBReplyUser $tbreplyusers
     * @return TBProjectEnter
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
     * Add tbissueviewhistorys
     *
     * @param \System\CompasBundle\Entity\TBIssueViewHistory $tbissueviewhistorys
     * @return TBProjectEnter
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
     * Add tbinformationviewhistorys
     *
     * @param \System\CompasBundle\Entity\TBInformationViewHistory $tbinformationviewhistorys
     * @return TBProjectEnter
     */
    public function addTbinformationviewhistory(\System\CompasBundle\Entity\TBInformationViewHistory $tbinformationviewhistorys)
    {
        $this->tbinformationviewhistorys[] = $tbinformationviewhistorys;
    
        return $this;
    }

    /**
     * Remove tbinformationviewhistorys
     *
     * @param \System\CompasBundle\Entity\TBInformationViewHistory $tbinformationviewhistorys
     */
    public function removeTbinformationviewhistory(\System\CompasBundle\Entity\TBInformationViewHistory $tbinformationviewhistorys)
    {
        $this->tbinformationviewhistorys->removeElement($tbinformationviewhistorys);
    }

    /**
     * Get tbinformationviewhistorys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbinformationviewhistorys()
    {
        return $this->tbinformationviewhistorys;
    }

    /**
     * Set tbsystemuser
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemuser
     * @return TBProjectEnter
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

    /**
     * Set tbproject
     *
     * @param \System\CompasBundle\Entity\TBProject $tbproject
     * @return TBProjectEnter
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
