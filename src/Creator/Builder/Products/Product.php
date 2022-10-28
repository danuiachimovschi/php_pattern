<?php 

namespace App\Creator\Builder\Products;

use App\Creator\Builder\Interfaces\AbleSkeleton;

//Also you can extend your logic of this Object
class Product implements AbleSkeleton
{
    public $skeleton = 10;

    public function getSkeleton(): int
    {
        return $this->skeleton;
    }
}