<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/about', function (){
   echo "<h2>This is About page</h2>";
});

Route::get('/contact', function (){
   echo "<h2>This is Contact page</h2>";
});

Route::get('/user-name/{name?}', function ($name = 'dung'){
    echo "<h2>This name is $name </h2>";
});

Route::namespace('App\Http\Controllers')->middleware('guest')->group(function (){
    Route::prefix('')->group(function (){
        Route::get('/', 'HomeController@index');
    });
});
