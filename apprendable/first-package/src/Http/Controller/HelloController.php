<?php

namespace Apprendable\FirstPackage\Http\Controller;

use Apprendable\FirstPackage\Facades\FirstPackage;

class HelloController
{
    public function index()
    {
        //return FirstPackage::sayHello();

        return view('first-package::home', [
            'message' => FirstPackage::sayHello()
        ]);
    }

}


?>