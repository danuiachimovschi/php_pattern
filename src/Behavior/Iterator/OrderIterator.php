<?php 

declare(strict_types=1);

namespace App\Behavior\Iterator;

use SebastianBergmann\FileIterator\Iterator;

class OrderIterator extends Iterator
{
    private $position = 0;

    private $reverse = false;

    public function __construct(
        private $collection
    ){}

    public function current(): mixed
    {
        return $this->collection->getItems()[$this->position];   
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position += $this->reverse ? -1 : 1;
    }

    public function rewind(): void
    {
        $this->position = $this->reverse ? count($this->collection->getItems) : 0;
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }

}