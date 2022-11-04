<?php

declare(strict_types=1);

namespace App\Creator\Prototype;

class CloneAble
{
    public $cloneObject;
    
    public function __clone()
    {
        $this->cloneObject = clone $this->cloneObject;
    }
}