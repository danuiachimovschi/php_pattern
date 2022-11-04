<?php

declare(strict_types=1);

namespace App\Structor\Bridge;

use App\Structor\Bridge\Interfaces\Color;

class Red implements Color
{
    public function handler(): string
    {
        return 'red';
    }
}