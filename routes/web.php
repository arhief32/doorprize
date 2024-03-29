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


/**
 * NEW EDIT
 */
// Voucher Belanja
Route::get('voucher-belanja', 'VoucherBelanjaController@index');
Route::get('voucher-belanja/update/{nomor}', 'VoucherBelanjaController@update');
Route::get('voucher-belanja/reset', 'VoucherBelanjaController@reset');



Route::get('sepeda-motor','SepedaMotorController@index');
Route::post('sepeda-motor','SepedaMotorController@update');
Route::get('sepeda-motor/reset','SepedaMotorController@reset');

Route::get('smartphone','SmartPhoneController@index');
Route::post('smartphone','SmartPhoneController@update');
Route::get('smartphone/reset','SmartPhoneController@reset');

Route::get('sepeda-gowes','SepedaGowesController@index');
Route::post('sepeda-gowes','SepedaGowesController@update');
Route::get('sepeda-gowes/reset','SepedaGowesController@reset');