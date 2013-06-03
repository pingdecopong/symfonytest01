<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBProject
 */
class TBProject
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
    private $NormalFlug;

    /**
     * @var boolean
     */
    private $DocRoomFlug;

    /**
     * @var boolean
     */
    private $MongoDBFlug;

    /**
     * @var boolean
     */
    private $ActiveFlug;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbprojectenters;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissues;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdocuments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissuecategorys;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissuestatuss;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissueprioritys;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdocumentcategorys;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbinformations;

    /**
     * @var \System\CompasBundle\Entity\TBContract
     */
    private $tbcontract;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbprojectenters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissues = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbdocuments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissuecategorys = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissuestatuss = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissueprioritys = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbdocumentcategorys = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbinformations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBProject
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
     * @return TBProject
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
     * Set NormalFlug
     *
     * @param boolean $normalFlug
     * @return TBProject
     */
    public function setNormalFlug($normalFlug)
    {
        $this->NormalFlug = $normalFlug;
    
        return $this;
    }

    /**
     * Get NormalFlug
     *
     * @return boolean 
     */
    public function getNormalFlug()
    {
        return $this->NormalFlug;
    }

    /**
     * Set DocRoomFlug
     *
     * @param boolean $docRoomFlug
     * @return TBProject
     */
    public function setDocRoomFlug($docRoomFlug)
    {
        $this->DocRoomFlug = $docRoomFlug;
    
        return $this;
    }

    /**
     * Get DocRoomFlug
     *
     * @return boolean 
     */
    public function getDocRoomFlug()
    {
        return $this->DocRoomFlug;
    }

    /**
     * Set MongoDBFlug
     *
     * @param boolean $mongoDBFlug
     * @return TBProject
     */
    public function setMongoDBFlug($mongoDBFlug)
    {
        $this->MongoDBFlug = $mongoDBFlug;
    
        return $this;
    }

    /**
     * Get MongoDBFlug
     *
     * @return boolean 
     */
    public function getMongoDBFlug()
    {
        return $this->MongoDBFlug;
    }

    /**
     * Set ActiveFlug
     *
     * @param boolean $activeFlug
     * @return TBProject
     */
    public function setActiveFlug($activeFlug)
    {
        $this->ActiveFlug = $activeFlug;
    
        return $this;
    }

    /**
     * Get ActiveFlug
     *
     * @return boolean 
     */
    public function getActiveFlug()
    {
        return $this->ActiveFlug;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBProject
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
     * @return TBProject
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
     * @return TBProject
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
     * Add tbprojectenters
     *
     * @param \System\CompasBundle\Entity\TBProjectEnter $tbprojectenters
     * @return TBProject
     */
    public function addTbprojectenter(\System\CompasBundle\Entity\TBProjectEnter $tbprojectenters)
    {
        $this->tbprojectenters[] = $tbprojectenters;
    
        return $this;
    }

    /**
     * Remove tbprojectenters
     *
     * @param \System\CompasBundle\Entity\TBProjectEnter $tbprojectenters
     */
    public function removeTbprojectenter(\System\CompasBundle\Entity\TBProjectEnter $tbprojectenters)
    {
        $this->tbprojectenters->removeElement($tbprojectenters);
    }

    /**
     * Get tbprojectenters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbprojectenters()
    {
        return $this->tbprojectenters;
    }

    /**
     * Add tbissues
     *
     * @param \System\CompasBundle\Entity\TBIssue $tbissues
     * @return TBProject
     */
    public function addTbissue(\System\CompasBundle\Entity\TBIssue $tbissues)
    {
        $this->tbissues[] = $tbissues;
    
        return $this;
    }

    /**
     * Remove tbissues
     *
     * @param \System\CompasBundle\Entity\TBIssue $tbissues
     */
    public function removeTbissue(\System\CompasBundle\Entity\TBIssue $tbissues)
    {
        $this->tbissues->removeElement($tbissues);
    }

    /**
     * Get tbissues
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissues()
    {
        return $this->tbissues;
    }

    /**
     * Add tbdocuments
     *
     * @param \System\CompasBundle\Entity\TBDocument $tbdocuments
     * @return TBProject
     */
    public function addTbdocument(\System\CompasBundle\Entity\TBDocument $tbdocuments)
    {
        $this->tbdocuments[] = $tbdocuments;
    
        return $this;
    }

    /**
     * Remove tbdocuments
     *
     * @param \System\CompasBundle\Entity\TBDocument $tbdocuments
     */
    public function removeTbdocument(\System\CompasBundle\Entity\TBDocument $tbdocuments)
    {
        $this->tbdocuments->removeElement($tbdocuments);
    }

    /**
     * Get tbdocuments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdocuments()
    {
        return $this->tbdocuments;
    }

    /**
     * Add tbissuecategorys
     *
     * @param \System\CompasBundle\Entity\TBIssueCategory $tbissuecategorys
     * @return TBProject
     */
    public function addTbissuecategory(\System\CompasBundle\Entity\TBIssueCategory $tbissuecategorys)
    {
        $this->tbissuecategorys[] = $tbissuecategorys;
    
        return $this;
    }

    /**
     * Remove tbissuecategorys
     *
     * @param \System\CompasBundle\Entity\TBIssueCategory $tbissuecategorys
     */
    public function removeTbissuecategory(\System\CompasBundle\Entity\TBIssueCategory $tbissuecategorys)
    {
        $this->tbissuecategorys->removeElement($tbissuecategorys);
    }

    /**
     * Get tbissuecategorys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissuecategorys()
    {
        return $this->tbissuecategorys;
    }

    /**
     * Add tbissuestatuss
     *
     * @param \System\CompasBundle\Entity\TBIssueStatus $tbissuestatuss
     * @return TBProject
     */
    public function addTbissuestatus(\System\CompasBundle\Entity\TBIssueStatus $tbissuestatuss)
    {
        $this->tbissuestatuss[] = $tbissuestatuss;
    
        return $this;
    }

    /**
     * Remove tbissuestatuss
     *
     * @param \System\CompasBundle\Entity\TBIssueStatus $tbissuestatuss
     */
    public function removeTbissuestatus(\System\CompasBundle\Entity\TBIssueStatus $tbissuestatuss)
    {
        $this->tbissuestatuss->removeElement($tbissuestatuss);
    }

    /**
     * Get tbissuestatuss
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissuestatuss()
    {
        return $this->tbissuestatuss;
    }

    /**
     * Add tbissueprioritys
     *
     * @param \System\CompasBundle\Entity\TBIssuePriority $tbissueprioritys
     * @return TBProject
     */
    public function addTbissuepriority(\System\CompasBundle\Entity\TBIssuePriority $tbissueprioritys)
    {
        $this->tbissueprioritys[] = $tbissueprioritys;
    
        return $this;
    }

    /**
     * Remove tbissueprioritys
     *
     * @param \System\CompasBundle\Entity\TBIssuePriority $tbissueprioritys
     */
    public function removeTbissuepriority(\System\CompasBundle\Entity\TBIssuePriority $tbissueprioritys)
    {
        $this->tbissueprioritys->removeElement($tbissueprioritys);
    }

    /**
     * Get tbissueprioritys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissueprioritys()
    {
        return $this->tbissueprioritys;
    }

    /**
     * Add tbdocumentcategorys
     *
     * @param \System\CompasBundle\Entity\TBDocumentCategory $tbdocumentcategorys
     * @return TBProject
     */
    public function addTbdocumentcategory(\System\CompasBundle\Entity\TBDocumentCategory $tbdocumentcategorys)
    {
        $this->tbdocumentcategorys[] = $tbdocumentcategorys;
    
        return $this;
    }

    /**
     * Remove tbdocumentcategorys
     *
     * @param \System\CompasBundle\Entity\TBDocumentCategory $tbdocumentcategorys
     */
    public function removeTbdocumentcategory(\System\CompasBundle\Entity\TBDocumentCategory $tbdocumentcategorys)
    {
        $this->tbdocumentcategorys->removeElement($tbdocumentcategorys);
    }

    /**
     * Get tbdocumentcategorys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdocumentcategorys()
    {
        return $this->tbdocumentcategorys;
    }

    /**
     * Add tbinformations
     *
     * @param \System\CompasBundle\Entity\TBInformation $tbinformations
     * @return TBProject
     */
    public function addTbinformation(\System\CompasBundle\Entity\TBInformation $tbinformations)
    {
        $this->tbinformations[] = $tbinformations;
    
        return $this;
    }

    /**
     * Remove tbinformations
     *
     * @param \System\CompasBundle\Entity\TBInformation $tbinformations
     */
    public function removeTbinformation(\System\CompasBundle\Entity\TBInformation $tbinformations)
    {
        $this->tbinformations->removeElement($tbinformations);
    }

    /**
     * Get tbinformations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbinformations()
    {
        return $this->tbinformations;
    }

    /**
     * Set tbcontract
     *
     * @param \System\CompasBundle\Entity\TBContract $tbcontract
     * @return TBProject
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
