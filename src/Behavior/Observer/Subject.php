<?php

declare(strict_types=1);

namespace App\Behavior\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Subject implements SplSubject
{
    public static $instance = 0;
    
    public function __construct(
        private $observers = new SplObjectStorage
    ){}

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function notify(): void
    {
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }

    public function getState(): int
    {
        return 1;
    }
}