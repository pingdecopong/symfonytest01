<?php
/**
 * ユーザー検索フォーム
 */

namespace System\CompasBundle\Form\SystemUser;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SystemUserSearchFormType  extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => 'ユーザー名',
                'required' => true,
                'max_length' => 50,
            ))
            ->add('companyId', 'text', array(
                'label' => '会社名',
                'required' => true,
                'max_length' => 50,
            ))
            ->add('active', 'choice', array(
                'label' => '有効状態',
                'choices' => array(
                    '' => '----',
                    '1' => '有効',
                    '0' => '無効',
                ),
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'System\CompasBundle\Form\SystemUser\SystemUserSearchFormModel'
        ));
    }

    public function getName()
    {
        return 'systemuser_search';
    }
}