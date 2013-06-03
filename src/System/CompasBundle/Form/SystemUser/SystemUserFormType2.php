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

class SystemUserFormType2  extends AbstractType
{

    private $em;

    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $factory = $builder->getFormFactory();
        $em = $this->em;

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
            ->add('company', 'entity', array(
                'label' => '会社',
                'required' => false,
                'empty_value' => '--会社なし--',
                'class' => 'SystemCompasBundle:TBCompany',
                'property' => 'Name',

                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->andWhere('c.ContractId = :ContractId')
                        ->andWhere('c.DeleteFlug = :DeleteFlug')
                        ->orderBy('c.Name', 'ASC')
                        ->setParameter('ContractId', 1)
                        ->setParameter('DeleteFlug', false);
                },

                'attr' => array(
                    'onChange' => 'javascript:changeCompany();',
                ),
            ))
/*
            ->add('department', 'entity', array(
                'label' => '部署',
                'required' => false,
                'empty_value' => '--部署なし--',
                'class' => 'SystemCompasBundle:TBDepartment',
                'property' => 'Name',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('d')
                        ->andWhere('d.ContractId = :ContractId')
                        ->andWhere('d.DeleteFlug = :DeleteFlug')
                        ->andWhere('d.CompanyId = :CompanyId')
                        ->orderBy('d.Name', 'ASC')
                        ->setParameter('ContractId', 1)
                        ->setParameter('DeleteFlug', false)
                        ->setParameter('CompanyId', 0);
                },
            ))
*/
            ->add('department', 'choice', array(
                'label' => '部署',
                'choices' => array(
                    '' => '----',
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
//                    'freeze' => true,
            ))
            ->add('buttonAction', 'hidden', array(
            ))
            ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){
                $form = $event->getForm();
                $data = $event->getData();

                $companyData = $data->getCompany();
                if($companyData == null)
                {
                    return;
                }
            })
            ->addEventListener(FormEvents::PRE_BIND, function(FormEvent $event) use($em, $builder){
                $form = $event->getForm();
                $data = $event->getData();

                $companyForm = $form["company"];
//                $companyForm->createView();
                $companyBuilder = $builder->get("company");
                $option = $companyBuilder->getOption("choice_list");
                $option->getValues();

                //
//                $aaa = $builder->get("department");
//                $view = $aaa->getViewTransformers();


                if(!empty($data['company']))
                {
                    $company = $data['company'];
/*
                    $departmentForm = $form["department"];
                    $a = $builder->get("department");
                    $builder->
                    $builder->setAttribute('query_builder', function(EntityRepository $er) use($company) {
                        return $er->createQueryBuilder('d')
                            ->andWhere('d.ContractId = :ContractId')
                            ->andWhere('d.DeleteFlug = :DeleteFlug')
                            ->andWhere('d.CompanyId = :CompanyId')
                            ->orderBy('d.Name', 'ASC')
                            ->setParameter('ContractId', 1)
                            ->setParameter('DeleteFlug', false)
                            ->setParameter('CompanyId', $company);
                    });
*/


                    $factory = $builder->getFormFactory();

                    $builder->add('department', 'entity', array(
                        'label' => '部署',
                        'required' => false,
                        'empty_value' => '--部署なし--',
                        'class' => 'SystemCompasBundle:TBDepartment',
                        'property' => 'Name',
                        'query_builder' => function(EntityRepository $er) use($company) {
                            return $er->createQueryBuilder('d')
                                ->andWhere('d.ContractId = :ContractId')
                                ->andWhere('d.DeleteFlug = :DeleteFlug')
                                ->andWhere('d.CompanyId = :CompanyId')
                                ->orderBy('d.Name', 'ASC')
                                ->setParameter('ContractId', 1)
                                ->setParameter('DeleteFlug', false)
                                ->setParameter('CompanyId', $company);
                        },
                    ));
                    $a = $builder->get("department");
                    $c = $a->getOption("choice_list");
                    $d = $c->getValues();
                    $b = $a->getForm();

//                    $view = $a->getViewTransformers();

//                    $b->createView();
                    $form->add($b);

/*
                    $addForm = $factory->createNamed('department', 'entity', null, array(
                        'label' => '部署',
                        'required' => false,
                        'empty_value' => '--部署なし--',
                        'class' => 'SystemCompasBundle:TBDepartment',
                        'property' => 'Name',

                        'query_builder' => function(EntityRepository $er) use($company) {
                            return $er->createQueryBuilder('d')
                                ->andWhere('d.ContractId = :ContractId')
                                ->andWhere('d.DeleteFlug = :DeleteFlug')
                                ->andWhere('d.CompanyId = :CompanyId')
                                ->orderBy('d.Name', 'ASC')
                                ->setParameter('ContractId', 1)
                                ->setParameter('DeleteFlug', false)
                                ->setParameter('CompanyId', $company);
                        },

                    ));
                    $addForm->createView();
//                    $builder->add($addForm);
                    $form->add($addForm);
*/

/*
                    $form->add($factory->createNamed('department', 'entity', null, array(
                        'label' => '部署',
                        'required' => false,
                        'empty_value' => '--部署なし--',
                        'class' => 'SystemCompasBundle:TBDepartment',
                        'property' => 'Name',

                        'query_builder' => function(EntityRepository $er) use($company) {
                            return $er->createQueryBuilder('d')
                                ->andWhere('d.ContractId = :ContractId')
                                ->andWhere('d.DeleteFlug = :DeleteFlug')
                                ->andWhere('d.CompanyId = :CompanyId')
                                ->orderBy('d.Name', 'ASC')
                                ->setParameter('ContractId', 1)
                                ->setParameter('DeleteFlug', false)
                                ->setParameter('CompanyId', $company);
                        },

                    )));
*/
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