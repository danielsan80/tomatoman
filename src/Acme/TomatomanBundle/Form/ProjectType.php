<?php

namespace Acme\TomatomanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('active')
        ;
    }

    public function getName()
    {
        return 'acme_tomatomanbundle_projecttype';
    }
}
