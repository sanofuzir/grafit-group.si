<?php

namespace Grafit\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TextType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 5, 'cols'=>80),
                'label' => 'Text'
            ))
            ->add('link', 'choice', array(
                'choices' => array('actual' => 'Aktualni izdeleki', 'shop' => 'Trgovina', 'services' => 'Storitve'),
                'preferred_choices' => array('baz'),
                'label' => 'Povezava na'
            ))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Grafit\CoreBundle\Entity\text'
        ));
    }

    public function getName()
    {
        return 'text';
    }
}
