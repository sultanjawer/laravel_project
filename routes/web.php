<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    LandingController,
    DashboardController,
    AssetController,
};


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
Route::get('beranda', [LandingController::class, 'index'])->name('beranda');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Assets Management
Route::get('asset', [AssetController::class, 'index'])->name('asset');
Route::get('asset/add', [AssetController::class, 'add'])->name('add');
Route::post('asset/store', [AssetController::class, 'store'])->name('store');
Route::get('asset/edit/{id}', [AssetController::class, 'edit'])->name('edit');
Route::put('asset/update/{id}', [AssetController::class, 'update'])->name('update');

//Profiles
Route::get('profiles', [ProfilesController::class, 'index'])->name('profiles');
Route::get('profiles/profile', [SettingsController::class, 'profile'])->name('profile');
Route::get('profiles/password', [SettingsController::class, 'password'])->name('password');
