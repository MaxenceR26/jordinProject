<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\Chaussure;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{

    /**
     * 
     * @var Generator
     */

     private Generator $faker;

     public function __construct()
     {
         $this->faker = Factory::create('fr_FR');
     }
     
    public function load(ObjectManager $manager): void
    {

        for ($i=0; $i < 6; $i++ ) {
            $chaussure = new Chaussure();
            $chaussure->setName('Jordin ' . $this->faker->word());
            $chaussure->setPrice(mt_rand(50, 300));

            $manager->persist($chaussure);
        }
        
        
        $manager->flush();
    }
}
