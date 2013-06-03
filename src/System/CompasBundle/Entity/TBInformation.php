<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBInformation
 */
class TBInformation
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
     * @var string
     */
    private $Body;

    /**
     * @var \DateTime
     */
    private $DisplayPeriod;

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
    private $tbinformationviewhistorys;

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
     * @return TBInformation
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
     * @return TBInformation
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
     * Set Body
     *
     * @param string $body
     * @return TBInformation
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
     * Set DisplayPeriod
     *
     * @param \DateTime $displayPeriod
     * @return TBInformation
     */
    public function setDisplayPeriod($displayPeriod)
    {
        $this->DisplayPeriod = $displayPeriod;
    
        return $this;
    }

    /**
     * Get DisplayPeriod
     *
     * @return \DateTime 
     */
    public function getDisplayPeriod()
    {
        return $this->DisplayPeriod;
    }

    /**
     * Set CreatedDatetime
     *
     * @param \DateTime $createdDatetime
     * @return TBInformation
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
     * @return TBInformation
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
     * @return TBInformation
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
     * Add tbinformationviewhistorys
     *
     * @param \System\CompasBundle\Entity\TBInformationViewHistory $tbinformationviewhistorys
     * @return TBInformation
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
     * Set tbproject
     *
     * @param \System\CompasBundle\Entity\TBProject $tbproject
     * @return TBInformation
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
     * @return TBInformation
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
