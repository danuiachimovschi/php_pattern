<?php

namespace Tests\Creator\Singleton;

use PHPUnit\Framework\TestCase;
use App\Creator\Singleton\Singleton;

class SingletonTest extends TestCase
{
    /**
     * @test
     */
    public function is_object_singleton_same_object_with_other_singleton_object()
    {
        $firstObj = Singleton::instance();
        $secondObj = Singleton::instance();

        $this->assertEquals($firstObj, $secondObj);
    }    
}