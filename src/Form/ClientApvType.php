<?php

namespace App\Form;

use App\Entity\ClientApv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientApvType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('compteAfaire')
            ->add('compteEvent')
            ->add('compteDernierEvent')
            ->add('numeroFiche')
            ->add('libelleCivilite')
            ->add('propriteActuelVehicule')
            ->add('nom')
            ->add('prenom')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ClientApv::class,
        ]);
    }
}
