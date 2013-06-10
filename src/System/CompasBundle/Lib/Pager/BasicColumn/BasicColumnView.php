<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/10
 * Time: 17:40
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicColumn;


class BasicColumnView {

    private $rows;

    function __construct()
    {
        $this->rows = array();
    }

    public function addRows(BasicColumnRowView $row)
    {
        $this->rows[] = $row;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

}