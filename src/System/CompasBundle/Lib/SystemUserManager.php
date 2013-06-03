<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hirashimafumitake
 * Date: 2013/06/02
 * Time: 18:42
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib;


use Doctrine\ORM\EntityManager;
use System\CompasBundle\Entity\TBSystemUser;
use System\CompasBundle\Form\SystemUser\SystemUserFormModel;

class SystemUserManager {

    private $em;
    private $systemUser;

    function __construct(EntityManager $em, TBSystemUser $systemUser)
    {
        $this->em = $em;
        $this->systemUser = $systemUser;
    }

    public function createSystemUser(SystemUserFormModel $systemUserFormModel)
    {
        $systemUser = new TBSystemUser();
        $systemUser->setMailAddress($systemUserFormModel->getMailAddress());
        $systemUser->setDisplayName($systemUserFormModel->getDisplayName());
        $systemUser->setDisplayNameKana($systemUserFormModel->getDisplayNameKana());
        $systemUser->setNickName($systemUserFormModel->getNickName());
        $systemUser->setDeleteFlug(false);

        $systemUser->setTbcontract($this->systemUser->getTbcontract());
        $systemUser->setTbcompany($systemUserFormModel->getCompany());
        $systemUser->setTbdepartment($systemUserFormModel->getDepartment());
        $systemUser->setSystemRoleId($systemUserFormModel->getSystemRoleId());

        $this->em->persist($systemUser);
        $this->em->flush();

        return $systemUser;
    }

}