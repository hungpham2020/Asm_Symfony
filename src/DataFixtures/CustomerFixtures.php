<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=1;$i<100;$i++)
        {
            $cus = new Customer();
            $cus->setName("Customer $i");
            $cus->setAge(20);
            $cus->setPhoneNumber("0123456789");
            $cus->setAddress("Hanoi");
            $manager->persist($cus);
        }

        $manager->flush();
    }
}
