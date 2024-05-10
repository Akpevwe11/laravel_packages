<?php

namespace Apprendable\FirstPackage\Tests\Unit;

use Apprendable\FirstPackage\Facades\FirstPackage;
use Apprendable\FirstPackage\Tests\TestCase;

class HelloTest extends TestCase
{

  
    /**
     * @test
     * 
     */
    function it_returns_the_message()
    {
        $this->assertEquals(
            "Hello george",
            FirstPackage::sayHello()
        );

    
    }

}

?>