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
use System\CompasBundle\Entity\TBSystemUser;

class SystemUserFormType3  extends AbstractType
{

    private $em;
    private $systemUser;

    function __construct(EntityManager $em, TBSystemUser $systemUser)
    {
        $this->em = $em;
        $this->systemUser = $systemUser;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $em = $this->em;
        $systemUser = $this->systemUser;

        $builder
            ->add('id', 'hidden', array(
                'label' => 'id',
            ))
            ->add('displayName', 'text', array(
                'label' => 'ユーザ名',
                'required' => true,
                'max_length' => 50,
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
            ->add('company', 'entity', array(
                'label' => '会社',
                'required' => false,
                'empty_value' => '--会社なし--',
                'class' => 'SystemCompasBundle:TBCompany',
                'property' => 'Name',

                'query_builder' => function(EntityRepository $er) use($systemUser) {
                    return $er->createQueryBuilder('c')
                        ->andWhere('c.ContractId = :ContractId')
                        ->andWhere('c.DeleteFlug = :DeleteFlug')
                        ->orderBy('c.Name', 'ASC')
                        ->setParameter('ContractId', $systemUser->getContractId())
                        ->setParameter('DeleteFlug', false);
                },

                'attr' => array(
                    'onChange' => 'javascript:changeCompany();',
                ),
            ))

            ->add('department', 'choice', array(
                'label' => '部署',
                'choices' => array(
                    '' => '--部署なし--',
                ),
            ))

            ->add('mailAddress', 'text', array(
                'label' => 'メールアドレス',
                'required' => true,
                'max_length' => 100,
            ))
            ->add('systemRoleId', 'text', array(
                'label' => '権限番号',
                'required' => true,
            ))
            ->add('buttonAction', 'hidden', array(
            ))
            ->addEventListener(FormEvents::PRE_BIND, function(FormEvent $event) use($builder, $em, $systemUser){
                $form = $event->getForm();
                $data = $event->getData();

                //company DBからデータを先読みする
                $companyBuilder = $builder->get("company");
                $companyChoiceListOption = $companyBuilder->getOption("choice_list");
                $companyChoiceListOption->getValues();

                if(!empty($data['company']))
                {
                    $company = $data['company'];

                    //
                    $builder->add('department', 'entity', array(
                        'label' => '部署',
                        'required' => false,
                        'empty_value' => '--部署なし--',
                        'class' => 'SystemCompasBundle:TBDepartment',
                        'property' => 'Name',
                        'query_builder' => function(EntityRepository $er) use($systemUser, $company) {
                            return $er->createQueryBuilder('d')
                                ->andWhere('d.ContractId = :ContractId')
                                ->andWhere('d.DeleteFlug = :DeleteFlug')
                                ->andWhere('d.CompanyId = :CompanyId')
                                ->orderBy('d.Name', 'ASC')
                                ->setParameter('ContractId', $systemUser->getContractId())
                                ->setParameter('DeleteFlug', false)
                                ->setParameter('CompanyId', $company);
                        },
                    ));

                    //department DBからデータを先読みする
                    $departmentBuilder = $builder->get("department");
                    $departmentChoiceListOption = $departmentBuilder->getOption("choice_list");
                    $departmentChoiceListOption->getValues();

                    //すでに作成してあるFormへ作成したdepartmentフォームを追加する
                    $departmentForm = $departmentBuilder->getForm();
                    $form->add($departmentForm);

                }

            })
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