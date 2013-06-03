<?php

namespace System\CompasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use System\CompasBundle\Form\SystemUser\SystemUserFormModel;
use System\CompasBundle\Form\SystemUser\SystemUserFormType;
use System\CompasBundle\Form\SystemUser\SystemUserFormType2;
use System\CompasBundle\Form\SystemUser\SystemUserFormType3;
use System\CompasBundle\Form\SystemUser\SystemUserSearchFormModel;
use System\CompasBundle\Form\SystemUser\SystemUserSearchFormModel2;
use System\CompasBundle\Form\SystemUser\SystemUserSearchFormType;
use System\CompasBundle\Form\SystemUser\SystemUserSearchFormType2;
use System\CompasBundle\Form\Type\ListFormModel;
use System\CompasBundle\Form\Type\ListFormType;
use System\CompasBundle\Lib\CompanyMng;
use System\CompasBundle\Lib\Pager\BasicPager;
use System\CompasBundle\Lib\PagerList\BasicPagerList;
use System\CompasBundle\Lib\SystemUser;
use System\CompasBundle\Lib\SystemUserManager;
use System\CompasBundle\Lib\SystemUserMng;

/**
 * @Route("/systemuser")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/new", name="systemuser_new")
     * @Template()
     */
    public function newAction(Request $request)
    {
        $formModel = new SystemUserFormModel();
        $formType = new SystemUserFormType();

        //ログインユーザー情報取得
        $em = $this->getDoctrine()->getManager();
        $systemUserMng = new SystemUserMng($em);
        $loginUser = $systemUserMng->getLoginUserInfo(1);

        //ドロップダウンリスト用会社リスト取得
        $companyMng = new CompanyMng($em, $loginUser);
        $companyList = $companyMng->getCompanyList();
        $formType->setCompanyDataFromTBCompany($companyList);

        $form = $this->createForm($formType, $formModel, array('validation_groups' => array('nonValidation')));

        if($request->isMethod('POST'))
        {
            $form->bind($request);
            $a = $form->getConfig();
            $b = $form->getExtraData();

            if($formModel->getCompany() != "")
            {
                $departmentList = $companyMng->getDepartmentList($formModel->getCompany());
                $formType->setDepartmentDataFromTBDepartment($departmentList);
                $form = $this->createForm($formType, $formModel, array('validation_groups' => array('nonValidation')));
                $form->bind($request);

                //さらにネストがある場合はここに書く

            }else
            {
                $formModel->setDepartment(null);
                $form = $this->createForm($formType, $formModel, array('validation_groups' => array('nonValidation')));
                $form->bind($request);
            }

            //ボタン押下
            $buttonAction = $formModel->getButtonAction();
            if($buttonAction == "confirm" || $buttonAction == "submit")
            {

                $form = $this->createForm($formType, $formModel);
                $form->bind($request);
                if($form->isValid())
                {

                    if($buttonAction == "confirm")
                    {

                        //確認ボタン押下
                        $confirmForm = $this->createForm($formType, $formModel, array('freeze' => true));
                        return array(
                            'mode' => "confirm",
                            'entity' => $formModel,
                            'form' => $confirmForm->createView(),
                        );

                    }else if($buttonAction == "submit")
                    {

                        //登録ボタン押下
                        $systemUser = new SystemUser();
                        $systemUser->setMailAddress($formModel->getMailAddress());
                        $systemUser->setDisplayName($formModel->getDisplayName());
                        $systemUser->setDisplayNameKana($formModel->getDisplayNameKana());
                        $systemUser->setNickName($formModel->getNickName());
                        $systemUser->setSystemRoleId($formModel->getSystemRoleId());
                        $systemUser->setCompanyId($formModel->getCompany());
                        $systemUser->setDepartmentId($formModel->getDepartment());

                        $systemUserMng->createUser($systemUser);
                        return $this->redirect($this->generateUrl('systemuser_new'));

                    }

                }

            }

        }

        return array(
            'mode' => "input",
            'entity' => $formModel,
            'form' => $form->createView(),
        );

    }

    /**
     * @Route("/new2", name="systemuser_new2")
     * @Template()
     */
    public function new2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $formModel = new SystemUserFormModel();
        $formType = new SystemUserFormType2($em);

