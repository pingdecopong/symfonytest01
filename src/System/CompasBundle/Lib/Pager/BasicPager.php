<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hirashimafumitake
 * Date: 2013/06/03
 * Time: 0:02
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager;


class BasicPager implements PagerInterface {

    private $form;
    private $formFactory;
    private $formModel;
    private $formType;

    private $allCount;

    private $viewData;

    function __construct($formFactory)
    {
        $this->formFactory = $formFactory;
        $this->formModel = new PagerFormModel();
        $this->formType = new PagerFormType();
    }

    public function getForm()
    {
        $formBuilder = $this->formFactory->createBuilder($this->formType, $this->formModel, array('csrf_protection' => false));
        $this->form = $formBuilder->getForm();
        return $this->form;
    }

    public function setAllCount($allCount)
    {
        $this->allCount = $allCount;
    }

    public function getAllCount()
    {
        return $this->allCount;
    }

    //region フォームデータgetset
    public function getPageNo()
    {
        return $this->formModel->getPageNo();
    }
    public function setPageNo($pageNo)
    {
        $this->formModel->setPageNo($pageNo);
//        $this->form->setData($this->formModel);
    }
    public function getPageSize()
    {
        return $this->formModel->getPageSize();
    }
    public function setPageSize($pageSize)
    {
        $this->formModel->setPageSize($pageSize);
//        $this->form->setData($this->formModel);
    }
    //endregion

    private function buildPagerList()
    {
//        $this->formModel->get

    }

    public function createView()
    {
//        $this->buildPagerList();

        $pagerView = array();

        //
        $pageListView = new BasicPagerPageListView();
        $pageListView->setAllCount($this->allCount);
        $pageListView->setPageNo($this->getPageNo());
        $pageListView->setPageSize($this->getPageSize());
        $pageListView->createView();


/*
        $allDataCount = $this->getAllCount();
        $pageSize = $this->getPageSize();
        $totalNum = $allDataCount/$pageSize;
        if($allDataCount%$pageSize != 0){
            $totalNum++;
        }

        //create row
        $pagerListRows = array();
        $pageNo = $this->getPageNo();
        for($i=0; $i<$totalNum; $i++)
        {
            $row = new PagerPageListRowView();

            //表示
            $row->setLabel($i + 1);

            //ページ番号
            $row->setPageNo($i + 1);

            //選択状態
            if($pageNo == $i+1){
                $row->setSelect(true);
            }else{
                $row->setSelect(false);
            }

            $pagerListRows[$i] = $row;
        }
*/

        $pagerView['pager_list'] = $pageListView;
        return $pagerView;
    }
}


interface PagerPageListViewInterface{
    public function setAllCount($allCount);
    public function getAllCount();
    public function setPageNo($pageNo);
    public function getPageNo();
    public function setPageSize($pageSize);
    public function getPageSize();

    public function getRows();
    public function createView();
}

class BasicPagerPageListView implements PagerPageListViewInterface{

    private $allCount;
    private $pageNo;
    private $pageSize;
    private $rows;

    function __construct()
    {
        $this->rows = array();
    }

    /**
     * @param mixed $allCount
     */
    public function setAllCount($allCount)
    {
        $this->allCount = $allCount;
    }

    /**
     * @return mixed
     */
    public function getAllCount()
    {
        return $this->allCount;
    }

    /**
     * @param mixed $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    public function createView()
    {
        $totalNum = $this->allCount/$this->pageSize;
        if($this->allCount % $this->pageSize != 0){
            $totalNum++;
        }

        for($i=0; $i<$totalNum; $i++)
        {
            $row = new PagerPageListRowView();

            //表示
            $row->setLabel($i + 1);

            //ページ番号
            $row->setPageNo($i + 1);

            //選択状態
            if($this->pageNo == $i+1){
                $row->setSelect(true);
            }else{
                $row->setSelect(false);
            }

            $this->rows[$i] = $row;
        }

    }
}


interface PagerPageListRowViewInterface{
    public function getLabel();
    public function setLabel($label);
    public function getPageNo();
    public function setPageNo($pageNo);
    public function getSelect();
    public function setSelect($select);
}

class PagerPageListRowView implements PagerPageListRowViewInterface{

    private $label;
    private $pageNo;
    private $select;

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param mixed $select
     */
    public function setSelect($select)
    {
        $this->select = $select;
    }

    /**
     * @return mixed
     */
    public function getSelect()
    {
        return $this->select;
    }


}










interface PagerPageSizeViewInterface{

}

class BasicPagerPageSizeView implements PagerPageSizeViewInterface {

}