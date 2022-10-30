<?php 

declare(strict_types=1);

namespace App\Creator\Builder\Products;

use App\Creator\Builder\Interfaces\AbleSkeleton;

//Also you can extend your logic of this Object
class SecondProduct implements AbleSkeleton
{
    public $skeleton = 0;

    public function getSkeleton(): int
    {
        return $this->skeleton;
    }
}