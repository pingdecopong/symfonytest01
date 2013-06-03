<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/04/12
 * Time: 14:47
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PagerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pageNo', 'hidden', array(
            ))
            ->add('pageSize', 'hidden', array(
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'System\CompasBundle\Lib\Pager\PagerFormModel'
        ));
    }

    public function getName()
    {
        return 'list';
    }
}