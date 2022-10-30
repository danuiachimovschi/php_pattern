<?php

declare(strict_types=1);

namespace App\Structor\Decorator;

use App\Structor\Decorator\Interfaces\ComponentInterface;

abstract class Component implements ComponentInterface
{
    public function __construct(
        protected Decorator $decorator 
    ){}
}