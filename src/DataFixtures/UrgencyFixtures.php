<?php

namespace App\DataFixtures;

use App\Factory\UrgencyFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UrgencyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UrgencyFactory::createOne([
            'name' => 'Aucune urgence',
            'value' => 0
        ]);
        UrgencyFactory::createOne([
            'name' => 'Urgence faible',
            'value' => 25
        ]);
        UrgencyFactory::createOne([
            'name' => 'Urgence moyenne',
            'value' => 50
        ]);
        UrgencyFactory::createOne([
            'name' => 'Urgence haute',
            'value' => 75
        ]);
        UrgencyFactory::createOne([
            'name' => 'Urgence très haute',
            'value' => 100
        ]);
    }
}
