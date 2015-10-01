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
// chieu chieu hieu ngoi nho long nach ben bo song 
// thay co tang tinh dang tam
Route::controller('admin','admin\layout');

Route::controller('user','user\signin_login');