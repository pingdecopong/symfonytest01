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

    function __construct(FormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
        $this->formCreatedFlug = false;
        $this->formModel = new PageNoListFormModel();
        $this->formType = new PageNoListFormType();
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
        $pageNoListView = new PageNoListView();

        return $pageNoListView;
    }

}