//        $form = $this->createForm($formType, $formModel);
        /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
        $builder = $this->get('form.factory')->createBuilder($formType, $formModel);
        $form = $builder->getForm();

        if($request->isMethod('POST'))
        {
            $form->bind($request);

            //ボタン押下
            $buttonAction = $formModel->getButtonAction();
            if($buttonAction == "confirm" || $buttonAction == "submit")
            {
                if($form->isValid())
                {
                    if($buttonAction == "confirm")
                    {
                        $builder->setAttribute('freeze', true);
                        $confirmForm = $builder->getForm();
//                        $confirmForm->bind($request);

                        /* @var $aaa \Symfony\Component\Form\FormBuilderInterface */
//                        $aaa = $form->getConfig();
//                        $aaa->setAttribute("freeze", true);

                        return array(
                            'mode' => "confirm",
                            'entity' => $formModel,
                            'form' => $confirmForm->createView(),
                        );

                    }else if($buttonAction == "submit")
                    {

                    }
                }
            }

        }


        return array(
            'mode' => "input",
            'validate' => false,
            'entity' => $formModel,
            'form' => $form->createView(),
        );

    }

    /**
     * @Route("/new3", name="systemuser_new3")
     * @Template()
     */
    public function new3Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //ユーザー情報取得
        $systemUser = $em->getRepository('SystemCompasBundle:TBSystemUser')->find(1);

        $formModel = new SystemUserFormModel();
        $formType = new SystemUserFormType3($em, $systemUser);

        /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
        $builder = $this->get('form.factory')->createBuilder($formType, $formModel);
        $form = $builder->getForm();

        if($request->isMethod('POST'))
        {
            $form->bind($request);

            //ボタン押下
            $buttonAction = $formModel->getButtonAction();
            if($buttonAction == "confirm" || $buttonAction == "submit")
            {
                if($form->isValid())
                {
                    if($buttonAction == "confirm")
                    {
                        //確認画面
                        $builder->setAttribute('freeze', true);
                        $confirmForm = $builder->getForm();

                        return array(
                            'mode' => "confirm",
                            'entity' => $formModel,
                            'form' => $confirmForm->createView(),
                        );

                    }else if($buttonAction == "submit")
                    {
                        //登録実行
                        $systemUserManager = new SystemUserManager($em, $systemUser);

                        $systemUserManager->createSystemUser($formModel);
                        return $this->redirect($this->generateUrl('systemuser_new3'));
                    }
                }
            }else
            {
                $builder->setAttribute('novalidation', true);
                $form = $builder->getForm();
            }

        }


        return array(
            'mode' => "input",
            'validate' => false,
            'entity' => $formModel,
            'form' => $form->createView(),
        );

    }

    /**
     * リスト
     *
     * @Route("/list2", name="systemuser_list2")
     * @Template()
     */
    public function list2Action(Request $request)
    {
        $formFactory = $this->get('form.factory');
        $pagerList = new BasicPager($formFactory);

        $data = array(
            array(
                'id' => 1,
                'name' => 'yamada tarou'
            ),
            array(
                'id' => 2,
                'name' => 'tanaka ichirou1'
            ),
            array(
                'id' => 3,
                'name' => 'tanaka ichirou2'
            ),
            array(
                'id' => 4,
                'name' => 'tanaka ichirou3'
            ),
            array(
                'id' => 5,
                'name' => 'tanaka ichirou4'
            ),
            array(
                'id' => 6,
                'name' => 'tanaka ichirou5'
            ),
        );

        $pagerList->setAllCount(count($data));

        $pagerForm = $pagerList->getForm();


        return array(
            'form' => $pagerForm->createView(),
            'pager' => $pagerList->createView(),
        );
    }

    /**
     * リスト
     *
     * @Route("/list", name="systemuser_list")
     * @Template()
     */
    public function listAction(Request $request)
    {
        $fromSearchFlug = $this->getRequest()->get('fromsearch');

        //検索フォーム生成＆バインド
        $allForm = $this->createFormBuilder(null, array('csrf_protection' => false))
            ->add('search', new SystemUserSearchFormType())
            ->add('list', new ListFormType())
            ->getForm();
        $allForm->bind($request);

        //バリデーション
        $allFormData = array();
        if($allForm->isValid()){
            $allFormData = $allForm->getData();
        }else{
            //defaultデータ設定
            $searchFormModel = new SystemUserSearchFormModel();
            $allFormData['search'] = $searchFormModel;
            $allFormData['list'] = new ListFormModel();
        }

        $queryBuilder = $this->getDoctrine()
            ->getRepository('SystemCompasBundle:TBSystemUser')
            ->createQueryBuilder('u')
            ->leftJoin('u.tbcompany', 'c')
            ->leftJoin('u.tbdepartment', 'd')
            ->select(array('u', 'c', 'd'));

        //検索 基本
        $queryBuilder = $queryBuilder->andWhere('u.ContractId = :ContractId')
            ->andWhere('u.DeleteFlug = :DeleteFlug')
            ->setParameter('ContractId', 1)
            ->setParameter('DeleteFlug', false);
        //検索　表示名
        $searchParamDisplayName = $allFormData['search']->getName();
        if($searchParamDisplayName != null){
            $queryBuilder = $queryBuilder->andWhere('u.DisplayName LIKE :DisplayName')
                ->setParameter('DisplayName', '%'.$searchParamDisplayName.'%');
        }
        //検索　会社名
        $searchParamCompanyId = $allFormData['search']->getCompanyId();
        if($searchParamCompanyId != null){
            $queryBuilder = $queryBuilder->andWhere('u.CompanyId = :CompanyId')
                ->setParameter('CompanyId', $searchParamCompanyId);
        }
        //検索　有効状態
        $searchParamActive = $allFormData['search']->getActive();
        if($searchParamActive !== null){
            $queryBuilder = $queryBuilder->andWhere('u.Active = :Active')
                ->setParameter('Active', $searchParamActive);
        }

        //ソート
        $sortParamSort = $allFormData['list']->getSort();
        $sortParamType = $allFormData['list']->getSortType();
        if($sortParamSort != null && $sortParamType != null){

            switch($sortParamSort){
                case 'id':
                    if($sortParamType == 'asc'){
                        $queryBuilder = $queryBuilder->orderBy('u.id', 'ASC');
                    }else if($sortParamType == 'desc'){
                        $queryBuilder = $queryBuilder->orderBy('u.id', 'DESC');
                    }
                    break;
                case 'DisplayName':
                    if($sortParamType == 'asc'){
                        $queryBuilder = $queryBuilder->orderBy('u.DisplayName', 'ASC');
                    }else if($sortParamType == 'desc'){
                        $queryBuilder = $queryBuilder->orderBy('u.DisplayName', 'DESC');
                    }
                    break;
                case 'CompanyName':
                    if($sortParamType == 'asc'){
                        $queryBuilder = $queryBuilder->orderBy('c.Name', 'ASC');
                    }else if($sortParamType == 'desc'){
                        $queryBuilder = $queryBuilder->orderBy('c.Name', 'DESC');
                    }
                    break;
                case 'CreatedDatetime':
                    if($sortParamType == 'asc'){
                        $queryBuilder = $queryBuilder->orderBy('u.CreatedDatetime', 'ASC');
                    }else if($sortParamType == 'desc'){
                        $queryBuilder = $queryBuilder->orderBy('u.CreatedDatetime', 'DESC');
                    }
                    break;
                case 'SystemRoleId':
                    if($sortParamType == 'asc'){
                        $queryBuilder = $queryBuilder->orderBy('u.SystemRoleId', 'ASC');
                    }else if($sortParamType == 'desc'){
                        $queryBuilder = $queryBuilder->orderBy('u.SystemRoleId', 'DESC');
                    }
                    break;
                case 'Active':
                    if($sortParamType == 'asc'){
                        $queryBuilder = $queryBuilder->orderBy('u.Active', 'ASC');
                    }else if($sortParamType == 'desc'){
                        $queryBuilder = $queryBuilder->orderBy('u.Active', 'DESC');
                    }
                    break;
            }

        }else{
            //デフォルトソート設定
            $allFormData['list']->setSort('id');
            $allFormData['list']->setSortType('asc');
        }

        //全件数取得
        $queryBuilderCount = clone $queryBuilder;
        $queryBuilderCount = $queryBuilderCount->select('count(u.id)');
        $queryCount = $queryBuilderCount->getQuery();
        $allCount = $queryCount->getSingleScalarResult();

        //ページング
        $pagingParamNo = $allFormData['list']->getPageNo();
        $pagingParamSize = $allFormData['list']->getPageSize();
        if($pagingParamNo == null || $pagingParamSize == null || !in_array($pagingParamSize, array(3, 5, 10))){
            //デフォルト設定
            $pagingParamNo = 0;
            $pagingParamSize = 10;
            $allFormData['list']->setPageNo($pagingParamNo);
            $allFormData['list']->setPageSize($pagingParamSize);
        }
        $queryBuilder = $queryBuilder->setFirstResult($pagingParamNo * $pagingParamSize)
            ->setMaxResults($pagingParamSize);

        //クエリー実行
        $entities = $queryBuilder->getQuery()->getResult();

        //画面組み込み用フォーム生成
        $form = $this->createFormBuilder(null, array('csrf_protection' => false))
            ->add('search', new SystemUserSearchFormType())
            ->add('list', new ListFormType())
            ->getForm();
        $form->setData($allFormData);

        //リストページング用Viewデータ生成
        $listPagingView = array();
        $listPagingDataArray = $this->getFormDataArray($form);
        $pagingCount = (int)($allCount/$pagingParamSize);
        if($allCount%$pagingParamSize != 0){
            $pagingCount++;
        }
        for($i=0; $i < $pagingCount; $i++){

            $listPagingView[$i] = array(
                'label' => '',
                'query' => '',
                'is_select' => false,
            );
            $listPagingView[$i]['label'] = $i+1;

            if($i == $pagingParamNo){
                $listPagingView[$i]['is_select'] = true;
            }

            $listPagingDataArray['form']['list']['page_no'] = $i;
            $listPagingView[$i]['query'] = ($this->generateUrl('systemuser_list')).'?'.http_build_query($listPagingDataArray);
        }

        //リストページングサイズ用Viewデータ生成
        $listPagingSizeView = array();
        $listPagingSizeArray = $this->getFormDataArray($form);
        $listPagingSizeDataMaster = array(3, 5, 10);
        foreach($listPagingSizeDataMaster as $key => $value)
        {
            $listPagingSizeView[$key] = array(
                'label' => '',
                'query' => '',
                'is_select' => false,
            );

            $listPagingSizeView[$key]['label'] = $value;

            if($value == $pagingParamSize){
                $listPagingSizeView[$key]['is_select'] = true;
            }

            $listPagingSizeArray['form']['list']['page_no'] = 0;
            $listPagingSizeArray['form']['list']['page_size'] = $value;
            $listPagingSizeView[$key]['query'] = ($this->generateUrl('systemuser_list')).'?'.http_build_query($listPagingSizeArray);
        }

        //リストソート用Viewデータ生成
        $listSortView = array();
        $listSortDataArray = $this->getFormDataArray($form);
        $listSortDataMaster = array(
            'id' => array(
                'label' => 'id',
                'sortflug' => true,
            ),
            'DisplayName' => array(
                'label' => 'ユーザ名',
                'sortflug' => true,
            ),
            'CompanyName' => array(
                'label' => '会社',
                'sortflug' => true,
            ),
            'DepartmentName' => array(
                'label' => '部署',
                'sortflug' => false,
            ),
            'CreatedDatetime' => array(
                'label' => '登録日',
                'sortflug' => true,
            ),
            'SystemRoleId' => array(
                'label' => '権限',
                'sortflug' => true,
            ),
            'Active' => array(
                'label' => '状態',
                'sortflug' => true,
            ),
        );
        foreach($listSortDataMaster as $key => $value)
        {
            $listSortDataArray['form']['list']['page_no'] = 0;
            $listSortDataArray['form']['list']['sort'] = $key;

            $listSortView[$key] = array(
                'label' => '',
                'sort_type' => '',
                'query' => '',
            );
            $listSortView[$key]['label'] = $value['label'];
            $listSortView[$key]['sortflug'] = $value['sortflug'];

            if($allFormData['list']->getSort() == $key){
                if($allFormData['list']->getSortType() == 'asc'){
                    $listSortView[$key]['sort_type'] = 'asc';
                    $listSortDataArray['form']['list']['sort_type'] = 'desc';
                }else if($allFormData['list']->getSortType() == 'desc'){
                    $listSortView[$key]['sort_type'] = 'desc';
                    $listSortDataArray['form']['list']['sort_type'] = 'asc';
                }
            }else{
                $listSortView[$key]['sort_type'] = null;
                $listSortDataArray['form']['list']['sort_type'] = 'asc';
            }
            $listSortView[$key]['query'] = ($this->generateUrl('systemuser_list')).'?'.http_build_query($listSortDataArray);
        }

        //検索からforwardの場合
        $formView = $form;
        if($fromSearchFlug == 'true'){
            $formView = $allForm;
        }

        return array(
            'entities' => $entities,
            'list' => array(
                'paging' => $listPagingView,
                'paging_size' => $listPagingSizeView,
                'sort' => $listSortView,
            ),
            'ret' => base64_encode(http_build_query($this->getFormDataArray($form))),
            'search_form' => $formView->createView(),
        );
    }

    /**
     * リスト検索
     *
     * @Route("/listsearch", name="systemuser_list_search")
     */
    public function listSearchAction(Request $request)
    {

    }

    public function getFormDataArray(Form $form)
    {
        $ret = array();
        $name = $form->getName();

        if($form->count() == 0){
            $ret[$name] = $form->getData();
        }else{
            $temp = array();
            foreach($form as $value)
            {
                $dataArray = $this->getFormDataArray($value);
                $temp = array_merge($temp, $dataArray);
            }
            $ret[$name] = $temp;
        }

        return $ret;
    }

    /**
     * 詳細表示
     * @param $id
     * @return array
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @Route("/show/{id}", name="systemuser_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {

    }

    /**
     * 編集
     * @param $id
     * @return array
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @Route("/edit/{id}", name="systemuser_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {

    }


}
