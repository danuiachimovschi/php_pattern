<?php

declare(strict_types=1);

namespace Tests\Template;

use App\Behavior\Template\Product;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */
    public function get_template_data()
    {
        $template = new Product;

        $this->assertSame($template->handler(), [1, 2, 999]);
    }
}