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

Route::get('/', function () {
    return view('index');
});

Route::prefix('')->group(function (){
    Route::get('/customer', function (){
       return view('xem');
    });
});

Route::prefix('')->group(function () {
    Route::get('/sua', function (){
       return view('sua');
    });
});

Route::prefix('')->group(function (){
    Route::get('/xoa', function () {
       return view('xoa');
    });
});
Route::prefix('')->group(function (){
    Route::get('/add', function (){
       return view('add');
    });
});
Route::post('store', function (){

});

Route::get('{id}/show' , function (){

});

Route::get('{id}/edit', function (){

});

Route::patch('{id}/update', function (){

});

Route::delete('{id}', function (){

});

//Route::namespace('App\Http\Controllers')->middleware('guest')->group(function (){
//    Route::prefix('')->group(function () {
//        Route::resource('customers', 'CustomerController');
//    });
//});



