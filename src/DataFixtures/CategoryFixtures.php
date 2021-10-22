<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=0; $i<=100; $i++){
            $category = new Category();
            $category->setName("Category $i");
            $category->setDescription("bla blo");

            
            $manager->persist($category);
        }
        $manager->flush();
    }
}