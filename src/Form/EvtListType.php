<?php

namespace App\Form;

use App\Entity\Evenements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EvtListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',      TextType::class,   ['label' => "Titre"])
            ->add('description',TextType::class,   ['label' => 'Description'])
            ->add('date_debut', DateType::class,   ['label' => 'Date début'])
            ->add('heure_debut',TimeType::class,   ['label' => 'Heure début'])
            ->add('date_fin',   DateType::class,   ['label' => '*Date fin'])
            ->add('heure_fin',  TimeType::class,   ['label' => 'Heure fin'])
            ->add('submit',     SubmitType::class, ['label' => 'Ajouter', 'attr' => ['method' => 'POST']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenements::class,
        ]);
    }
}
