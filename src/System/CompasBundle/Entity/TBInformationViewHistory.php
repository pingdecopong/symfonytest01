<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBInformationViewHistory
 */
class TBInformationViewHistory
{
    /**
     * @var integer
     */
    private $ProjectEnterId;

    /**
     * @var integer
     */
    private $InformationId;

    /**
     * @var \System\CompasBundle\Entity\TBProjectEnter
     */
    private $tbprojectenter;

    /**
     * @var \System\CompasBundle\Entity\TBInformation
     */
    private $tbinformation;


    /**
     * Set ProjectEnterId
     *
     * @param integer $projectEnterId
     * @return TBInformationViewHistory
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
     * Set InformationId
     *
     * @param integer $informationId
     * @return TBInformationViewHistory
     */
    public function setInformationId($informationId)
    {
        $this->InformationId = $informationId;
    
        return $this;
    }

    /**
     * Get InformationId
     *
     * @return integer 
     */
    public function getInformationId()
    {
        return $this->InformationId;
    }

    /**
     * Set tbprojectenter
     *
     * @param \System\CompasBundle\Entity\TBProjectEnter $tbprojectenter
     * @return TBInformationViewHistory
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
     * Set tbinformation
     *
     * @param \System\CompasBundle\Entity\TBInformation $tbinformation
     * @return TBInformationViewHistory
     */
    public function setTbinformation(\System\CompasBundle\Entity\TBInformation $tbinformation = null)
    {
        $this->tbinformation = $tbinformation;
    
        return $this;
    }

    /**
     * Get tbinformation
     *
     * @return \System\CompasBundle\Entity\TBInformation 
     */
    public function getTbinformation()
    {
        return $this->tbinformation;
    }
}
