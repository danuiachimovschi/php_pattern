<?php

declare(strict_types=1);

namespace Tests\Structor\Composite;

use PHPUnit\Framework\TestCase;
use App\Structor\Composite\Product;
use App\Structor\Composite\Category;

class Test extends TestCase
{
    /**
     * @test 
    */
    public function get_components_from_tree()
    {
        $category = new Category;
        $category->add(new Product("toys"));
        $category->add(new Product("clothes"));

        $this->assertSame(2, $category->getCountOfBranches());
    }

}