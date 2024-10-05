<?php

namespace App\Entity\DMS;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\EmailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmailRepository::class)]
#[ApiResource]
class Email extends Element
{

}
