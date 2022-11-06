<?php

declare(strict_types=1);

namespace App\Behavior\Chain;

class SecondProduct extends Chain
{
    public function handler($request): ?string
    {
        if ($request === "Shoes") {
            return "second product has this -> " . $request;
        }
        return parent::handler($request);
    }

}