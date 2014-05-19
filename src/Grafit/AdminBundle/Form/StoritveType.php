<?php

namespace Grafit\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StoritveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 3, 'cols'=>71),
                'label' => 'Naslov storitve'
            ))
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 15, 'cols'=>80),
                'label' => 'Storitev'
            ))
            ->add('file', 'file', array(
                'attr'  => array('class' => 'span2'),
                'label' =>  'Slika'
            ))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Grafit\CoreBundle\Entity\Storitve'
        ));
    }

    public function getName()
    {
        return 'storitve';
    }
}
