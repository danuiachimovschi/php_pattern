<?php

declare(strict_types=1);

namespace App\Behavior\State;

class Context
{
    private State $state;

    public function __construct(State $state)
    {
        $this->changeState($state);
    }

    public function changeState(State $state)
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function handler()
    {
        return $this->state->handler();
    }

    public function toClothes(): void
    {
        $this->state->requestToChange();
    }
}