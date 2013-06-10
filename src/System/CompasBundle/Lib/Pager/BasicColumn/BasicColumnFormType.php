<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/10
 * Time: 16:39
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicColumn;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BasicColumnFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sortName', 'hidden', array(
            ))
            ->add('sortType', 'hidden', array(
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'System\CompasBundle\Lib\Pager\BasicColumn\BasicColumnFormModel'
        ));
    }

    public function getName()
    {
        return 'basiccolumn';
    }

}