<?php

namespace App\Entity\DMS;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DMS\PaperRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: PaperRepository::class)]
#[ApiResource]
class Paper extends Element
{
    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['element:read', 'element:write'])]
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
