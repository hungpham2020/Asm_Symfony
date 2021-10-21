<?php

namespace App\Form;

use App\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,
            [
                'label' => 'Name',
                'required' => true
            ])
            ->add('age', IntegerType::class,
            [
                'label' => 'Age',
                'required' => true
            ])
            ->add('phoneNumber', TextType::class,
            [
                'label' => 'Phone Number',
                'required' => true
            ])
            ->add('address', TextType::class,
            [
                'label' => 'Address',
                'required' => true
            ])
            ->add('avatar', FileType::class,
            [
                'label' => 'Customer Avatar',
                'data_class' => null,
                'required' => is_null($builder->getData()->getAvatar())
            ])
            //->add('products')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
        ]);
    }
}
