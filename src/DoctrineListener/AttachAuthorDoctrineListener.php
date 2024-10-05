<?php

namespace App\DoctrineListener;

use App\Entity\AuthorInterface;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Symfony\Bundle\SecurityBundle\Security;

#[AsDoctrineListener('prePersist'/*, 500, 'default'*/)]
class AttachAuthorDoctrineListener
{
    public function __construct(
        private Security $security,
    ) {
    }

    public function prePersist(PrePersistEventArgs $event): void
    {
        if ($this->security->getUser() === null) {
            return ;
        }

        $entity = $event->getObject();
        $reflectionClass = new \ReflectionClass($entity);
        if (!$reflectionClass->implementsInterface(AuthorInterface::class)) {
            return;
        }

        $user = $this->security->getUser();
        $entity->setAuthor($user);
    }
}
