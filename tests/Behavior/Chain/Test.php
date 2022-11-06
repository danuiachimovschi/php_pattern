<?php

declare(strict_types=1);

namespace Tests\Behavior\Chain;

use App\Behavior\Chain\Category;
use App\Behavior\Chain\Product;
use App\Behavior\Chain\SecondProduct;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @test
     */

    public function chain_request_between_objects()
    {
        $category = new Category;
        $product = new Product;
        $secondProduct = new SecondProduct;

        $category->setChain($product)->setChain($secondProduct);

        $this->assertNull($category->handler("Blue Cap"));
        $this->assertSame($category->handler("Cap"), "product has this -> Cap");
    }
}