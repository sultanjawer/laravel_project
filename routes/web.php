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
//Login and logout
Route::get('/', function () {
    return view('index');
});
Route::view('/logout', view: 'index');

//landing and dashboard
Route::get('beranda', '\App\Http\Controllers\LandingController@index')->name('beranda');
Route::get('dashboard', '\App\Http\Controllers\DashboardController@index')->name('dashboard');

//Assets Management
Route::get('asset', 'App\Http\Controllers\AssetController@index')->name('asset');
Route::get('asset/add', 'App\Http\Controllers\AssetController@add')->name('add');
Route::post('asset/store', 'App\Http\Controllers\AssetController@store')->name('store');
Route::get('asset/edit/{id}', 'App\Http\Controllers\AssetController@edit')->name('edit');
Route::put('asset/update/{id}', 'App\Http\Controllers\AssetController@update')->name('update');


//this one landing', 'LandingController@index'
//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//    Route::get('/', 'LandingController@index')->name('landing');
//});
