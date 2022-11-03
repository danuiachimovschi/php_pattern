<?php

declare(strict_types=1);

namespace App\Structor\Proxy\Interfaces;

interface UserInterface
{
    public function getAuth(): bool;
}