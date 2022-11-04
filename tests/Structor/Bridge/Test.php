<?php

declare(strict_types=1);

namespace Tests\Bridge;

use App\Structor\Bridge\Circle;
use App\Structor\Bridge\Red;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test 
    */ 
    public function create_circle()
    {
        $redCircle = new Circle(new Red);

        $this->assertSame($redCircle->handler(), "red circle");
    }
}