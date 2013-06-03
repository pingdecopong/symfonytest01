<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBSystemUser
 */
class TBSystemUser
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
    private $LoginId;

    /**
     * @var string
     */
    private $Salt;

    /**
     * @var string
     */
    private $Password;

    /**
     * @var boolean
     */
    private $Active;

    /**
     * @var integer
     */
    private $SystemRoleId;

    /**
     * @var string
     */
    private $DisplayName;

    /**
     * @var string
     */
    private $DisplayNameKana;

    /**
     * @var string
     */
    private $NickName;

    /**
     * @var string
     */
    private $MailAddress;

    /**
     * @var integer
     */
    private $CompanyId;

    /**
     * @var integer
     */
    private $DepartmentId;

    /**
     * @var \DateTime
     */
    private $LastLoginDatetime;

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
    private $tbissuereplys;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissuefiles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdocuments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdocumnetphysicalfiles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbinformations;

    /**
     * @var \System\CompasBundle\Entity\TBContract
     */
    private $tbcontract;

    /**
     * @var \System\CompasBundle\Entity\TBCompany
     */
    private $tbcompany;

    /**
     * @var \System\CompasBundle\Entity\TBDepartment
     */
    private $tbdepartment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbprojectenters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissues = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissuereplys = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbissuefiles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbdocuments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbdocumnetphysicalfiles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBSystemUser
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
     * Set LoginId
     *
     * @param string $loginId
     * @return TBSystemUser
     */
    public function setLoginId($loginId)
    {
        $this->LoginId = $loginId;
    
        return $this;
    }

    /**
     * Get LoginId
     *
     * @return string 
     */
    public function getLoginId()
    {
        return $this->LoginId;
    }

    /**
     * Set Salt
     *
     * @param string $salt
     * @return TBSystemUser
     */
    public function setSalt($salt)
    {
        $this->Salt = $salt;
    
        return $this;
    }

    /**
     * Get Salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->Salt;
    }

    /**
     * Set Password
     *
     * @param string $password
     * @return TBSystemUser
     */
    public function setPassword($password)
    {
        $this->Password = $password;
    
        return $this;
    }

    /**
     * Get Password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set Active
     *
     * @param boolean $active
     * @return TBSystemUser
     */
    public function setActive($active)
    {
        $this->Active = $active;
    
        return $this;
    }

    /**
     * Get Active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * Set SystemRoleId
     *
     * @param integer $systemRoleId
     * @return TBSystemUser
     */
    public function setSystemRoleId($systemRoleId)
    {
        $this->SystemRoleId = $systemRoleId;
    
        return $this;
    }

    /**
     * Get SystemRoleId
     *
     * @return integer 
     */
    public function getSystemRoleId()
    {
        return $this->SystemRoleId;
    }

    /**
     * Set DisplayName
     *
     * @param string $displayName
     * @return TBSystemUser
     */
    public function setDisplayName($displayName)
    {
        $this->DisplayName = $displayName;
    
        return $this;
    }

    /**
     * Get DisplayName
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * Set DisplayNameKana
     *
     * @param string $displayNameKana
     * @return TBSystemUser
     */
    public function setDisplayNameKana($displayNameKana)
    {
        $this->DisplayNameKana = $displayNameKana;
    
        return $this;
    }

    /**
     * Get DisplayNameKana
     *
     * @return string 
     */
    public function getDisplayNameKana()
    {
        return $this->DisplayNameKana;
    }

    /**
     * Set NickName
     *
     * @param string $nickName
     * @return TBSystemUser
     */
    public function setNickName($nickName)
    {
        $this->NickName = $nickName;
    
        return $this;
    }

    /**
     * Get NickName
     *
     * @return string 
     */
    public function getNickName()
    {
        return $this->NickName;
    }

    /**
     * Set MailAddress
     *
     * @param string $mailAddress
     * @return TBSystemUser
     */
    public function setMailAddress($mailAddress)
    {
        $this->MailAddress = $mailAddress;
    
        return $this;
    }

    /**
     * Get MailAddress
     *
     * @return string 
     */
    public function getMailAddress()
    {
        return $this->MailAddress;
    }

    /**
     * Set CompanyId
     *
     * @param integer $companyId
     * @return TBSystemUser
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
     * Set DepartmentId
     *
     * @param integer $departmentId
     * @return TBSystemUser
     */
    public function setDepartmentId($departmentId)
    {
        $this->DepartmentId = $departmentId;
    
        return $this;
    }

    /**
     * Get DepartmentId
     *
     * @return integer 
     */
    public function getDepartmentId()
    {
        return $this->DepartmentId;
    }

    /**
     * Set LastLoginDatetime
     *
     * @param \DateTime $lastLoginDatetime
     * @return TBSystemUser
     */
    public function setLastLoginDatetime($lastLoginDatetime)
    {
        $this->LastLoginDatetime = $lastLoginDatetime;
    
        return $this;
    }

    /**
     * Get LastLoginDatetime
     *
     * @return \DateTime 
     */
    public function getLastLoginDatetime()
    {
        return $this->LastLoginDatetime;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBSystemUser
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
     * @return TBSystemUser
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
     * @return TBSystemUser
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
     * @return TBSystemUser
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
     * @return TBSystemUser
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
     * Add tbissuereplys
     *
     * @param \System\CompasBundle\Entity\TBIssueReply $tbissuereplys
     * @return TBSystemUser
     */
    public function addTbissuereply(\System\CompasBundle\Entity\TBIssueReply $tbissuereplys)
    {
        $this->tbissuereplys[] = $tbissuereplys;
    
        return $this;
    }

    /**
     * Remove tbissuereplys
     *
     * @param \System\CompasBundle\Entity\TBIssueReply $tbissuereplys
     */
    public function removeTbissuereply(\System\CompasBundle\Entity\TBIssueReply $tbissuereplys)
    {
        $this->tbissuereplys->removeElement($tbissuereplys);
    }

    /**
     * Get tbissuereplys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissuereplys()
    {
        return $this->tbissuereplys;
    }

    /**
     * Add tbissuefiles
     *
     * @param \System\CompasBundle\Entity\TBIssueFile $tbissuefiles
     * @return TBSystemUser
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
     * Add tbdocuments
     *
     * @param \System\CompasBundle\Entity\TBDocument $tbdocuments
     * @return TBSystemUser
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
     * Add tbdocumnetphysicalfiles
     *
     * @param \System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfiles
     * @return TBSystemUser
     */
    public function addTbdocumnetphysicalfile(\System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfiles)
    {
        $this->tbdocumnetphysicalfiles[] = $tbdocumnetphysicalfiles;
    
        return $this;
    }

    /**
     * Remove tbdocumnetphysicalfiles
     *
     * @param \System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfiles
     */
    public function removeTbdocumnetphysicalfile(\System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfiles)
    {
        $this->tbdocumnetphysicalfiles->removeElement($tbdocumnetphysicalfiles);
    }

    /**
     * Get tbdocumnetphysicalfiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdocumnetphysicalfiles()
    {
        return $this->tbdocumnetphysicalfiles;
    }

    /**
     * Add tbinformations
     *
     * @param \System\CompasBundle\Entity\TBInformation $tbinformations
     * @return TBSystemUser
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
     * @return TBSystemUser
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

    /**
     * Set tbcompany
     *
     * @param \System\CompasBundle\Entity\TBCompany $tbcompany
     * @return TBSystemUser
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
     * Set tbdepartment
     *
     * @param \System\CompasBundle\Entity\TBDepartment $tbdepartment
     * @return TBSystemUser
     */
    public function setTbdepartment(\System\CompasBundle\Entity\TBDepartment $tbdepartment = null)
    {
        $this->tbdepartment = $tbdepartment;
    
        return $this;
    }

    /**
     * Get tbdepartment
     *
     * @return \System\CompasBundle\Entity\TBDepartment 
     */
    public function getTbdepartment()
    {
        return $this->tbdepartment;
    }
}
