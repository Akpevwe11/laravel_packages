<?php
namespace Apprendable\FirstPackage\Facades;

use Illuminate\Support\Facades\Facade;

class FirstPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'first-package';
    }
}
?>