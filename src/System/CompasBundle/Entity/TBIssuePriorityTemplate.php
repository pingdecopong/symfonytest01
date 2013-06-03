<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBIssuePriorityTemplate
 */
class TBIssuePriorityTemplate
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
    private $tbissueprioritytemplatedetails;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbissueprioritytemplatedetails = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBIssuePriorityTemplate
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
     * Add tbissueprioritytemplatedetails
     *
     * @param \System\CompasBundle\Entity\TBIssuePriorityTemplateDetail $tbissueprioritytemplatedetails
     * @return TBIssuePriorityTemplate
     */
    public function addTbissueprioritytemplatedetail(\System\CompasBundle\Entity\TBIssuePriorityTemplateDetail $tbissueprioritytemplatedetails)
    {
        $this->tbissueprioritytemplatedetails[] = $tbissueprioritytemplatedetails;
    
        return $this;
    }

    /**
     * Remove tbissueprioritytemplatedetails
     *
     * @param \System\CompasBundle\Entity\TBIssuePriorityTemplateDetail $tbissueprioritytemplatedetails
     */
    public function removeTbissueprioritytemplatedetail(\System\CompasBundle\Entity\TBIssuePriorityTemplateDetail $tbissueprioritytemplatedetails)
    {
        $this->tbissueprioritytemplatedetails->removeElement($tbissueprioritytemplatedetails);
    }

    /**
     * Get tbissueprioritytemplatedetails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbissueprioritytemplatedetails()
    {
        return $this->tbissueprioritytemplatedetails;
    }
}
