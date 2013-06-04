<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/03
 * Time: 17:34
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager;


class PagerFormModel implements PagerFormModelInterface {

    protected $pageNo;

    protected $pageSize;

    function __construct()
    {
//        $this->pageNo = 1;
//        $this->pageSize = 10;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}