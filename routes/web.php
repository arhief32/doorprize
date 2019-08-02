<?php

use App\Doorprize;

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
    $doorprizes = Doorprize::all();
    // return view('welcome');
    return view('doorprize', [
        'doorprizes' => $doorprizes
    ]);
});

Route::resource('doorprize','DoorprizeController');
