<?php

declare(strict_types=1);

namespace App\Structor\Proxy;

use App\Structor\Proxy\Interfaces\ModelInterface;

class ProxyUser
{
    public function __construct(
        public ModelInterface $model,
        public User $user
    ){}

    private function guards(): bool
    {
        if ($this->user->auth) {
            return true;
        }

        return false;
    }

    public function request(): int
    {
        if ($this->guards()) {
            return 200;
        }

        return 401;
    }
}