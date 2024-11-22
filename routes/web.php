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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('index');
})->name("index");
Route::get('/destination', 'App\Http\Controllers\DestinationController@list_destinations')->name("destination");

Route::get('/circuit','App\Http\Controllers\CircuitController@list_circuits')->name("circuit");
Route::get('/search', function () {
    return view('adminpanel');
})->name("search");
Route::resource('/ajoute-des', 'App\Http\Controllers\DestinationController')->middleware('auth');
Route::resource('/ajoute-circuit', 'App\Http\Controllers\CircuitController')->middleware('auth');
//Route::get('/ajoute-des', 'App\Http\Controllers\DestinationController@index')->name("ajoute_des");;
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
