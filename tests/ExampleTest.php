<?php

namespace SapneshNaik\LaravelPurchasingPowerParity\Tests;

use Orchestra\Testbench\TestCase;
use SapneshNaik\LaravelPurchasingPowerParity\LaravelPurchasingPowerParityServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPurchasingPowerParityServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
