<?php
/**
 * ユーザー検索フォーム用　モデル
 */
namespace System\CompasBundle\Form\SystemUser;

use Symfony\Component\Validator\Constraints as Assert;

class SystemUserSearchFormModel {

    /**
     * @var string
     * @Assert\Length(max="10")
     */
    private $name;

    private $companyId;
    private $active;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
    }

    public function getCompanyId()
    {
        return $this->companyId;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getActive()
    {
        return $this->active;
    }

}