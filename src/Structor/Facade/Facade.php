<?php

declare(strict_types=1);

namespace App\Structor\Facade;

use App\Structor\Facade\SystemA;
use App\Structor\Facade\SystemB;

class Facade
{
    public $result = [];

    public function __construct(
        private SystemA $systemA,
        private SystemB $systemB
    ){}

    public function handler()
    {
        $this->result = [
            $this->systemA->getResult(),
            $this->systemB->getResult()
        ];
    }
}