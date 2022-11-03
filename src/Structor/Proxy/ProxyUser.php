<?php

declare(strict_types=1);

namespace App\Structor\Proxy;

use App\Structor\Proxy\Interfaces\UserInterface;
use App\Structor\Proxy\Interfaces\ModelInterface;

class ProxyUser
{
    public function __construct(
        public ModelInterface $model,
        public UserInterface $user
    ){}

    private function guards(): bool
    {
        if ($this->user->getAuth()) {
            return true;
        }

        return false;
    }

    public function request(): int|array
    {
        if ($this->guards()) {
            return $this->model->query();
        }

        return 401;
    }
}