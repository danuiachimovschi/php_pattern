<?php

declare(strict_types=1);

namespace Tests\Structor\Facade;

use App\Structor\Facade\Facade;
use PHPUnit\Framework\TestCase;
use App\Structor\Facade\SystemA;
use App\Structor\Facade\SystemB;

class Test extends TestCase
{
    /**
     * @test
     */
    public function getResutOfTwoObjectsWithFacade()
    {
        $systemA = new SystemA;
        $systemb = new SystemB;

        $facade = new Facade($systemA, $systemb);
        $facade->handler();
        

        $this->assertSame($facade->result, [SystemA::class, SystemB::class]);
    }
}