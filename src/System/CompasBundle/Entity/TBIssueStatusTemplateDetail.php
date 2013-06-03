<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssueStatusTemplateDetail
 */
class TBIssueStatusTemplateDetail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $IssueStatusTemplateId;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $IconFileName;

    /**
     * @var integer
     */
    private $SortNo;

    /**
     * @var \System\CompasBundle\Entity\TBIssueStatusTemplate
     */
    private $tbissuestatustemplate;


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
     * Set IssueStatusTemplateId
     *
     * @param integer $issueStatusTemplateId
     * @return TBIssueStatusTemplateDetail
     */
    public function setIssueStatusTemplateId($issueStatusTemplateId)
    {
        $this->IssueStatusTemplateId = $issueStatusTemplateId;
    
        return $this;
    }

    /**
     * Get IssueStatusTemplateId
     *
     * @return integer 
     */
    public function getIssueStatusTemplateId()
    {
        return $this->IssueStatusTemplateId;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return TBIssueStatusTemplateDetail
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
     * Set Description
     *
     * @param string $description
     * @return TBIssueStatusTemplateDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
    
        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set IconFileName
     *
     * @param string $iconFileName
     * @return TBIssueStatusTemplateDetail
     */
    public function setIconFileName($iconFileName)
    {
        $this->IconFileName = $iconFileName;
    
        return $this;
    }

    /**
     * Get IconFileName
     *
     * @return string 
     */
    public function getIconFileName()
    {
        return $this->IconFileName;
    }

    /**
     * Set SortNo
     *
     * @param integer $sortNo
     * @return TBIssueStatusTemplateDetail
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
     * Set tbissuestatustemplate
     *
     * @param \System\CompasBundle\Entity\TBIssueStatusTemplate $tbissuestatustemplate
     * @return TBIssueStatusTemplateDetail
     */
    public function setTbissuestatustemplate(\System\CompasBundle\Entity\TBIssueStatusTemplate $tbissuestatustemplate = null)
    {
        $this->tbissuestatustemplate = $tbissuestatustemplate;
    
        return $this;
    }

    /**
     * Get tbissuestatustemplate
     *
     * @return \System\CompasBundle\Entity\TBIssueStatusTemplate 
     */
    public function getTbissuestatustemplate()
    {
        return $this->tbissuestatustemplate;
    }
}
