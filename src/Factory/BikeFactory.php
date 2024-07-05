<?php

namespace App\Factory;

use App\Entity\Bike;
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
            'brand' => self::faker()->text(255),
            'hasCarrier' => self::faker()->boolean(),
            'brand' => self::faker()->randomElement($this->brandBikes),
            'createdAt' => self::faker()->dateTimeBetween('-1 month')
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
