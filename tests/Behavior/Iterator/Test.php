<?php

declare(strict_types=1);

namespace Tests\Behavior\Iterator;

use App\Behavior\Iterator\Products;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    private $i;

    public function setUp(): void
    {
        $this->i = 0;
    }
    /**
     * @test
     */
    public function create_products_iterator()
    {
        $products = new Products;

        $products->addItem(1);
        $products->addItem(2);
        $products->addItem(3);

        $iterator = $products->getIterator();
        
        foreach($iterator as $item)
        {
            ++$this->i;
            $this->assertSame($this->i, $item);
        }
    }
}