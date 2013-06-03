<?php
/**
 * ユーザー登録フォーム
 */

namespace System\CompasBundle\Form\SystemUser;

use System\CompasBundle\Entity\TBCompany;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SystemUserFormType  extends AbstractType
{
    private $companyData;
    private $departmentData;

    public function setCompanyData($companyData)
    {
        $this->companyData = $companyData;
    }

    public function setCompanyDataFromTBCompany($companyData)
    {
        $companyChoiceView = array('' => '--------');
        foreach($companyData as $value){
            /* @var $value \System\CompasBundle\Entity\TBCompany */
            $companyChoiceView[$value->getId()] = $value->getName();
        }

        $this->companyData = $companyChoiceView;
    }

    public function getCompanyData()
    {
        return $this->companyData;
    }

    public function setDepartmentData($departmentData)
    {
        $this->departmentData = $departmentData;
    }

    public function setDepartmentDataFromTBDepartment($departmentData)
    {
        $departmentChoiceView = array('' => '--------');
        foreach($departmentData as $value){
            /* @var $value \System\CompasBundle\Entity\TBDepartment */
            $departmentChoiceView[$value->getId()] = $value->getName();
        }

        $this->departmentData = $departmentChoiceView;
    }

    public function getDepartmentData()
    {
        return $this->departmentData;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('id', 'hidden', array(
                'label' => 'id',
            ))
            ->add('displayName', 'text', array(
                'label' => 'ユーザ名',
                'required' => true,
                'max_length' => 50,
//                    'abc' => 'aaaaaa',
            ))
            ->add('displayNameKana', 'text', array(
                'label' => 'ユーザ名（カナ）',
                'required' => true,
                'max_length' => 50,
            ))
            ->add('nickName', 'text', array(
                'label' => '略称',
                'required' => true,
                'max_length' => 5,
            ))
            ->add('company', 'choice', array(
                'label' => '会社',
                'required' => false,
                'choices' => $this->companyData,
                'attr' => array(
                    'onChange' => 'javascript:changeCompany();',
                ),
            ))
            ->add('department', 'choice', array(
                'label' => '部署',
                'required' => false,
                'choices' => $this->departmentData,
            ))
            ->add('mailAddress', 'text', array(
                'label' => 'メールアドレス',
                'required' => true,
                'max_length' => 100,
            ))
            ->add('systemRoleId', 'text', array(
                'label' => '権限番号',
                'required' => true,
//                    'freeze' => true,
            ))
            ->add('buttonAction', 'hidden', array(
            ))
        ;

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'freeze' => false,
            'data_class' => 'System\CompasBundle\Form\SystemUser\SystemUserFormModel',
        ));
    }

    public function getName()
    {
        return 'systemuser';
    }
}