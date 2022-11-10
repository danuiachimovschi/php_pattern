<?php

declare(strict_types=1);

namespace Tests\Behavior\State;

use App\Behavior\State\Context;
use App\Behavior\State\ProductState;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */
    public function change_state_of_context()
    {
        $context = new Context(new ProductState);
        $this->assertSame($context->handler(), 'product state');
        $context->toClothes();
        $this->assertSame($context->handler(), 'clothes state');
    }
}