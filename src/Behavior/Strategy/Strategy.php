<?php

declare(strict_types=1);

namespace App\Behavior\Strategy;

use App\Behavior\Strategy\Interfaces\StrategyInterface;

//You can implement yout buisness logic in this class
class Strategy implements StrategyInterface
{
    public function strategyMethod(): string
    {
        return __CLASS__;
    }
}