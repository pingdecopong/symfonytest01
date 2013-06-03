<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hirashimafumitake
 * Date: 2013/06/03
 * Time: 0:02
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\PagerList;


use Doctrine\ORM\EntityManager;

class BasicPagerList {

    private $form;
    private $formFactory;
    private $formModel;
    private $formType;

    //
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    function __construct($formFactory, EntityManager $em)
    {
        $this->formFactory = $formFactory;
        $this->em = $em;
    }

    public function getForm()
    {
        $formModel = new SystemUserSearchFormModel2();
        $formType = new SystemUserSearchFormType2();

        $formBuilder = $this->formFactory->createBuilder($formType, $formModel);
        $this->form = $formBuilder->getForm();

        return $this->form;
    }

    public function setListData($data)
    {
//        aa
    }


    private function buildQueryCount()
    {
/*
        $queryBuilder = $this->em
            ->getRepository('SystemCompasBundle:TBSystemUser')
            ->createQueryBuilder('u')
            ->leftJoin('u.tbcompany', 'c')
            ->leftJoin('u.tbdepartment', 'd')
            ->andWhere('u.ContractId = :ContractId')
            ->andWhere('u.DeleteFlug = :DeleteFlug')
            ->select(array('u', 'c', 'd'))
            ->setParameter('ContractId', 1)
            ->setParameter('DeleteFlug', false);
*/
    }

    private function buildQuery()
    {
/*
        $queryBuilder = $this->em
            ->getRepository('SystemCompasBundle:TBSystemUser')
            ->createQueryBuilder('u')
            ->leftJoin('u.tbcompany', 'c')
            ->leftJoin('u.tbdepartment', 'd')
            ->andWhere('u.ContractId = :ContractId')
            ->andWhere('u.DeleteFlug = :DeleteFlug')
            ->select(array('u', 'c', 'd'))
            ->setParameter('ContractId', 1)
            ->setParameter('DeleteFlug', false);


*/
    }

    private function buildPagerList()
    {

    }

    public function createView()
    {
        $this->buildPagerList();
        return array();
    }
}