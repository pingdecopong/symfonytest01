<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/07
 * Time: 17:42
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager;


use System\CompasBundle\Lib\Pager\BasicPager\PageNo\PageNoListView;
use System\CompasBundle\Lib\Pager\BasicPager\PageSize\PageSizeListView;

class BasicPagerView {

    /**
     * @var PageNo\PageNoListView
     */
    private $pageNo;
    /**
     * @var PageSize\PageSizeListView
     */
    private $pageSise;

    function __construct()
    {
        $this->pageNo = new PageNoListView();
        $this->pageSise = new PageSizeListView();
    }

    /**
     * @param \System\CompasBundle\Lib\Pager\BasicPager\PageNo\PageNoListView $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return \System\CompasBundle\Lib\Pager\BasicPager\PageNo\PageNoListView
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param \System\CompasBundle\Lib\Pager\BasicPager\PageSize\PageSizeListView $pageSise
     */
    public function setPageSise($pageSise)
    {
        $this->pageSise = $pageSise;
    }

    /**
     * @return \System\CompasBundle\Lib\Pager\BasicPager\PageSize\PageSizeListView
     */
    public function getPageSise()
    {
        return $this->pageSise;
    }


}