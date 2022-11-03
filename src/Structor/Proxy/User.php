<?php

declare(strict_types=1);

namespace App\Structor\Proxy;

use App\Structor\Proxy\Interfaces\UserInterface;

class User implements UserInterface
{
    private $auth = true;  
    
    public function getAuth(): bool
    {
        return $this->auth;
    }
}