<?php

namespace App\DataFixtures;

use App\Factory\ImportanceFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImportanceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ImportanceFactory::createOne([
            'name' => 'Aucune importance',
            'value' => 0
        ]);
        ImportanceFactory::createOne([
            'name' => 'Importance faible',
            'value' => 25
        ]);
        ImportanceFactory::createOne([
            'name' => 'Importance moyenne',
            'value' => 50
        ]);
        ImportanceFactory::createOne([
            'name' => 'Importance haute',
            'value' => 75
        ]);
        ImportanceFactory::createOne([
            'name' => 'Importance très haute',
            'value' => 100
        ]);
    }
}
