<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hirashimafumitake
 * Date: 2013/06/01
 * Time: 11:53
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib;


class SystemUser {
    private $SystemUserId;
    private $LoginName;
    private $MailAddress;
    private $DisplayName;
    private $DisplayNameKana;
    private $NickName;
    private $Active;
    private $SystemRoleId;
    private $CompanyId;
    private $DepartmentId;


    /**
     * @param mixed $Active
     */
    public function setActive($Active)
    {
        $this->Active = $Active;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param mixed $CompanyId
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
    }

    /**
     * @return mixed
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }

    /**
     * @param mixed $DepartmentId
     */
    public function setDepartmentId($DepartmentId)
    {
        $this->DepartmentId = $DepartmentId;
    }

    /**
     * @return mixed
     */
    public function getDepartmentId()
    {
        return $this->DepartmentId;
    }

    /**
     * @param mixed $DisplayName
     */
    public function setDisplayName($DisplayName)
    {
        $this->DisplayName = $DisplayName;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * @param mixed $DisplayNameKana
     */
    public function setDisplayNameKana($DisplayNameKana)
    {
        $this->DisplayNameKana = $DisplayNameKana;
    }

    /**
     * @return mixed
     */
    public function getDisplayNameKana()
    {
        return $this->DisplayNameKana;
    }

    /**
     * @param mixed $LoginName
     */
    public function setLoginName($LoginName)
    {
        $this->LoginName = $LoginName;
    }

    /**
     * @return mixed
     */
    public function getLoginName()
    {
        return $this->LoginName;
    }

    /**
     * @param mixed $MailAddress
     */
    public function setMailAddress($MailAddress)
    {
        $this->MailAddress = $MailAddress;
    }

    /**
     * @return mixed
     */
    public function getMailAddress()
    {
        return $this->MailAddress;
    }

    /**
     * @param mixed $NickName
     */
    public function setNickName($NickName)
    {
        $this->NickName = $NickName;
    }

    /**
     * @return mixed
     */
    public function getNickName()
    {
        return $this->NickName;
    }

    /**
     * @param mixed $SystemRoleId
     */
    public function setSystemRoleId($SystemRoleId)
    {
        $this->SystemRoleId = $SystemRoleId;
    }

    /**
     * @return mixed
     */
    public function getSystemRoleId()
    {
        return $this->SystemRoleId;
    }

    /**
     * @param mixed $SystemUserId
     */
    public function setSystemUserId($SystemUserId)
    {
        $this->SystemUserId = $SystemUserId;
    }

    /**
     * @return mixed
     */
    public function getSystemUserId()
    {
        return $this->SystemUserId;
    }



}