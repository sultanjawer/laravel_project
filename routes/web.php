<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    LandingController,
    DashboardController,
    AssetController,
    ProfilesController,
    V2Controller,
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
    return view('welcome');
});

//v3 login
Route::view('/login', view: 'index');
Route::view('/logout', view: 'index');

//simethrisv2
Route::get('/v2', function () {
    return view('v2');
});
Route::get('/v2/register', [V2Controller::class, 'register'])->name('register');
Route::get('/v2/beranda', [V2Controller::class, 'beranda'])->name('beranda');
Route::get('/v2/dashboard', [V2Controller::class, 'dashboard'])->name('dashboard');
Route::get('/v2/pemetaan', [V2Controller::class, 'pemetaan'])->name('pemetaan');
Route::get('/v2/riphlist', [V2Controller::class, 'riphlist'])->name('riphlist');
Route::get('/v2/riphlist/detail', [V2Controller::class, 'riphdetail'])->name('riphdetail');
Route::get('/v2/riphlist/add', [V2Controller::class, 'add_riph'])->name('add_riph');
Route::get('/v2/riphlist/edit', [V2Controller::class, 'edit_riph'])->name('edit_riph');
Route::get('/v2/kelompoktani', [V2Controller::class, 'kelompoktani'])->name('kelompoktani');
Route::get('/v2/kelompoktani/add', [V2Controller::class, 'kelompoktani_add'])->name('kelompoktani_add');

//landing and dashboard
Route::get('beranda', [LandingController::class, 'index'])->name('beranda');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Assets Management
Route::get('asset', [AssetController::class, 'index'])->name('asset');
Route::get('asset/add', [AssetController::class, 'add'])->name('add');
Route::post('asset/store', [AssetController::class, 'store'])->name('store');
Route::get('asset/edit/{id}', [AssetController::class, 'edit'])->name('edit');
Route::put('asset/update/{id}', [AssetController::class, 'update'])->name('update');

//Users Management

//Profiles
Route::get('profile', [ProfilesController::class, 'index'])->name('profile');
Route::get('profile/edit/{id}', [ProfilesController::class, 'edit'])->name('edit');
Route::get('profile/password', [ProfilesController::class, 'password'])->name('password');
