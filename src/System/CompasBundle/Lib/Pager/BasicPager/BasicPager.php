<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/07
 * Time: 16:02
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager;


use Symfony\Component\Form\FormFactory;
use System\CompasBundle\Lib\Pager\BasicPager\PageNo\PageNoList;
use System\CompasBundle\Lib\Pager\BasicPager\PageSize\PageSizeList;

class BasicPager {


    /**
     * @var \Symfony\Component\Form\FormFactory
     */
    private $formFactory;
    private $form;
    private $formCreatedFlug;
    private $allCount;

    private $pageNoList;
    private $pageSizeList;


    function __construct(FormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
        $this->formCreatedFlug = false;
        $this->pageNoList = new PageNoList($formFactory);
        $this->pageSizeList = new PageSizeList($formFactory);
    }

    /**
     * @return mixed
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

    private function buildForm()
    {
        //基礎フォーム生成
        $formBuilder = $this->formFactory->createBuilder('form', null, array('csrf_protection' => false));
        $this->form = $formBuilder->getForm();

        //ページ番号用フォーム追加
        $pageNoListForm = $this->pageNoList->getForm();
        $this->form->add($pageNoListForm);

        //ページサイズ用フォーム追加
        $pageSizeListForm = $this->pageSizeList->getForm();
        $this->form->add($pageSizeListForm);

        $this->formCreatedFlug = true;
    }

    public function createView()
    {
        $basicPagerView = new BasicPagerView();

        //ページ番号用View作成
        $pageNoListView = $this->pageNoList->createView();

        //ページサイズ用View作成
        $pageSizeListView = $this->pageSizeList->createView();

        //View追加
        $basicPagerView->setPageNo($pageNoListView);
        $basicPagerView->setPageSise($pageSizeListView);

        return $basicPagerView;
    }



}