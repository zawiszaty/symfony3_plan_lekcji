<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class addType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('className')
            ->add('type', ChoiceType::class, array(
                'choices' => array(
                    'type' => array(
                        'liceum' => 'liceum',
                        'technikum' => 'technikum',
                        'szkoła zawodowa' => 'szkoła zawodowa',
                    ))));
    }
}