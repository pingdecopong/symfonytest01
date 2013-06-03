<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssuePriorityTemplateDetail
 */
class TBIssuePriorityTemplateDetail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $IssuePriorityTemplateId;

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
     * @var \System\CompasBundle\Entity\TBIssuePriorityTemplate
     */
    private $tbissueprioritytemplate;


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
     * Set IssuePriorityTemplateId
     *
     * @param integer $issuePriorityTemplateId
     * @return TBIssuePriorityTemplateDetail
     */
    public function setIssuePriorityTemplateId($issuePriorityTemplateId)
    {
        $this->IssuePriorityTemplateId = $issuePriorityTemplateId;
    
        return $this;
    }

    /**
     * Get IssuePriorityTemplateId
     *
     * @return integer 
     */
    public function getIssuePriorityTemplateId()
    {
        return $this->IssuePriorityTemplateId;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return TBIssuePriorityTemplateDetail
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
     * @return TBIssuePriorityTemplateDetail
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
     * @return TBIssuePriorityTemplateDetail
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
     * @return TBIssuePriorityTemplateDetail
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
     * Set tbissueprioritytemplate
     *
     * @param \System\CompasBundle\Entity\TBIssuePriorityTemplate $tbissueprioritytemplate
     * @return TBIssuePriorityTemplateDetail
     */
    public function setTbissueprioritytemplate(\System\CompasBundle\Entity\TBIssuePriorityTemplate $tbissueprioritytemplate = null)
    {
        $this->tbissueprioritytemplate = $tbissueprioritytemplate;
    
        return $this;
    }

    /**
     * Get tbissueprioritytemplate
     *
     * @return \System\CompasBundle\Entity\TBIssuePriorityTemplate 
     */
    public function getTbissueprioritytemplate()
    {
        return $this->tbissueprioritytemplate;
    }
}
