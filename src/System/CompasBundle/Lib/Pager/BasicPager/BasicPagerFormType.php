<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/10
 * Time: 11:02
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BasicPagerFormType extends AbstractType {

    private $sizeList;
    private $sizeDefault;

    function __construct()
    {
        $this->sizeList = array(
            '10' => '10',
            '20' => '20',
            '50' => '50',
        );
        $this->sizeDefault = 10;
    }

    /**
     * @param mixed $sizeList
     */
    public function setSizeList($sizeList)
    {
        $this->sizeList = $sizeList;
    }

    /**
     * @return mixed
     */
    public function getSizeList()
    {
        return $this->sizeList;
    }

    /**
     * @param mixed $sizeDefault
     */
    public function setSizeDefault($sizeDefault)
    {
        $this->sizeDefault = $sizeDefault;
    }

    /**
     * @return mixed
     */
    public function getSizeDefault()
    {
        return $this->sizeDefault;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $sizeDefault = $this->sizeDefault;
        $builder
            ->add('pageNo', 'hidden', array(
            ))
            ->add('pageSize', 'choice', array(
                'choices' => $this->sizeList,
                'required' => true,
                'attr' => array(
                    'onChange' => 'javascript:changePageSize();',
                ),
            ))
            ->addEventListener(FormEvents::PRE_BIND, function(FormEvent $event) use($sizeDefault) {

                $data = $event->getData();

                if(empty($data['pageSize']))
                {
                    $data['pageSize'] = $sizeDefault;
                }

                if(empty($data['pageNo']))
                {
                    $data['pageNo'] = 1;
                }

                $event->setData($data);
            })
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'System\CompasBundle\Lib\Pager\BasicPager\BasicPagerFormModel'
        ));
    }

    public function getName()
    {
        return 'basicpager';
    }
}