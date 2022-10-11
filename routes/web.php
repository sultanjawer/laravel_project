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

//Route::view('/', view: 'index');
//Route::view('/landing', view: 'admin.landing.index');
Route::view('/logout', view: 'index');
Route::get('beranda', [\App\Http\Controllers\LandingController::class, 'index'])->name(name: 'beranda');
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name(name: 'dashboard');

Route::get('asset', [\App\Http\Controllers\AssetController::class, 'index'])->name(name: 'asset');

Route::get('asset/create', [\App\Http\Controllers\AssetController::class, 'create'])->name(name: 'create');

//this one landing', 'LandingController@index'
//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//    Route::get('/', 'LandingController@index')->name('landing');
//});
