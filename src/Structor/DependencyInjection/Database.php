<?php 

declare(strict_types=1);

namespace App\Structor\DependencyInjection;

use App\Structor\DependencyInjection\Connection;

class Database
{
    public function __construct(
        private Connection $connection
    ){}

    public function getDsn()
    {
        return sprintf(
            "%s:%s@%s:%d",
            $this->connection->getUser(),
            $this->connection->getPass(),
            $this->connection->getHost(),
            $this->connection->getPort(),
        );
    }
}