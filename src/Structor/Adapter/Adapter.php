<?php

declare(strict_types=1);

namespace App\Structor\Adapter;

class Adapter extends Subject
{
    public function __construct(
        private Adapte $adapte 
    ){}

    public function handler(): string
    {
        return "Translated: ". $this->adapte->handler();
    }
}