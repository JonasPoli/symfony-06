<?php

namespace App\DataFixtures;

use App\Entity\NewsCategory;
use App\Factory\NewsCategoryFactory;
use App\Factory\NewsFactory;
use App\Repository\NewsCategoryRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        NewsCategoryFactory::createMany(7);
        NewsFactory::createMany(200,function(){
           return [
            'category' => NewsCategoryFactory::random()

        ];
        });
        $manager->flush();

    }
}
