<?php

declare(strict_types=1);

namespace App\Behavior\State;

class Clothes extends State
{
    public function handler(): string
    {
        return "clothes state";
    }
}