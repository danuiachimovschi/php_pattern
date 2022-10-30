<?php 

declare(strict_types=1);

namespace App\Creator\Factory\Products;

//Your Buisness Logic
class SecondProduct 
{
    public function __construct(
        public $name = "second Product"
    ){}
}