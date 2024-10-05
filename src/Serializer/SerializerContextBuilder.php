<?php

namespace App\Serializer;

use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\State\SerializerContextBuilderInterface;
use Symfony\Component\DependencyInjection\Attribute\AsDecorator;
use Symfony\Component\HttpFoundation\Request;

#[AsDecorator('api_platform.serializer.context_builder')]
class SerializerContextBuilder implements SerializerContextBuilderInterface
{
    public function __construct(
        private readonly SerializerContextBuilderInterface $decorated,
    ) {
    }

    public function createFromRequest(Request $request, bool $normalization, array $extractedAttributes = null): array
    {
        $context = $this->decorated->createFromRequest($request, $normalization, $extractedAttributes);
        $context['groups'] = $context['groups'] ?? [];

        $resourceClass = $context['resource_class'] ?? null;

        $context['groups'] = array_merge(
            $context['groups'],
            $this->addDefaultGroups($context, $normalization, $resourceClass)
        );

        $context['groups'] = array_unique($context['groups']);

        return $context;
    }

    private function addDefaultGroups(array $context, bool $normalization, $resourceClass)
    {
        if (!$resourceClass) {
            return;
        }

        $reflectionClass = new \ReflectionClass($resourceClass);
        $shortName = $reflectionClass->getShortName();
        $classAlias = strtolower(preg_replace('/[A-Z]/', '_\\0', lcfirst($shortName)));
        $readOrWrite = $normalization ? 'read' : 'write';
        $itemOrCollection = $context['operation'] instanceof GetCollection ? 'collection' : 'item';
        $operationName = explode('\\', $context['operation']::class);
        $operationName = end($operationName);
        $operationName = strtolower($operationName);

        $groups = [
            // {class}:{read/write}
            // e.g. user:read
            sprintf('%s:%s', $classAlias, $readOrWrite),

            // {class}:{item/collection}:{read/write}
            // e.g. user:collection:read
            sprintf('%s:%s:%s', $classAlias, $itemOrCollection, $readOrWrite),

            // {class}:{item/collection}:{operationName}
            // e.g. user:item:post
            sprintf('%s:%s:%s', $classAlias, $itemOrCollection, $operationName),
        ];

        // Ajouter un groupe pour la classe mère si elle existe
        $parentClass = $reflectionClass->getParentClass();
        if ($parentClass) {
            $parentClassAlias = strtolower(preg_replace('/[A-Z]/', '_\\0', lcfirst($parentClass->getShortName())));

            $groups[] = sprintf('%s:%s', $parentClassAlias, $readOrWrite);
        }

        return $groups;
    }
}
