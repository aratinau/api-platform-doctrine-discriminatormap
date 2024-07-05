<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BikeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BikeRepository::class)]
#[ApiResource]
class Bike
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $hasCarrier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function hasCarrier(): ?bool
    {
        return $this->hasCarrier;
    }

    public function setHasCarrier(bool $hasCarrier): static
    {
        $this->hasCarrier = $hasCarrier;

        return $this;
    }
}
