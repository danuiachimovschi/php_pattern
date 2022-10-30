<?php

declare(strict_types=1);

namespace App\Structor\Decorator;

class CoffeExtra extends Component
{
    public const PRICE = 10;

    public function getPrice(): int
    {
        return $this->decorator->getPrice() + self::PRICE;
    }

    public function getTitle(): string
    {
        return $this->decorator->getTitle() . ' with extra sugar';
    }
}