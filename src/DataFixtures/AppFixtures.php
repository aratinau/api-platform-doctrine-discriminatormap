<?php

namespace App\DataFixtures;

use App\Factory\BikeFactory;
use App\Factory\CarFactory;
use App\Factory\ImportanceFactory;
use App\Factory\VehicleFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        BikeFactory::createMany(20);
        CarFactory::createMany(20);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
