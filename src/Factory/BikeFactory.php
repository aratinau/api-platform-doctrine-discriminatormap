<?php

namespace App\Factory;

use App\DataFixtures\CategoryFixtures;
use App\Entity\Vehicle\Bike;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Bike>
 */
final class BikeFactory extends PersistentProxyObjectFactory
{
    private $brandBikes = [
        'Yamaha',
        'Honda',
        'Harley-Davidson',
        'Kawasaki',
        'Suzuki',
        'Ducati',
        'BMW Motorrad',
        'Triumph',
        'KTM',
        'Royal Enfield',
        'Aprilia',
        'Indian Motorcycle',
        'MV Agusta',
        'Husqvarna',
        'Moto Guzzi'
    ];
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Bike::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     */
    protected function defaults(): array|callable
    {
        return [
            'hasCarrier' => self::faker()->boolean(),
            'brand' => self::faker()->randomElement($this->brandBikes),
            'createdAt' => self::faker()->dateTimeBetween('-1 month'),
            'categories' => CategoryFactory::randomRange(1, 5)
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Bike $bike): void {})
        ;
    }
}
