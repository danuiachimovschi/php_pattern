<?php

declare(strict_types=1);

namespace Tests\Structor\DependecyInjection;

use App\Structor\DependencyInjection\Connection;
use App\Structor\DependencyInjection\Database;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */
    public function create_dns_for_connection()
    {
        $config = new Connection('127.0.0.1', 3306, 'root', 'root');
        $dsn = (new Database($config))->getDsn();

        $this->assertSame('root:root@127.0.0.1:3306', $dsn);
    }
}