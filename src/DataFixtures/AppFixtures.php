<?php

namespace App\DataFixtures;

use App\Factory\BikeFactory;
use App\Factory\CarFactory;
use App\Factory\DMS\EmailFactory;
use App\Factory\DMS\PaperFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        BikeFactory::createMany(20);
        CarFactory::createMany(20);
        UserFactory::createSequence([
            [
                'email' => 'elise60@noos.fr',
                'firstname' => 'Elise',
                'lastname' => 'Noos',
            ],
            [
                'email' => 'bsmith@smith.fr',
                'firstname' => 'Bertrand',
                'lastname' => 'Smith',
            ],
        ]);
        UserFactory::createMany(30);

        EmailFactory::createMany(50);
        PaperFactory::createMany(50);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ServiceFixtures::class,
            CategoryFixtures::class,
        ];
    }
}
