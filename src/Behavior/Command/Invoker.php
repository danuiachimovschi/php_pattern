<?php

declare(strict_types=1);

namespace App\Behavior\Command;

use App\Behavior\Command\Interfaces\Command;

class Invoker
{
    public $rezult;

    private $start;

    private $end;

    public function setStart(Command $command)
    {
        $this->start = $command;
    }

    public function setEnd(Command $command)
    {
        $this->end = $command;
    }

    public function execute(): array
    {
        return [
            $this->start->execute('first'),
            'middle',
            $this->end->execute('end'),
        ];
    }
}