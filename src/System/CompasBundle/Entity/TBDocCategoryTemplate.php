<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDocCategoryTemplate
 */
class TBDocCategoryTemplate
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
    private $tbdoccategorytemplatedetas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbdoccategorytemplatedetas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBDocCategoryTemplate
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
     * Add tbdoccategorytemplatedetas
     *
     * @param \System\CompasBundle\Entity\TBDocCategoryTemplateDeta $tbdoccategorytemplatedetas
     * @return TBDocCategoryTemplate
     */
    public function addTbdoccategorytemplatedeta(\System\CompasBundle\Entity\TBDocCategoryTemplateDeta $tbdoccategorytemplatedetas)
    {
        $this->tbdoccategorytemplatedetas[] = $tbdoccategorytemplatedetas;
    
        return $this;
    }

    /**
     * Remove tbdoccategorytemplatedetas
     *
     * @param \System\CompasBundle\Entity\TBDocCategoryTemplateDeta $tbdoccategorytemplatedetas
     */
    public function removeTbdoccategorytemplatedeta(\System\CompasBundle\Entity\TBDocCategoryTemplateDeta $tbdoccategorytemplatedetas)
    {
        $this->tbdoccategorytemplatedetas->removeElement($tbdoccategorytemplatedetas);
    }

    /**
     * Get tbdoccategorytemplatedetas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdoccategorytemplatedetas()
    {
        return $this->tbdoccategorytemplatedetas;
    }
}
