<?php

declare(strict_types=1);

namespace Tests\Proxy;

use App\Structor\Proxy\User;
use App\Structor\Proxy\Model;
use PHPUnit\Framework\TestCase;
use App\Structor\Proxy\ProxyUser;
use App\Structor\Proxy\SecondUser;

class Test extends TestCase
{
    /**
     * @test 
    */ 
    public function check_if_user_have_auth_to_this_modle()
    {
        $proxy = new ProxyUser(new Model, new User);
        $secondProxy = new ProxyUser(new Model, new SecondUser);

        $this->assertSame($proxy->request(), [
            'id' => 1,
            'name' => 'Daniel'
        ]);

        $this->assertSame($secondProxy->request(), 401);
    }

}