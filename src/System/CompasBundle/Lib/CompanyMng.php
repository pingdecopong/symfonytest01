<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/04/10
 * Time: 10:28
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib;


use System\CompasBundle\Entity\TBSystemUser;
use Doctrine\ORM\EntityManager;

class CompanyMng {

    private $em;
    private $systemuser;

    function __construct(EntityManager $em, TBSystemUser $systemuser)
    {
        $this->em = $em;
        $this->systemuser = $systemuser;
    }

    function getCompanyList()
    {
        $queryBuilder = $this->em
            ->getRepository('SystemCompasBundle:TBCompany')
            ->createQueryBuilder('c')
            ->andWhere('c.ContractId = :ContractId')
            ->andWhere('c.DeleteFlug = :DeleteFlug')
            ->orderBy('c.Name', 'ASC')
            ->setParameter('ContractId', $this->systemuser->getContractId())
            ->setParameter('DeleteFlug', false);
        $entities = $queryBuilder->getQuery()->getResult();

        return $entities;
    }

    function getDepartmentList($companyId)
    {
        $queryBuilder = $this->em
            ->getRepository('SystemCompasBundle:TBDepartment')
            ->createQueryBuilder('d')
            ->andWhere('d.ContractId = :ContractId')
            ->andWhere('d.DeleteFlug = :DeleteFlug')
            ->andWhere('d.CompanyId = :CompanyId')
            ->orderBy('d.Name', 'ASC')
            ->setParameter('ContractId', $this->systemuser->getContractId())
            ->setParameter('DeleteFlug', false)
            ->setParameter('CompanyId', $companyId);
        $entities = $queryBuilder->getQuery()->getResult();

        return $entities;
    }




}