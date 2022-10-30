<?php 

declare(strict_types=1);

namespace App\Creator\Builder;

use App\Creator\Builder\Interfaces\BuilderInterface;

class Director
{
    public function __construct(
        public BuilderInterface $builder
    ){}    

    public function getSheleton()
    {
        return $this->builder->product->getSkeleton();
    }

    public function runAll()
    {
        $this->builder->thirdMethod();
        $this->builder->thirdMethod();
        $this->builder->thirdMethod();
    }

    public function runMin()
    {
        $this->builder->firstMethod();
    }
}