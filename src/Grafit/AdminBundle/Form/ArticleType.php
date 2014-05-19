<?php

namespace Grafit\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 3, 'cols'=>71),
                'label' => 'Naslov novice'
            ))
            ->add('status', 'choice', array(
                'choices' => array('Actual' => 'Aktualna novica', 'News' => 'Novica'),
                'preferred_choices' => array('baz'),
                'label' => 'Status'
            ))
            ->add('category', 'entity', array('class'=>'CoreBundle:Category',
                'property'  => 'name',
                'required'  => false,
                'empty_value' => 'Izberi kategorijo',
                'label' => 'Kategorija'
            ))
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 15, 'cols'=>80),
                'label' => 'Novica'
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
            'data_class' => 'Grafit\CoreBundle\Entity\Article'
        ));
    }

    public function getName()
    {
        return 'article';
    }
}
