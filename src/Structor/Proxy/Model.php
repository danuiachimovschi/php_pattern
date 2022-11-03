<?php 

declare(strict_types=1);

namespace App\Structor\Proxy;

use App\Structor\Proxy\Interfaces\ModelInterface;

class Model implements ModelInterface
{
    public function query(): array
    {
        return [
            'id' => 1,
            'name' => 'Daniel'
        ];
    }
}