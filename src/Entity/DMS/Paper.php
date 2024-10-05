<?php

namespace App\Entity\DMS;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DMS\PaperRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaperRepository::class)]
#[ApiResource]
class Paper extends Element
{
    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }
}
