<?php

namespace Grafit\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 3, 'cols'=>71),
                'label' => 'Naslov novice'
            ))
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 15, 'cols'=>80),
                'label' => 'Novica'
            ))
            ->add('actual', 'choice', array(
                'choices' => array('yes' => 'Da', 'no' => 'Ne'),
                'preferred_choices' => array('baz'),
                'label' => 'Aktualna novica'
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
            'data_class' => 'Grafit\CoreBundle\Entity\News'
        ));
    }

    public function getName()
    {
        return 'news';
    }
}
