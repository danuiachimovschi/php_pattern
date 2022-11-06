<?php

declare(strict_types=1);

namespace App\Behavior\Chain;

class Product extends Chain
{
    public function handler($request): ?string
    {
        if ($request === "Cap") {
            return "product has this -> " . $request;
        }
        return parent::handler($request);
    }

}