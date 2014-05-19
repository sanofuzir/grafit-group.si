<?php

namespace Grafit\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Ime*:'
            ))
            ->add('surname',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Ime*:'
            ))
            ->add('status', 'choice', array(
                'choices' => array('Received' => 'Prejeto', 'In_progress' => 'V teku', 'Completed' => 'Končano'),
                'preferred_choices' => array('baz'),
                'label' => 'Status:'
            ))
            ->add('company',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Podjetje:'
            ))
            ->add('telephone',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Telefon*:'
            ))
            ->add('email',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Email*:'
            ))
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span3', 'rows' => 15, 'cols'=>80),
                'label' => 'Vnos besedila:'
            ))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Grafit\CoreBundle\Entity\Inquiry'
        ));
    }

    public function getName()
    {
        return 'inquiry';
    }
}
