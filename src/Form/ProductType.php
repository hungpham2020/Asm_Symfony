<?php

namespace App\Form;

use App\Entity\Product;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,
            [
                'label' =>"Name",
                'require' => true
            ])
            ->add('description', TextType::class,
            [
                'label'=>"Description",
                'require' => true
            ])
            ->add('quantity', IntegerType::class,
            [
                'label'=>"Quantity",
                'reqire'=> true
            ])
            ->add('price', MoneyType::class,
            [
                'label' => "Price",
                'require' => true,
                'currency' => "USD"
            ])
            ->add('img',FileType::class,
            [
                'label' => "Image",
                'data_class' => null,
                'require' =>is_null($builder ->getData()->getImg())
            ])
            ->add('category', EntityType::class,
            [
                'label'=>"Category",
                'class'=> null,
                'choice_label'=>"name",
                'multiple' => false,
                'expanded' => false
            ])
            ->add('customers', EntityType::class,
            [
                'label'=>"Customer",
                'class'=> null,
                'choice_label' => "name",
                'multiple' => true,
                'expanded' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
