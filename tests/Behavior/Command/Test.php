<?php

declare(strict_types=1);

namespace Tests\Behavior\Command;

use PHPUnit\Framework\TestCase;
use App\Behavior\Command\Invoker;
use App\Behavior\Command\SimpleCommand;

class Test extends TestCase
{
    /**
     * @test
     */
    public function execute_simple_command()
    {
        $invoker = new Invoker;
        $invoker->setStart(new SimpleCommand('first'));
        $invoker->setEnd(new SimpleCommand('second'));

        $this->assertSame($invoker->execute(), [
            0 => 'first',
            1 => 'middle',
            2 => 'second',
        ]);
    }
}