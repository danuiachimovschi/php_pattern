<?php

declare(strict_types=1);

namespace App\Behavior\Chain;

use App\Behavior\Chain\Interfaces\Handler;

abstract class Chain implements Handler
{
    private $nextHandler;

    public function setChain(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handler($request): ?string
    {
        if($this->nextHandler){
            return $this->nextHandler->handler($request);
        }

        return null;
    }

}