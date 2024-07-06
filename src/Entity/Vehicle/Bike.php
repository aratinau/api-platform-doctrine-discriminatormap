<?php

namespace App\Entity\Vehicle;

use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\BikeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BikeRepository::class)]
#[ApiResource]
#[ApiFilter(OrderFilter::class)]
class Bike extends Vehicle
{
    #[ORM\Column]
    private ?bool $hasCarrier = null;

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
