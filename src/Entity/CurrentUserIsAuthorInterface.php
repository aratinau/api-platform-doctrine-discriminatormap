<?php

namespace App\Entity;

interface CurrentUserIsAuthorInterface
{
    public function setAuthor(?User $author): static;
}
