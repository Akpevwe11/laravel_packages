<?php


use Illuminate\Support\Facades\Route;


Route::namespace('Apprendable\FirstPackage\Http\Controllers')->group(function () {

    dd(config('first-package.route'));

    Route::get(config('first-package.route'), [Apprendable\FirstPackage\Http\Controller\HelloController::class, 'index']);
});




?>