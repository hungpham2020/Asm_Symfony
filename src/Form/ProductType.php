<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Customer;
use App\Entity\Manufacture;
use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,
            [
                'label' =>"Name",
                'required' => true
            ])
            ->add('description', TextType::class,
            [
                'label'=>"Description",
                'required' => true
            ])
            ->add('quantity', IntegerType::class,
            [
                'label'=>"Quantity",
                'required'=> true
            ])
            ->add('price', MoneyType::class,
            [
                'label' => "Price",
                'required' => true,
                'currency' => "USD"
            ])
            ->add('img',FileType::class,
            [
                'label' => "Image",
                'data_class' => null,
                'required' =>is_null($builder ->getData()->getImg())
            ])
            ->add('category', EntityType::class,
            [
                'label' =>"Category",
                'class'=> Category::class,
                'choice_label'=>"name",
                'multiple' => false,
                'expanded' => false
            ])
            ->add('manufacture', EntityType::class,
            [
                'label'=>"Manufacture",
                'class'=> Manufacture::class,
                'choice_label' => "name",
                'multiple' => false,
                'expanded' => false
            ])
            ->add('customers', EntityType::class,
            [
                'label' =>"Customer",
                'class'=> Customer::class,
                'choice_label'=>"name",
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
