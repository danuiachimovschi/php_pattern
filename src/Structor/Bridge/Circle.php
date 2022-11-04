<?php

declare(strict_types=1);

namespace App\Structor\Bridge;

class Circle extends Share
{
    public function handler(): string
    {
        return $this->color->handler() . " circle";
    }
}