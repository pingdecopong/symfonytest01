<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/07
 * Time: 17:42
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager;




class BasicPagerView {

    /**
     * @var BasicPagerNoView
     */
    private $pageNo;
    /**
     * @var BasicPagerSizeView
     */
    private $pageSize;

    /**
     * @param \System\CompasBundle\Lib\Pager\BasicPager\BasicPagerNoView $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return \System\CompasBundle\Lib\Pager\BasicPager\BasicPagerNoView
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param \System\CompasBundle\Lib\Pager\BasicPager\BasicPagerSizeView $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return \System\CompasBundle\Lib\Pager\BasicPager\BasicPagerSizeView
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

}