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

//Assets Management
Route::get('asset', [\App\Http\Controllers\AssetController::class, 'index'])->name(name: 'asset');
Route::get('asset/add', [\App\Http\Controllers\AssetController::class, 'add'])->name(name: 'add');
Route::post('asset/store', [\App\Http\Controllers\AssetController::class, 'store'])->name(name: 'store');
Route::get('asset/edit/{id}', [\App\Http\Controllers\AssetController::class, 'edit'])->name(name: 'edit');
Route::put('asset/update/{id}', [\App\Http\Controllers\AssetController::class, 'update'])->name(name: 'update');


//this one landing', 'LandingController@index'
//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//    Route::get('/', 'LandingController@index')->name('landing');
//});
