<?php 

declare(strict_types=1);

namespace App\Behavior\Template;

abstract class Template
{
    public function handler()
    {
        return [
            $this->getOne(),
            $this->getTwo(),
            $this->getNumber()
        ];
    }

    public function getOne(): int
    {
        return 1;
    }

    public function getTwo(): int
    {
        return 2;
    }

    abstract public function getNumber(): int;
}