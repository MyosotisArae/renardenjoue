<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserDisplayType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',           TextType::class,     ['label' => "Nom d'utilisateur", 'attr' => array('readonly' => true)])
            ->add('plainPassword', PasswordType::class, ['label' => 'Mot de passe'])
            ->add('email',         EmailType::class,    ['label' => 'Adresse mail', 'required' => false])
            ->add('idDiscord',     TextType::class,     ['label' => "Identifiant Discord"])
            ->add('nbJoueurs',     IntegerType::class,  ['label' => 'Nombre de joueurs pour votre prochaine inscription', 'required' => true, 'attr' => ['min' => 1, 'max' => 6]])
            ->add('submit',        SubmitType::class,   ['label' => 'Enregistrer les modifications'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
