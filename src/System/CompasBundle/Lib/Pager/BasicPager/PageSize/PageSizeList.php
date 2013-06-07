<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/07
 * Time: 17:21
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager\PageSize;


use Symfony\Component\Form\FormFactory;

class PageSizeList {

    /**
     * @var \Symfony\Component\Form\FormFactory
     */
    private $formFactory;
    private $form;
    private $formCreatedFlug;
    private $formModel;
    private $formType;

    function __construct(FormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
        $this->formCreatedFlug = false;
        $this->formModel = new PageSizeListFormModel();
        $this->formType = new PageSizeListFormType();
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

    private function buildForm()
    {
        $formBuilder = $this->formFactory->createBuilder($this->formType, $this->formModel, array('csrf_protection' => false));
        $this->form = $formBuilder->getForm();

        $this->formCreatedFlug = true;
    }

    public function createView()
    {
        $pageSizeListView = new PageSizeListView();
        return $pageSizeListView;
    }

}