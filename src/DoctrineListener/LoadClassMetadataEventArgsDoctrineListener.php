<?php

namespace App\DoctrineListener;

use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Event\LoadClassMetadataEventArgs;

#[AsDoctrineListener('loadClassMetadata')]
class LoadClassMetadataEventArgsDoctrineListener
{
    public function loadClassMetadata(LoadClassMetadataEventArgs $event): void
    {
        // ...
    }
}
