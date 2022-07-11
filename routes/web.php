<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\MainController@index')
->name ('home');

Route::get('categories', 'App\Http\Controllers\MainController@categories')
->name ('cat');

Route::get('mobils', 'App\Http\Controllers\MainController@category')
->name ('category');

Route::get('mobiles', 'App\Http\Controllers\MainController@product')
->name ('mob');

//Route::get('/', function () {
//    return view('index');
//)->name ('mob');
//
//Route::get('categories', function () {
//    return view('categories');
//})->name ('cat');
//
//Route::get('mobiles', function () {
//    return view('product');
//})->name ('mob');


