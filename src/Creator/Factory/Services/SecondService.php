<?php

declare(strict_types=1);

namespace App\Creator\Factory\Services;

use App\Creator\Factory\Factory;
use App\Creator\Factory\Products\SecondProduct;

class SecondService extends Factory
{
    public function factoryMethod()
    {
        return new SecondProduct;
    }
}