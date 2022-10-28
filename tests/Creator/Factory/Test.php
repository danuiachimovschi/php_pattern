<?php

namespace Tests\Creator\Factory;

use PHPUnit\Framework\TestCase;
use App\Creator\Factory\Products\FirstProduct;
use App\Creator\Factory\Services\FirstService;
use App\Creator\Factory\Products\SecondProduct;
use App\Creator\Factory\Services\SecondService;

class Test extends TestCase
{
    /**
     * @test
     */
    public function service_creates_a_factory()
    {
        $this->assertEquals((new FirstService)->factoryMethod(), new FirstProduct);
        $this->assertEquals((new SecondService)->factoryMethod(), new SecondProduct);
    }
}