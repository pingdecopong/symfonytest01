<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDepartment
 */
class TBDepartment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $CompanyId;

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
     * @var integer
     */
    private $SortNo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbsystemusers;

    /**
     * @var \System\CompasBundle\Entity\TBCompany
     */
    private $tbcompany;

    /**
     * @var \System\CompasBundle\Entity\TBContract
     */
    private $tbcontract;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set CompanyId
     *
     * @param integer $companyId
     * @return TBDepartment
     */
    public function setCompanyId($companyId)
    {
        $this->CompanyId = $companyId;
    
        return $this;
    }

    /**
     * Get CompanyId
     *
     * @return integer 
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }

    /**
     * Set ContractId
     *
     * @param integer $contractId
     * @return TBDepartment
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
     * @return TBDepartment
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
     * @return TBDepartment
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
     * @return TBDepartment
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
     * Add tbsystemusers
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemusers
     * @return TBDepartment
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
     * Set tbcompany
     *
     * @param \System\CompasBundle\Entity\TBCompany $tbcompany
     * @return TBDepartment
     */
    public function setTbcompany(\System\CompasBundle\Entity\TBCompany $tbcompany = null)
    {
        $this->tbcompany = $tbcompany;
    
        return $this;
    }

    /**
     * Get tbcompany
     *
     * @return \System\CompasBundle\Entity\TBCompany 
     */
    public function getTbcompany()
    {
        return $this->tbcompany;
    }

    /**
     * Set tbcontract
     *
     * @param \System\CompasBundle\Entity\TBContract $tbcontract
     * @return TBDepartment
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
