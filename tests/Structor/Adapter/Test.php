<?php

declare(strict_types=1);

namespace Tests\Adapter;

use App\Structor\Adapter\Adapte;
use App\Structor\Adapter\Adapter;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test 
    */ 
    public function adapter_translated_corectly()
    {
        $adapter = new Adapter(new Adapte);

        $this->assertSame($adapter->handler(), 'Translated: salut :)');
    }
}