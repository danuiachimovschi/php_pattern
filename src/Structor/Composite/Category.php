<?php

declare(strict_types=1);

namespace App\Structor\Composite;

class Category extends Composite
{
    public function handler(): string
    {
        return "category";
    }

    public function getCountOfBranches()
    {
        return $this->child->count();
    }
}