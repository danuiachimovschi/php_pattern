<?php

declare(strict_types=1);

namespace App\Behavior\Iterator;

use Traversable;
use IteratorAggregate;

class Products implements IteratorAggregate
{
    private $products = [];

    public function getItems(): array
    {
        return $this->products;
    }

    public function addItem(mixed $item): void
    {
        $this->products[] = $item;
    }

    public function getIterator(): Traversable
    {
        return new OrderIterator($this);
    }

    public function getReverseIterator(): Traversable
    {
        return new OrderIterator($this, true);
    }
}