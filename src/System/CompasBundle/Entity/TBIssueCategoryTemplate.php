<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssueCategoryTemplate
 */
class TBIssueCategoryTemplate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbissuecategorytemplatedetails;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbissuecategorytemplatedetails = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set Name
     *
     * @param string $name
     * @return TBIssueCategoryTemplate
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
     * Add tbissuecategorytemplatedetails
     *
     * @param \System\CompasBundle\Entity\TBIssueCategoryTemplateDetail $tbissuecategorytemplatedetails
     * @return TBIssueCategoryTemplate
     */
    public function addTbissuecategorytemplatedetail(\System\CompasBundle\Entity\TBIssueCategoryTemplateDetail $tbissuecategorytemplatedetails)
    {
        $this->tbissuecategorytemplatedetails[] = $tbissuecategorytemplatedetails;
    
        return $this;
    }

    /**
     * Remove tbissuecategorytemplatedetails
     *
     * @param \System\CompasBundle\Entity\TBIssueCategoryTemplateDetail $tbissuecategorytemplatedetails
     */
    public function removeTbissuecategorytemplatedetail(\System\CompasBundle\Entity\TBIssueCategoryTemplateDetail $tbissuecategorytemplatedetails)
    {
        $this->tbissuecategorytemplatedetails->removeElement($tbissuecategorytemplatedetails);
    }

    /**
     * Get tbissuecategorytemplatedetails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissuecategorytemplatedetails()
    {
        return $this->tbissuecategorytemplatedetails;
    }
}
