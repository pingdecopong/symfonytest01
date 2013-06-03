<?php
/**
 * ユーザー登録フォーム用モデル
 */
namespace System\CompasBundle\Form\SystemUser;

use Symfony\Component\Validator\Constraints as Assert;

class SystemUserFormModel {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(max="40")
     */
    private $displayName;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(max="40")
     */
    private $displayNameKana;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(max="10")
     */
    private $nickName;

    /**
     * @var integer 会社ＩＤ
     */
    private $company;

    /**
     * @var integer 部署ＩＤ
     */
    private $department;

    /**
     * @var string メールアドレス
     *
     * @Assert\NotBlank()
     * @Assert\Length(max="100")
     */
    private $mailAddress;

    /**
     * @var int 権限番号
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric")
     */
    private $systemRoleId;

    private $buttonAction;

    /**
     * @param mixed $buttonAction
     */
    public function setButtonAction($buttonAction)
    {
        $this->buttonAction = $buttonAction;
    }

    /**
     * @return mixed
     */
    public function getButtonAction()
    {
        return $this->buttonAction;
    }


    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayNameKana
     */
    public function setDisplayNameKana($displayNameKana)
    {
        $this->displayNameKana = $displayNameKana;
    }

    /**
     * @return string
     */
    public function getDisplayNameKana()
    {
        return $this->displayNameKana;
    }

    /**
     * @param string $nickName
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;
    }

    /**
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param string $mailAddress
     */
    public function setMailAddress($mailAddress)
    {
        $this->mailAddress = $mailAddress;
    }

    /**
     * @return string
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * @param int $systemRoleId
     */
    public function setSystemRoleId($systemRoleId)
    {
        $this->systemRoleId = $systemRoleId;
    }

    /**
     * @return int
     */
    public function getSystemRoleId()
    {
        return $this->systemRoleId;
    }

}