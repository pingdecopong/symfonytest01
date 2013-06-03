<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/03
 * Time: 17:31
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager;


interface PagerFormModelInterface {

    public function setPageNo($pageNo);
    public function getPageNo();
    public function setPageSize($pageSize);
    public function getPageSize();

}