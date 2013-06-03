<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/03
 * Time: 15:50
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager;


interface PagerInterface {

    public function getForm();

    public function getPageNo();
    public function setPageNo($pageNo);
    public function getPageSize();
    public function setPageSize($pageSize);

    public function setAllCount($count);
    public function getAllCount();

    public function createView();

}