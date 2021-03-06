<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hirashimafumitake
 * Date: 2013/06/03
 * Time: 0:02
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager;


use Symfony\Component\Form\FormFactory;

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

//        $pageListView = new BasicPagerPageListView();
    }

    public function buildForm()
    {
        $formBuilder = $this->formFactory->createBuilder($this->formType, $this->formModel, array('csrf_protection' => false));
        $this->form = $formBuilder->getForm();
    }

    public function getForm()
    {
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

        //
        $pageSizeView = new BasicPagerPageSizeView($this->formFactory);
        $pageSizeView->setSizeList(array(
            '10' => '10',
            '20' => '20',
            '50' => '50',
        ));
        $pageSizeView->createView();


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
        $pagerView['pager_size'] = $pageSizeView;
        return $pagerView;
    }
}


class BasicPagerPageList{

    private $allCount;
    private $pageNo;
    private $pageSize;

    //region geter setter
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
    //endregion

    public function createView()
    {
        $view = new BasicPagerPageListView();
        $view->setAllCount($this->allCount);
        $view->setPageNo($this->pageNo);
        $view->setPageSize($this->pageSize);

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

class BasicPagerPageListView{

    private $allCount;
    private $pageNo;
    private $pageSize;
    private $rows;

    function __construct()
    {
        $this->rows = array();
    }

    //region geter setter
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
    //endregion


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










interface PagerPageSizeViewInterface
{
    public function setSizeList($sizeList);
    public function getSizeList();

    public function createView();
}

class BasicPagerPageSizeView implements PagerPageSizeViewInterface
{
    public $sizeList;
    public $formFactory;
    public $formView;

    /**
     * @param mixed $sizeList
     */
    public function setSizeList($sizeList)
    {
        $this->sizeList = $sizeList;
    }

    /**
     * @return mixed
     */
    public function getSizeList()
    {
        return $this->sizeList;
    }

    /**
     * @return mixed
     */
    public function getFormView()
    {
        return $this->formView;
    }

    function __construct(FormFactory $formFactory)
    {
        $this->sizeList = array();
        $this->formFactory = $formFactory;
    }

    public function createView()
    {
        $formBuilder = $this->formFactory->createBuilder();
        $form = $formBuilder->add('pagesize', 'choice', array(
            'choices' => $this->sizeList,
            'required' => true,
            'attr' => array(
                'onChange' => 'javascript:changePageSize();',
            ),
        ))
            ->getForm();

        $formView = $form->createView();
        $this->formView = $formView->children['pagesize'];
        $this->formView->vars['full_name'] = '';
    }
}