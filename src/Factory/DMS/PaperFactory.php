<?php

namespace App\Factory\DMS;

use App\Entity\DMS\Paper;
use App\Factory\CategoryFactory;
use App\Factory\UserFactory;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Paper>
 */
final class PaperFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Paper::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'description' => self::faker()->sentences(6, true),
            'categories' => CategoryFactory::randomRange(1, 5),
            'direction' => self::faker()->randomElement(['incoming', 'outgoing']),
            'content' => self::faker()->sentences(6, true),
            'author' => UserFactory::random()
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Paper $paper): void {})
        ;
    }
}
