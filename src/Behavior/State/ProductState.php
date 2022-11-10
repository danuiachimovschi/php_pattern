<?php

declare(strict_types=1);

namespace App\Behavior\State;

class ProductState extends State
{
    public function handler(): string
    {
        return "product state";
    }

    public function requestToChange(): void
    {
        $this->context->changeState(new Clothes);
    }
}