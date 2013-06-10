<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/10
 * Time: 17:41
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicColumn;


class BasicColumnRowView {

    private $label;
    private $enable;
    private $sortSelected;
    private $sortType;

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $enable
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
    }

    /**
     * @return mixed
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * @param mixed $sortSelected
     */
    public function setSortSelected($sortSelected)
    {
        $this->sortSelected = $sortSelected;
    }

    /**
     * @return mixed
     */
    public function getSortSelected()
    {
        return $this->sortSelected;
    }

    /**
     * @param mixed $sortType
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    /**
     * @return mixed
     */
    public function getSortType()
    {
        return $this->sortType;
    }


}