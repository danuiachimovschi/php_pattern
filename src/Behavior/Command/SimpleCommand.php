<?php

declare(strict_types=1);

namespace App\Behavior\Command;

use App\Behavior\Command\Interfaces\Command;

class SimpleCommand implements Command
{
    public function __construct(
        protected string $string
    ){}

    public function execute(): string
    {
        return $this->string;
    }
}