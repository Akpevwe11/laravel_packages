<?php

namespace Apprendable\FirstPackage\Tests\Feature;

use Apprendable\FirstPackage\Tests\TestCase;

class CanGetTheMessageTest extends TestCase
{
    /**
     * @test
     */
     function can_get_the_message()
     {
        $this->withoutExceptionHandling();

        $this->get('hello-route')->assertSee("Hello george");
     }

     /**
      *  @test
      * 
      */

      function can_get_the_message_through_a_view()
      {
        $this->withoutExceptionHandling();
        $this->get('hello-route')->assertViewIs("first-package::home");
      }




}

?>