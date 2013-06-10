<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/07
 * Time: 16:06
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager\PageNo;


use Symfony\Component\Form\FormFactory;

class PageNoList {

    /**
     * @var \Symfony\Component\Form\FormFactory
     */
    private $formFactory;
    private $form;
    private $formCreatedFlug;
    private $formModel;
    private $formType;

    private $allCount;
    private $pageNo;
    private $pageSize;

    function __construct(FormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
        $this->formCreatedFlug = false;
        $this->formModel = new PageNoListFormModel();
        $this->formType = new PageNoListFormType();

        $this->pageNo = 1;
        $this->pageSize = 10;
    }

    /**
     * @return \Symfony\Component\Form\Form
     */
    public function getForm()
    {
        if(!$this->formCreatedFlug){
            $this->buildForm();
        }
        return $this->form;
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

    private function buildForm()
    {
        $formBuilder = $this->formFactory->createBuilder($this->formType, $this->formModel, array('csrf_protection' => false));
        $this->form = $formBuilder->getForm();

        $this->formCreatedFlug = true;
    }

    public function createView()
    {
        $pageNoListView = new PageNoListView();

        $totalNum = $this->allCount/$this->pageSize;
        if($this->allCount % $this->pageSize != 0){
            $totalNum++;
        }

        for($i=0; $i<$totalNum; $i++)
        {
            $row = new PageNoListRowView();

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

            $pageNoListView->addRows($row);
        }

        return $pageNoListView;
    }

}