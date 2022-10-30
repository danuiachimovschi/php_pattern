<?php

declare(strict_types=1);

namespace Tests\Behavior\Strategy;

use PHPUnit\Framework\TestCase;
use App\Behavior\Strategy\Strategy;
use App\Behavior\Strategy\Controller;
use App\Behavior\Strategy\SecondStrategy;

class Test extends TestCase
{
    /**
     * @test
     */

    public function controller_runs_differents_strategies()
    {
        //Same controller but diferents Buisness Logic
        $firstStrategy = new Controller(new Strategy);
        $secondStrategy = new Controller(new SecondStrategy);

        $this->assertSame($firstStrategy->handler(), Strategy::class);
        $this->assertSame($secondStrategy->handler(), SecondStrategy::class);
    }
}