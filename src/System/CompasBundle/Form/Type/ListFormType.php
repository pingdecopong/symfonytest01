<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/04/12
 * Time: 14:47
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ListFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('page_no', 'hidden', array(
            ))
            ->add('page_size', 'hidden', array(
            ))
            ->add('sort', 'hidden', array(
            ))
            ->add('sort_type', 'hidden', array(
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'System\CompasBundle\Form\Type\ListFormModel'
        ));
    }

    public function getName()
    {
        return 'list';
    }
}