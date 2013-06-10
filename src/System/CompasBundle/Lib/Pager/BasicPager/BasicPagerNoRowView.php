<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/10
 * Time: 11:36
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager;


class BasicPagerNoRowView {

    private $label;
    private $pageNo;
    private $select;

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
     * @param mixed $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param mixed $select
     */
    public function setSelect($select)
    {
        $this->select = $select;
    }

    /**
     * @return mixed
     */
    public function getSelect()
    {
        return $this->select;
    }

}