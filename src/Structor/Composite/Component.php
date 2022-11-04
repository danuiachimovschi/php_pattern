<?php

declare(strict_types=1);

namespace App\Structor\Composite;

abstract class Component
{
    protected $parent;

    public function setParent(?Component $component)
    {
        $this->parent = $component;    
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function isComposite(): bool
    {
        return false;
    }

    public function add(Component $component): void {}

    public function remove(Component $component): void {}

    abstract public function handler(): string;
}
