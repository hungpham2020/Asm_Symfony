<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        for($i=1; $i <= 100; $i++){
            $product = new Product();
            $product ->setName("Product $i");
            $product ->setDescription("hahaha");
            $product ->setQuantity(100);
            $product ->setPrice(10000);
            $product ->setImg("asa.jpg");

            $manager->persist($product);
        }

        $manager->flush();
    }
}