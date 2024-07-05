<?php

namespace App\Factory;

use App\Entity\Car;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Car>
 */
final class CarFactory extends PersistentProxyObjectFactory
{
    private $brandCars = [
        'Toyota',
        'Ford',
        'BMW',
        'Mercedes-Benz',
        'Tesla',
        'Honda',
        'Chevrolet',
        'Audi',
        'Nissan',
        'Volkswagen',
        'Hyundai',
        'Kia',
        'Lexus',
        'Mazda',
        'Subaru',
    ];


    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Car::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     */
    protected function defaults(): array|callable
    {
        return [
            'brand' => self::faker()->text(255),
            'numberOfDoors' => self::faker()->randomNumber(),
            'brand' => self::faker()->randomElement($this->brandCars),
            'createdAt' => self::faker()->dateTimeBetween('-1 month')
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Car $car): void {})
        ;
    }
}
