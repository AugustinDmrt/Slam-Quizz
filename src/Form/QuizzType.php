<?php

namespace App\Form;

use App\Entity\Quizz;
use App\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;   
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('summary')
            ->add('number_of_question')
            ->add('active')
            ->add('categories', EntityType::class, [
                'class' => Category::class,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('u');
                },
                'choice_label' => 'shortname',
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Quizz::class,
        ]);
    }
}
