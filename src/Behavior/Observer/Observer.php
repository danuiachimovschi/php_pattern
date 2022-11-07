<?php

declare(strict_types=1);

namespace App\Behavior\Observer;

use SplObserver;

class Observer implements SplObserver
{
    public function update(\SplSubject $subject): void
    {
        ++$subject::$instance;
    }
}