<?php

declare(strict_types=1);

namespace Tests\Creator\Builder;

use PHPUnit\Framework\TestCase;
use App\Creator\Builder\Builder;
use App\Creator\Builder\Director;
use App\Creator\Builder\Products\Product;
use App\Creator\Builder\Products\SecondProduct;

class Test extends TestCase
{
    /**
     * @test
     */
    public function director_creates_equality_string_from_product()
    {
        //Create your own Builder with Director execute and Pro
        $builder = new Builder(new Product);
        $director = new Director($builder);     
        $director->runAll();
        $director->runMin();

        $this->assertEquals($director->getSheleton(), 20);

        $secondBuilder = new Builder(new SecondProduct);
        $secondDirector = new Director($secondBuilder);     
        $secondDirector->runAll();

        $this->assertEquals($secondDirector->getSheleton(), 9);
    }
}