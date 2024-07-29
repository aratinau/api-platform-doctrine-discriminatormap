<?php

namespace App\DataFixtures;

use App\Factory\CategoryFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        CategoryFactory::createSequence(
            [
                [
                    'name' => 'Facture',
                    'color' => '#FF0000',
                ],
                [
                    'name' => 'CV',
                    'color' => '#0000FF',
                ],
                [
                    'name' => 'Commande',
                    'color' => '#FFA500',
                ],
                [
                    'name' => 'Devis',
                    'color' => '#008000',
                ],
                [
                    'name' => 'Autre',
                    'color' => '#800080',
                ],
                [
                    'name' => 'Contrat',
                    'color' => '#006400',
                ]
            ]
        );

        CategoryFactory::createMany(5);
    }
}
