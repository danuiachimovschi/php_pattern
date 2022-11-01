<?php

declare(strict_types=1);

namespace App\Structor\Facade;

use App\Structor\Facade\Interfaces\SystemInterface;

class SystemB implements SystemInterface
{
    public function getResult(): string
    {
        return __CLASS__;
    }
}