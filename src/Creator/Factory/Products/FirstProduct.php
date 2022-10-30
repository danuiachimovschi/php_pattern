<?php

declare(strict_types=1);

namespace App\Creator\Factory\Products;

//Your Buisness Logic
class FirstProduct
{
    public function __construct(
        public $name = "first Product"
    ){}
}