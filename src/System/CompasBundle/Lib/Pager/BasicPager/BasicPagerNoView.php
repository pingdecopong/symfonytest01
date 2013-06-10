<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/10
 * Time: 11:00
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager;


class BasicPagerNoView {

    private $rows;

    function __construct()
    {
        $this->rows = array();
    }

    /**
     * @param \System\CompasBundle\Lib\Pager\BasicPager\BasicPagerNoRowView $rows
     */
    public function addRows(BasicPagerNoRowView $rows)
    {
        $this->rows[] = $rows;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }
}