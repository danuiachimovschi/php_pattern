<?php

declare(strict_types=1);

namespace App\Behavior\State;

abstract class State
{
    protected $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    public function requestToChange(): void {}

    abstract public function handler(): string;
}