<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBContract
 */
class TBContract
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
     * @var boolean
     */
    private $Active;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbsystemusers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbcompanys;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbdepartments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tbprojects;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tbsystemusers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbcompanys = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbdepartments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tbprojects = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBContract
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
     * Set Active
     *
     * @param boolean $active
     * @return TBContract
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
     * Add tbsystemusers
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemusers
     * @return TBContract
     */
    public function addTbsystemuser(\System\CompasBundle\Entity\TBSystemUser $tbsystemusers)
    {
        $this->tbsystemusers[] = $tbsystemusers;
    
        return $this;
    }

    /**
     * Remove tbsystemusers
     *
     * @param \System\CompasBundle\Entity\TBSystemUser $tbsystemusers
     */
    public function removeTbsystemuser(\System\CompasBundle\Entity\TBSystemUser $tbsystemusers)
    {
        $this->tbsystemusers->removeElement($tbsystemusers);
    }

    /**
     * Get tbsystemusers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbsystemusers()
    {
        return $this->tbsystemusers;
    }

    /**
     * Add tbcompanys
     *
     * @param \System\CompasBundle\Entity\TBCompany $tbcompanys
     * @return TBContract
     */
    public function addTbcompany(\System\CompasBundle\Entity\TBCompany $tbcompanys)
    {
        $this->tbcompanys[] = $tbcompanys;
    
        return $this;
    }

    /**
     * Remove tbcompanys
     *
     * @param \System\CompasBundle\Entity\TBCompany $tbcompanys
     */
    public function removeTbcompany(\System\CompasBundle\Entity\TBCompany $tbcompanys)
    {
        $this->tbcompanys->removeElement($tbcompanys);
    }

    /**
     * Get tbcompanys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbcompanys()
    {
        return $this->tbcompanys;
    }

    /**
     * Add tbdepartments
     *
     * @param \System\CompasBundle\Entity\TBDepartment $tbdepartments
     * @return TBContract
     */
    public function addTbdepartment(\System\CompasBundle\Entity\TBDepartment $tbdepartments)
    {
        $this->tbdepartments[] = $tbdepartments;
    
        return $this;
    }

    /**
     * Remove tbdepartments
     *
     * @param \System\CompasBundle\Entity\TBDepartment $tbdepartments
     */
    public function removeTbdepartment(\System\CompasBundle\Entity\TBDepartment $tbdepartments)
    {
        $this->tbdepartments->removeElement($tbdepartments);
    }

    /**
     * Get tbdepartments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbdepartments()
    {
        return $this->tbdepartments;
    }

    /**
     * Add tbprojects
     *
     * @param \System\CompasBundle\Entity\TBProject $tbprojects
     * @return TBContract
     */
    public function addTbproject(\System\CompasBundle\Entity\TBProject $tbprojects)
    {
        $this->tbprojects[] = $tbprojects;
    
        return $this;
    }

    /**
     * Remove tbprojects
     *
     * @param \System\CompasBundle\Entity\TBProject $tbprojects
     */
    public function removeTbproject(\System\CompasBundle\Entity\TBProject $tbprojects)
    {
        $this->tbprojects->removeElement($tbprojects);
    }

    /**
     * Get tbprojects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTbprojects()
    {
        return $this->tbprojects;
    }
}
