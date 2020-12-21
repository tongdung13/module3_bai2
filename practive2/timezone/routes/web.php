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
Route::get('/{timezone?}', function ($time_zone = null) {
    if (!empty($time_zone)) {
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

        $time->setTimezone(new DateTimeZone(str_replace('-', '/', $time_zone)));

        echo 'Múi giờ bạn chọn : ' . $time_zone . ' <br>Múi giờ hiện tại : ' . $time->format('d-m-Y H:i:s');
    }
    return view('index');
});
