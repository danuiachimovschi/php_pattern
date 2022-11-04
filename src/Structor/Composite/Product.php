<?php

declare(strict_types=1);

namespace App\Structor\Composite;

class Product extends Component
{
    public function __construct(
        public string $type
    ){}

    public function handler(): string
    {
        return $this->type;
    }
}