<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 樣板引擎1 127.0.0.1:8000/product
// views資料夾下的product資料夾下的pro.blade.php
Route::get('product', function () {
    return view('product.pro');
});

