<?php

namespace App\Behavior\Strategy;

use App\Behavior\Strategy\Interfaces\StrategyInterface;

//You can implement yout buisness logic in this class
class SecondStrategy implements StrategyInterface
{
    public function strategyMethod(): string
    {
        return __CLASS__;
    }
}