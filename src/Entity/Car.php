<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
#[ApiResource]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numberOfDoors = null;

    public function getId(): ?int
    {
        return $this->id;
    }

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
