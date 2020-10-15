<?php

namespace App\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'nom', TextType::class,
                array(
                    'label' => 'Nom',
                    'attr'  => array('style' => 'width: 400px')
                )
            )
            ->add(
                'dateDebut', DateType::class,
                array(
                    'label' => 'Date de début',
                    'attr'  => array('style' => 'width: 400px'),
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                )
            )
            ->add(
                'dateCloture', DateType::class,
                array(
                    'label' => 'Date de cloture',
                    'attr'  => array('style' => 'width: 400px'),
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                )
            )
            ->add(
                'duree', IntegerType::class,
                array(
                    'label' => 'Durée',
                    'attr'  => array('style' => 'width: 400px')
                )
            )
            ->add(
                'nbinscriptionsmax', IntegerType::class,
                array(
                    'label' => 'Nombre Max de Participants',
                    'attr'  => array('style' => 'width: 400px')
                )
            )
            ->add(
                'urlPhoto', TextType::class,
                array(
                    'label' => 'URL Photo',
                    'attr'  => array('style' => 'width: 400px')
                )
            )
            ->add(
                'lieuxNoLieu', EntityType::class,
                array(
                    'class'         => 'AppBundle:Lieux',
                    'query_builder' => function (EntityRepository $er){
                        return $er->createQueryBuilder('p');
                    },
                    'label' => 'Lieux',
                    'choice_label'  => 'nomLieu',
                    'expanded'      => false,
                    'mapped'        => false,
                    'required'      => false,
                    'placeholder'   => 'select un lieu',
                )
            )
            ->add(
                'descriptioninfos', TextareaType::class,
                array(
                    'label' => 'Description',
                    'attr'  => array('style' => 'width: 400px')
                )
            )
            ->add('register', SubmitType::class, array('label' => 'Submit'));;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'app_bundle_sortie_create_type';
    }
}