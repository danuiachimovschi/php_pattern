<?php

declare(strict_types=1);

namespace App\Behavior\Command\Interfaces;

interface Command
{
    public function execute(): string;
}