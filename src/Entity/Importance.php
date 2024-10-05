<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ImportanceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: ImportanceRepository::class)]
#[ApiResource(paginationEnabled: false)]
class Importance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['importance:read', 'courier:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['importance:read', 'courier:read'])]
    private ?string $name = null;

    #[ORM\Column]
    #[Groups(['importance:read', 'courier:read'])]
    private ?int $value = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): static
    {
        $this->value = $value;

        return $this;
    }
}
