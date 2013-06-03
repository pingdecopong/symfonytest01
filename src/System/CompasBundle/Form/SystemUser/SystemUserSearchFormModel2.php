<?php
/**
 * ユーザー検索フォーム用　モデル
 */
namespace System\CompasBundle\Form\SystemUser;

use Symfony\Component\Validator\Constraints as Assert;

class SystemUserSearchFormModel2 {

    /**
     * @var string
     * @Assert\Length(max="10")
     */
    private $name;
    private $companyId;
    private $active;
    /**
     * @var integer
     * @Assert\Type(type="numeric")
     */
    private $pageNo;

    /**
     * @var integer
     * @Assert\Type(type="numeric")
     */
    private $pageSize;

    /**
     * @var string
     */
    private $sort;

    /**
     * @var string
     */
    private $sortType;

    private $buttonAction;

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $buttonAction
     */
    public function setButtonAction($buttonAction)
    {
        $this->buttonAction = $buttonAction;
    }

    /**
     * @return mixed
     */
    public function getButtonAction()
    {
        return $this->buttonAction;
    }

    /**
     * @param mixed $companyId
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
    }

    /**
     * @return mixed
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return int
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param string $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $sortType
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    /**
     * @return string
     */
    public function getSortType()
    {
        return $this->sortType;
    }


}