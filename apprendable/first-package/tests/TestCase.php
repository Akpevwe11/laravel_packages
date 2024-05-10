<?php

namespace Apprendable\FirstPackage\Tests;

use Apprendable\FirstPackage\RouteServiceProvider;
use Apprendable\FirstPackage\FirstPackageServiceProvider;
use Illuminate\Routing\Route;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    public function getPackageProviders($app)
    {
        return [
            FirstPackageServiceProvider::class,
            RouteServiceProvider::class
        ];
    }
    
    protected function getPackageAliases($app)
    {
        return [
            'FirstPackage' => \Apprendable\FirstPackage\Facades\FirstPackage::class
        ];
    }

}

?>