<?php 

declare(strict_types=1);

namespace App\Structor\DependencyInjection;

class Connection
{
    public function __construct(
        private string $host,
        private int $port,
        private string $user,
        private string $pass
    ){}

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getPass(): string
    {
        return $this->pass;
    }
}