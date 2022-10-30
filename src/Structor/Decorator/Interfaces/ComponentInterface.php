<?php

declare(strict_types=1);

namespace App\Structor\Decorator\Interfaces;

interface ComponentInterface
{
    public function getPrice(): int;

    public function getTitle(): string;
}