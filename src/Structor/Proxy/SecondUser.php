<?php

declare(strict_types=1);

namespace App\Structor\Proxy;

use App\Structor\Proxy\Interfaces\UserInterface;

class SecondUser implements UserInterface
{ 
    private $auth = false;

    public function getAuth(): bool
    {
        return $this->auth;
    }
}