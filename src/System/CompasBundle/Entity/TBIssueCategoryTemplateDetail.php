<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssueCategoryTemplateDetail
 */
class TBIssueCategoryTemplateDetail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $IssueCategoryTemplateId;

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
     * @var \System\CompasBundle\Entity\TBIssueCategoryTemplate
     */
    private $tbissuecategorytemplate;


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
     * Set IssueCategoryTemplateId
     *
     * @param integer $issueCategoryTemplateId
     * @return TBIssueCategoryTemplateDetail
     */
    public function setIssueCategoryTemplateId($issueCategoryTemplateId)
    {
        $this->IssueCategoryTemplateId = $issueCategoryTemplateId;
    
        return $this;
    }

    /**
     * Get IssueCategoryTemplateId
     *
     * @return integer 
     */
    public function getIssueCategoryTemplateId()
    {
        return $this->IssueCategoryTemplateId;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return TBIssueCategoryTemplateDetail
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
     * @return TBIssueCategoryTemplateDetail
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
     * @return TBIssueCategoryTemplateDetail
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
     * @return TBIssueCategoryTemplateDetail
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
     * Set tbissuecategorytemplate
     *
     * @param \System\CompasBundle\Entity\TBIssueCategoryTemplate $tbissuecategorytemplate
     * @return TBIssueCategoryTemplateDetail
     */
    public function setTbissuecategorytemplate(\System\CompasBundle\Entity\TBIssueCategoryTemplate $tbissuecategorytemplate = null)
    {
        $this->tbissuecategorytemplate = $tbissuecategorytemplate;
    
        return $this;
    }

    /**
     * Get tbissuecategorytemplate
     *
     * @return \System\CompasBundle\Entity\TBIssueCategoryTemplate 
     */
    public function getTbissuecategorytemplate()
    {
        return $this->tbissuecategorytemplate;
    }
}
