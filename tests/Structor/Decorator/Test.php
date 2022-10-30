<?php

declare(strict_types=1);

namespace Tests\Structor\Decorator;

use App\Structor\Decorator\CoffeExtra;
use App\Structor\Decorator\Decorator;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */

    public function get_coffe_decorator_with_extra_sugar()
    {
        $decorator = new Decorator;

        $extraCoffe = new CoffeExtra($decorator);

        $this->assertSame($extraCoffe->getPrice(), 30);
        $this->assertSame($extraCoffe->getTitle(), "Coffe with extra sugar");
    }
}