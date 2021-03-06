<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/07
 * Time: 16:06
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager\PageNo;


class PageNoListView {

    private $rows;

    function __construct()
    {
        $this->rows = array();
    }

    /**
     * @param \System\CompasBundle\Lib\Pager\BasicPager\PageNo\PageNoListRowView $rows
     */
    public function addRows(PageNoListRowView $rows)
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