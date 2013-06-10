<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/10
 * Time: 16:39
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicColumn;


class BasicColumnFormModel {

    private $sortName;
    private $sortType;

    /**
     * @param mixed $sortName
     */
    public function setSortName($sortName)
    {
        $this->sortName = $sortName;
    }

    /**
     * @return mixed
     */
    public function getSortName()
    {
        return $this->sortName;
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