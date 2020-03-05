<?php

namespace App\Form;

use App\Entity\Ludotheque;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class JeuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom',     TextType::class,     ['label' => "Nom sans article"])
        ->add('fullnom', TextType::class, ['label' => 'Nom complet'])
        ->add('img',     FileType::class,     ['label' => "image",'mapped' => false])
        ->add('but', TextType::class, ['label' => 'But'])
        ->add('ppe', TextType::class, ['label' => 'Principe'])
        ->add('nbjmin', IntegerType::class, ['label' => 'Nb joueurs min'])
        ->add('nbjmax', IntegerType::class, ['label' => 'Nb joueurs max'])
        ->add('dureemin', IntegerType::class, ['label' => 'Durée min'])
        ->add('dureemax', IntegerType::class, ['label' => 'Durée max'])
        ->add('dominance', IntegerType::class, ['label' => 'Complexité'])
        ->add('submit',        SubmitType::class,   ['label' => 'Se connecter', 'attr' => ['method' => 'POST']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ludotheque::class,
        ]);
    }
}
