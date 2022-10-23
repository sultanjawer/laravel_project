<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    LandingController,
    DashboardController,
    AssetController,
};
use \App\Http\Controllers\v2\{
    Dashboardv2Controller,
    KelompoktaniController,
    AnggotaController,
    RegisterController,
    RiphController,
    PksController,
    FarmController,
    PengajuanController,
    SklController,
    FilesController,
    FeedsController,
    MessengerController,
    MyprofileController,
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
//v2 registration
Route::get('/v2/register', [RegisterController::class, 'index'])->name('register');

//v2 dashboard and landing
Route::get('/v2/beranda', [Dashboardv2Controller::class, 'landing'])->name('beranda');
Route::get('/v2/dashboard', [Dashboardv2Controller::class, 'index'])->name('dashboard');
Route::get('/v2/pemetaan', [Dashboardv2Controller::class, 'pemetaan'])->name('pemetaan');

//v2 kelompoktani crud
Route::get('/v2/kelompoktani', [KelompoktaniController::class, 'index'])->name('kelompoktani');
Route::get('/v2/kelompoktani/create', [KelompoktaniController::class, 'create'])->name('create');
Route::get('/v2/kelompoktani/show', [KelompoktaniController::class, 'show'])->name('show');

//v2 anggota crud
Route::get('/v2/anggota_keltan', [AnggotaController::class, 'index'])->name('daftaranggota');
Route::get('/v2/anggota_keltan/create', [AnggotaController::class, 'create'])->name('create');
Route::get('/v2/anggota_keltan/show', [AnggotaController::class, 'show'])->name('show');

//landing and dashboard
Route::get('beranda', [LandingController::class, 'index'])->name('beranda');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//v2 riph crud
Route::get('/v2/riphlist', [RiphController::class, 'index'])->name('riphlist');
Route::get('/v2/riphlist/detail', [RiphController::class, 'detail'])->name('detail');
Route::get('/v2/riphlist/create', [RiphController::class, 'create'])->name('create');
Route::get('/v2/riphlist/show', [RiphController::class, 'show'])->name('show');

// v2 pks-rencana tanam crud
Route::get('/v2/pks', [PksController::class, 'index'])->name('pks');
Route::get('/v2/pks/create', [PksController::class, 'create'])->name('create');
Route::get('/v2/pks/show', [PksController::class, 'show'])->name('show');
Route::get('/v2/pks/members', [PksController::class, 'members'])->name('members');

//v2 farm management
Route::get('/v2/farm', [FarmController::class, 'index'])->name('pks');
Route::get('/v2/farm/create', [FarmController::class, 'create'])->name('create');
Route::get('/v2/farm/show', [FarmController::class, 'show'])->name('show');
Route::get('/v2/farm/notes', [FarmController::class, 'notes'])->name('notes');

//v2 - pengajuan verifikasi dan lunas
Route::get('/v2/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan');
Route::get('/v2/pengajuan/vcheck', [PengajuanController::class, 'vcheck'])->name('vcheck');
Route::get('/v2/pengajuan/sklcheck', [PengajuanController::class, 'sklcheck'])->name('sklcheck');
Route::get('/v2/pengajuan/vsuccess', [PengajuanController::class, 'vsuccess'])->name('vsuccess');
Route::get('/v2/pengajuan/sklsuccess', [PengajuanController::class, 'sklsuccess'])->name('sklsuccess');
Route::get('/v2/pengajuan/vfail', [PengajuanController::class, 'vfail'])->name('vfail');
Route::get('/v2/pengajuan/sklfail', [PengajuanController::class, 'sklfail'])->name('sklfail');
Route::get('/v2/pengajuan/submitted', [PengajuanController::class, 'submitted'])->name('submitted');

//v2 - SKL
Route::get('/v2/skl', [SklController::class, 'index'])->name('pengajuan');
Route::get('/v2/skl/formskl', [SklController::class, 'formskl'])->name('formskl');

//v2 - Files Management -> list and download only
Route::get('/v2/files', [FilesController::class, 'index'])->name('files');
Route::get('/v2/files/myfiles', [FilesController::class, 'myfiles'])->name('myfiles');
Route::get('/v2/files/mygalleries', [FilesController::class, 'mygalleries'])->name('mygalleries');
Route::get('/v2/files/templates', [FilesController::class, 'templates'])->name('templates');

//v2 feeds
Route::get('/v2/feeds', [FeedsController::class, 'index'])->name('feeds');
Route::get('/v2/feeds/read', [FeedsController::class, 'read'])->name('read');

//v2 messenger
Route::get('/v2/messenger', [MessengerController::class, 'index'])->name('messenger');
Route::get('/v2/messenger/inbox', [MessengerController::class, 'inbox'])->name('inbox');
Route::get('/v2/messenger/outbox', [MessengerController::class, 'outbox'])->name('outbox');
Route::get('/v2/messenger/deleted', [MessengerController::class, 'trash'])->name('trash');
Route::get('/v2/messenger/create', [MessengerController::class, 'create'])->name('create');
Route::get('/v2/messenger/read', [MessengerController::class, 'read'])->name('read');

//v2 profile
Route::get('/v2/myprofile', [MyprofileController::class, 'index'])->name('myprofile');
Route::get('/v2/myprofile/edit/{id}', [MyprofileController::class, 'edit'])->name('edit');
Route::put('/v2/myprofile/update/{id}', [MyprofileController::class, 'update'])->name('update');



//Assets Management
Route::get('asset', [AssetController::class, 'index'])->name('asset');
Route::get('asset/add', [AssetController::class, 'add'])->name('add');
Route::post('asset/store', [AssetController::class, 'store'])->name('store');
Route::get('asset/edit', [AssetController::class, 'edit'])->name('edit');
Route::put('asset/update', [AssetController::class, 'update'])->name('update');
