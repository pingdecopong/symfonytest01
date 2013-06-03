<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/04/10
 * Time: 10:25
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib;


use System\CompasBundle\Entity\TBSystemUser;
use Doctrine\ORM\EntityManager;

class SystemUserMng {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * @var \System\CompasBundle\Entity\TBSystemUser
     */
    private $systemUser;

    function __construct($em)
    {
        $this->em = $em;
    }

    function getLoginUserInfo($id)
    {
        $queryBuilder = $this->em
            ->getRepository('SystemCompasBundle:TBSystemUser')
            ->createQueryBuilder('u')
            ->leftJoin('u.tbcompany', 'c')
            ->leftJoin('u.tbdepartment', 'd')
            ->select(array('u', 'c', 'd'))
            ->andWhere('u.ContractId = :ContractId')
            ->andWhere('u.DeleteFlug = :DeleteFlug')
            ->andWhere('u.id = :id')
            ->setParameter('ContractId', 1)
            ->setParameter('DeleteFlug', false)
            ->setParameter('id', $id);

        $entity = $queryBuilder->getQuery()->getOneOrNullResult();
        return $entity;
    }

    function createUser(SystemUser $user)
    {
        $systemUser = new TBSystemUser();
        $systemUser->setMailAddress($user->getMailAddress());
        $systemUser->setDisplayName($user->getDisplayName());
        $systemUser->setDisplayNameKana($user->getDisplayNameKana());
        $systemUser->setNickName($user->getNickName());
        $systemUser->setCompanyId($user->getCompanyId());
        $systemUser->setDepartmentId($user->getDepartmentId());
        $systemUser->setSystemRoleId($user->getSystemRoleId());


        $tbContract = $this->em->getRepository("SystemCompasBundle:TBContract")->find($systemUser->getContractId());
        $systemUser->setTbcontract($tbContract);

        //

        $systemUser->setDeleteFlug(false);

        $this->em->persist($systemUser);
        $this->em->flush();

        return $systemUser;
    }

}