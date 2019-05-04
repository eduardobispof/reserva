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
})->name('home');

Auth::routes();

Route::prefix('reserva')->group(function () {
    Route::post('/store', 'ReservaController@store')->name('reserva-store');
});

Route::get('/home', 'ReservaController@index');

Route::resource('tipos', 'TiposController');

Route::resource('equipamentos', 'EquipamentosController');