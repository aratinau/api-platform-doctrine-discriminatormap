<?php

namespace App\Entity\Vehicle;

use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\CarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
#[ApiResource]
#[ApiFilter(OrderFilter::class)]
class Car extends Vehicle
{
    #[ORM\Column]
    private ?int $numberOfDoors = null;

    public function getNumberOfDoors(): ?int
    {
        return $this->numberOfDoors;
    }

    public function setNumberOfDoors(int $numberOfDoors): static
    {
        $this->numberOfDoors = $numberOfDoors;

        return $this;
    }
}
