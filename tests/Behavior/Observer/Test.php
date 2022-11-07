<?php

declare(strict_types=1);

namespace Tests\Behavior\Observer;

use App\Behavior\Observer\Observer;
use App\Behavior\Observer\Subject;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    private $subject;
    private $observer;

    public function setUp(): void
    {
        parent::setUp();

        $this->subject = new Subject;
        $this->observer = new Observer;
        $this->subject->attach($this->observer);
    }

    /**
     * @test
     */

    public function chain_request_between_objects()
    {

        $this->subject->notify();
        $this->subject->notify();

        $this->assertSame(2, $this->subject::$instance);
    }

    /**
     * @test
     */

    public function detach_event_from_observer()
    {
        $this->subject->notify();

        $this->subject->detach($this->observer);
        $this->subject->notify();

        $this->assertSame(3, $this->subject::$instance);
    }
}