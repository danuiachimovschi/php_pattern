<?php

declare(strict_types=1);

namespace App\Behavior\Chain;

class Category extends Chain
{
    public function handler($request): ?string
    {
        if ($request === "Clothes") {
            return "we don`t have this " . $request;
        }
        return parent::handler($request);
    }

}