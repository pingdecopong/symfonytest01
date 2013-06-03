<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDocCategoryTemplateDeta
 */
class TBDocCategoryTemplateDeta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $DocCategoryTemplateId;

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
     * @var \System\CompasBundle\Entity\TBDocCategoryTemplate
     */
    private $tbdoccategorytemplate;


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
     * Set DocCategoryTemplateId
     *
     * @param integer $docCategoryTemplateId
     * @return TBDocCategoryTemplateDeta
     */
    public function setDocCategoryTemplateId($docCategoryTemplateId)
    {
        $this->DocCategoryTemplateId = $docCategoryTemplateId;
    
        return $this;
    }

    /**
     * Get DocCategoryTemplateId
     *
     * @return integer 
     */
    public function getDocCategoryTemplateId()
    {
        return $this->DocCategoryTemplateId;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return TBDocCategoryTemplateDeta
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
     * @return TBDocCategoryTemplateDeta
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
     * @return TBDocCategoryTemplateDeta
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
     * @return TBDocCategoryTemplateDeta
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
     * Set tbdoccategorytemplate
     *
     * @param \System\CompasBundle\Entity\TBDocCategoryTemplate $tbdoccategorytemplate
     * @return TBDocCategoryTemplateDeta
     */
    public function setTbdoccategorytemplate(\System\CompasBundle\Entity\TBDocCategoryTemplate $tbdoccategorytemplate = null)
    {
        $this->tbdoccategorytemplate = $tbdoccategorytemplate;
    
        return $this;
    }

    /**
     * Get tbdoccategorytemplate
     *
     * @return \System\CompasBundle\Entity\TBDocCategoryTemplate 
     */
    public function getTbdoccategorytemplate()
    {
        return $this->tbdoccategorytemplate;
    }
}
