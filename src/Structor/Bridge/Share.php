<?php

declare(strict_types=1);

namespace App\Structor\Bridge;

use App\Structor\Bridge\Interfaces\Color;

abstract class Share
{
    public function __construct(
       protected Color $color
    ){}

    abstract public function handler(): string;
}