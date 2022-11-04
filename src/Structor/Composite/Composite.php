<?php

declare(strict_types=1);

namespace App\Structor\Composite;

use SplObjectStorage;

class Composite extends Component
{
    protected $child;

    public function __construct(){
        $this->child = new SplObjectStorage;
    }

    public function add(Component $component): void
    {
        $this->child->attach($component);
        $this->setParent($this);
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function remove(Component $component): void
    {
        $this->child->attach($component);
        $this->setParent(null);       
    }

    public function handler(): string
    {
        return "";
    }
}