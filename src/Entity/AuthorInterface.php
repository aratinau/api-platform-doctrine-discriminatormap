<?php

namespace App\Entity;

interface AuthorInterface
{
    public function setAuthor(?User $author): static;
}
