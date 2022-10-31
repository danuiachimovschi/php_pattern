<?php

declare(strict_types=1);

namespace App\Structor\Facade;

class SystemA implements SystemInterface
{
    public function getResult(): string
    {
        return __CLASS__;
    }
}