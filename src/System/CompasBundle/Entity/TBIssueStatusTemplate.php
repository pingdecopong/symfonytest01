<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssueStatusTemplate
 */
class TBIssueStatusTemplate
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
    private $tbissuestatustemplatedetails;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbissuestatustemplatedetails = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBIssueStatusTemplate
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
     * Add tbissuestatustemplatedetails
     *
     * @param \System\CompasBundle\Entity\TBIssueStatusTemplateDetail $tbissuestatustemplatedetails
     * @return TBIssueStatusTemplate
     */
    public function addTbissuestatustemplatedetail(\System\CompasBundle\Entity\TBIssueStatusTemplateDetail $tbissuestatustemplatedetails)
    {
        $this->tbissuestatustemplatedetails[] = $tbissuestatustemplatedetails;
    
        return $this;
    }

    /**
     * Remove tbissuestatustemplatedetails
     *
     * @param \System\CompasBundle\Entity\TBIssueStatusTemplateDetail $tbissuestatustemplatedetails
     */
    public function removeTbissuestatustemplatedetail(\System\CompasBundle\Entity\TBIssueStatusTemplateDetail $tbissuestatustemplatedetails)
    {
        $this->tbissuestatustemplatedetails->removeElement($tbissuestatustemplatedetails);
    }

    /**
     * Get tbissuestatustemplatedetails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissuestatustemplatedetails()
    {
        return $this->tbissuestatustemplatedetails;
    }
}
