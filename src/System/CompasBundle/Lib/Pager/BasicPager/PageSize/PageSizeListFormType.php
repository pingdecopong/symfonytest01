<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fhirashima
 * Date: 13/06/07
 * Time: 17:26
 * To change this template use File | Settings | File Templates.
 */

namespace System\CompasBundle\Lib\Pager\BasicPager\PageSize;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PageSizeListFormType extends AbstractType {

    /**
     * @var array
     */
    private $sizeList;
    /**
     * @var string
     */
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
     * @param array $sizeList
     */
    public function setSizeList($sizeList)
    {
        $this->sizeList = $sizeList;
    }

    /**
     * @return array
     */
    public function getSizeList()
    {
        return $this->sizeList;
    }

    /**
     * @param string $sizeDefault
     */
    public function setSizeDefault($sizeDefault)
    {
        $this->sizeDefault = $sizeDefault;
    }

    /**
     * @return string
     */
    public function getSizeDefault()
    {
        return $this->sizeDefault;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $sizeDefault = $this->sizeDefault;
        $builder
            ->add('pageSize', 'choice', array(
                'choices' => $this->sizeList,
                'required' => true,
                'attr' => array(
                    'onChange' => 'javascript:postBack();',
                ),
            ))
            ->addEventListener(FormEvents::PRE_BIND, function(FormEvent $event) use($sizeDefault) {

                $data = $event->getData();

                if(empty($data['pageSize']))
                {
                    $data['pageSize'] = $sizeDefault;
                }

                $event->setData($data);
            })
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'System\CompasBundle\Lib\Pager\BasicPager\PageSize\PageSizeListFormModel'
        ));
    }

    public function getName()
    {
        return 'pagesize';
    }

}