<?php
/**
 * Created by PhpStorm.
 * User: zev
 * Date: 2017/9/14
 * Time: 23:17
 */


\Illuminate\Support\Facades\Route::group(['middleware' => ['web'], 'prefix' => 'myModel'], function ()
{
    \Illuminate\Support\Facades\Route::resource('welcome','\Zev\MyModel\Controllers\WelcomeController');
});