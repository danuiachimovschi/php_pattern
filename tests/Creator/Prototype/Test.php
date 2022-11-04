<?php

declare(strict_types=1);

namespace Tests\Creator\Prototype;

use App\Creator\Prototype\CloneAble;
use App\Creator\Prototype\CloneObject;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */
    public function is_object_cloned()
    {
        $cloneObject = new CloneObject;
        $clone = new CloneAble;
        $clone->cloneObject = $cloneObject;

        $clonedObject = clone $clone;
        
        $this->assertSame($clonedObject, $clonedObject);
    }    
}