<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|Design Hieulespkt
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
<<<<<<< HEAD
Route::controller('admin','admin\layout');
Route::controller('admin','admin\layout');
Route::controller('admin','admin\layout');
=======

>>>>>>> origin/master
Route::controller('user','user\signin_login');