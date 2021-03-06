<?php

namespace Captic\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'label' => 'edit.title',
                'translation_domain' => 'posts'
            ))
            ->add('content', 'textarea', array(
                'label' => 'edit.content',
                'translation_domain' => 'posts'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Captic\BlogBundle\Entity\Post'
        ));
    }

    public function getName()
    {
        return 'captic_blogbundle_posttype';
    }
}
