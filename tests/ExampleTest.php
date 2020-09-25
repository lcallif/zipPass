<?php

namespace YourPersonalInformation\ZipPass\Tests;

use Orchestra\Testbench\TestCase;
use YourPersonalInformation\ZipPass\ZipPassServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ZipPassServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
