<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/04/12
 * Time: 14:47
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Form\Type;

use Symfony\Component\Validator\Constraints as Assert;

class ListFormModel {

    /**
     * @var integer
     * @Assert\Type(type="numeric")
     */
    protected $pageNo;

    /**
     * @var integer
     * @Assert\Type(type="numeric")
     */
    protected $pageSize;

    /**
     * @var string
     */
    protected $sort;

    /**
     * @var string
     */
    protected $sortType;


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

    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }


}