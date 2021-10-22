<?php

namespace App\DataFixtures;

use App\Entity\Manufacture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ManufactureFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=0; $i<=100; $i++){
            $manufacture = new Manufacture();
            $manufacture->setName("Manufacture $i");
            $manufacture->setDescription("bla bli blii blum blo");

            
            $manager->persist($manufacture);
        }
        $manager->flush();
    }
}
