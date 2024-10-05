<?php

namespace App\DoctrineExtension;

use ApiPlatform\Doctrine\Orm\Extension\QueryCollectionExtensionInterface;
use ApiPlatform\Doctrine\Orm\Extension\QueryItemExtensionInterface;
use ApiPlatform\Doctrine\Orm\Util\QueryNameGeneratorInterface;
use ApiPlatform\Metadata\Operation;
use App\Entity\CurrentUserIsAuthorInterface;
use Doctrine\ORM\QueryBuilder;
use Symfony\Bundle\SecurityBundle\Security;

class CurrentUserIsAuthorExtension implements QueryCollectionExtensionInterface, QueryItemExtensionInterface
{
    public function __construct(
        private Security $security,
    ) {
    }

    public function applyToCollection(QueryBuilder $queryBuilder, QueryNameGeneratorInterface $queryNameGenerator, string $resourceClass, ?Operation $operation = null, array $context = []): void
    {
        $this->currentUserIsAuthor($resourceClass, $queryBuilder);
    }

    public function applyToItem(QueryBuilder $queryBuilder, QueryNameGeneratorInterface $queryNameGenerator, string $resourceClass, array $identifiers, ?Operation $operation = null, array $context = []): void
    {
        $this->currentUserIsAuthor($resourceClass, $queryBuilder);
    }

    /**
     * @param string $resourceClass
     * @param QueryBuilder $queryBuilder
     * @return void
     * @throws \ReflectionException
     */
    public function currentUserIsAuthor(string $resourceClass, QueryBuilder $queryBuilder): void
    {
        $reflectionClass = new \ReflectionClass($resourceClass);
        if ($reflectionClass->implementsInterface(CurrentUserIsAuthorInterface::class)) {
            $alias = $queryBuilder->getRootAliases()[0];
            $queryBuilder->andWhere("$alias.author = :current_author")
                ->setParameter('current_author', $this->security->getUser()->getId())
            ;
        }
    }
}
