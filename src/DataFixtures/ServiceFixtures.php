<?php

namespace App\DataFixtures;

use App\Factory\ServiceFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ServiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ServiceFactory::createSequence([
            [
                'name' => 'Direction RH',
            ],
            [
                'name' => 'Direction Finances',
            ],
            [
                'name' => 'Service Achats',
            ],
            [
                'name' => 'Service Courrier',
            ],]
        );
    }
}
