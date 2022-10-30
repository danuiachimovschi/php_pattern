<?php

declare(strict_types=1);

namespace App\Creator\Builder;

use App\Creator\Builder\Interfaces\AbleSkeleton;
use App\Creator\Builder\Interfaces\BuilderInterface;

class Builder implements BuilderInterface
{
    public function __construct(
        public AbleSkeleton $product  
    ){}

    public function firstMethod(): void
    {
        $this->product->skeleton +=  1;
    }

    public function secondMethod(): void
    {
        $this->product->skeleton +=  2;
    }

    public function thirdMethod(): void
    {
        $this->product->skeleton +=  3;
    }

}