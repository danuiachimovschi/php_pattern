<?php

declare(strict_types=1);

namespace App\Behavior\Chain\Interfaces;

interface Handler
{
    public function setChain(Handler $handler): Handler;

    public function handler(string $request): ?string;
}