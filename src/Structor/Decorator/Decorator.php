<?php

declare(strict_types=1);

namespace App\Structor\Decorator;

use App\Structor\Decorator\Interfaces\ComponentInterface;

class Decorator implements ComponentInterface
{
    public function getPrice(): int
    {
        return 20;
    }

    public function getTitle(): string
    {
        return "Coffe";
    }
}