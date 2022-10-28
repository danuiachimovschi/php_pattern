<?php

namespace App\Behavior\Strategy;

use App\Behavior\Strategy\Interfaces\StrategyInterface;

class Controller
{
    public function __construct(
        public StrategyInterface $strategy
    ){}

    public function handler()
    {
        return $this->strategy->strategyMethod();
    }
}