<?php

namespace Apprendable\FirstPackage;
class Hello 
{

    protected $name; 

    public function __construct($name ='george')
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        return 'Hello ' . $this->name;
    }

}

?>