<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBCompany
 */
class TBCompany
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $ContractId;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var boolean
     */
    private $DeleteFlug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdepartments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbsystemusers;

    /**
     * @var \System\CompasBundle\Entity\TBContract
     */
    private $tbcontract;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbdepartments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbsystemusers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set ContractId
     *
     * @param integer $contractId
     * @return TBCompany
     */
    public function setContractId($contractId)
    {
        $this->ContractId = $contractId;
    
        return $this;
    }

    /**
     * Get ContractId
     *
     * @return integer 
     */
    public function getContractId()
    {
        return $this->ContractId;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return TBCompany
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
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBCompany
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
     * Add tbdepartments
     *
     * @param \System\CompasBundle\Entity\TBDepartment $tbdepartments
     * @return TBCompany
     */
    public function addTbdepartment(\System\CompasBundle\Entity\TBDepartment $tbdepartments)
    {
        $this->tbdepartments[] = $tbdepartments;
    
        return $this;
    }

    /**
     * Remove tbdepartments
     *
     * @param \System\CompasBundle\Entity\TBDepartment $tbdepartments
     */
    public function removeTbdepartment(\System\CompasBundle\Entity\TBDepartment $tbdepartments)
    {
        $this->tbdepartments->removeElement($tbdepartments);
    }

    /**
     * Get tbdepartments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdepartments()
    {
        return $this->tbdepartments;
    }

    /**
     * Add tbsystemusers
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemusers
     * @return TBCompany
     */
    public function addTbsystemuser(\System\CompasBundle\Entity\TBSystemUser $tbsystemusers)
    {
        $this->tbsystemusers[] = $tbsystemusers;
    
        return $this;
    }

    /**
     * Remove tbsystemusers
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemusers
     */
    public function removeTbsystemuser(\System\CompasBundle\Entity\TBSystemUser $tbsystemusers)
    {
        $this->tbsystemusers->removeElement($tbsystemusers);
    }

    /**
     * Get tbsystemusers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbsystemusers()
    {
        return $this->tbsystemusers;
    }

    /**
     * Set tbcontract
     *
     * @param \System\CompasBundle\Entity\TBContract $tbcontract
     * @return TBCompany
     */
    public function setTbcontract(\System\CompasBundle\Entity\TBContract $tbcontract = null)
    {
        $this->tbcontract = $tbcontract;
    
        return $this;
    }

    /**
     * Get tbcontract
     *
     * @return \System\CompasBundle\Entity\TBContract 
     */
    public function getTbcontract()
    {
        return $this->tbcontract;
    }
}
