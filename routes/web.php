<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\{
    AnggotaController,
    AssetController,
    BuildController,
    CommitmentController,
    DashboardController,
    FarmController,
    FeedsController,
    FilesController,
    HowtoController,
    KelompoktaniController,
    LandingController,
    MessengerController,
    PengajuanController,
    PksController,
    ProfilesController,
    PullsyncController,
    RegisterController,
    SklController,
    VerificationController,
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

// ====================== Start V.3.0 Routes ========================= //

//Login and logout
Route::get('/', function () {
    return view('welcome');
});

//v3 login
Route::view('/login', view: 'index');
Route::view('/logout', view: 'index');

//v30 starting from this line
//v3 landing
Route::get('/beranda', [LandingController::class, 'index'])->name('beranda');
Route::get('/beranda/executive', [LandingController::class, 'executive'])->name('beranda.executive');

//v3 dashboard data
Route::get('dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.admin');
Route::get('dashboard/verifikator', [DashboardController::class, 'verifikator'])->name('dashboard.verifikator');
Route::get('dashboard/user', [DashboardController::class, 'user'])->name('dashboard.user');

//v3 dashboard Peta
Route::get('pemetaan/admin', [DashboardController::class, 'peta_admin'])->name('pemetaan.admin');
Route::get('pemetaan/verifikator', [DashboardController::class, 'peta_verif'])->name('pemetaan.verifikator');
Route::get('pemetaan/user', [DashboardController::class, 'peta_user'])->name('pemetaan.user');

//v3 page Pullsync data from RIPH
Route::get('pullsync', [PullsyncController::class, 'index'])->name('pullsync');
Route::get('pullsync/detail', [PullsyncController::class, 'detail'])->name('pullsync.detail');
Route::get('pullsync/success', [PullsyncController::class, 'success'])->name('pullsync.success');
Route::get('pullsync/fail', [PullsyncController::class, 'fail'])->name('pullsync.fail');

//v3 Commitments (RIPH)
Route::get('commitment', [CommitmentController::class, 'index'])->name('commitment');
Route::get('commitment/detail', [CommitmentController::class, 'detail'])->name('commitment.detail');

// v3 pks-rencana tanam crud
Route::get('pks', [PksController::class, 'index'])->name('pks');
Route::get('pks/create', [PksController::class, 'create'])->name('pks.create');
Route::get('pks/show', [PksController::class, 'show'])->name('pks.show');
Route::get('pks/members', [PksController::class, 'members'])->name('pks.members');
Route::get('pks/saprodi', [PksController::class, 'saprodi'])->name('pks.saprodi');

//v3 farm management
Route::get('farm', [FarmController::class, 'index'])->name('farm');
Route::get('farm/create', [FarmController::class, 'create'])->name('farm.create');
Route::get('farm/show', [FarmController::class, 'show'])->name('farm.show');
Route::get('farm/notes', [FarmController::class, 'notes'])->name('farm.id.show');

//v3 - pengajuan verifikasi dan lunas
Route::get('pengajuan', [PengajuanController::class, 'index'])->name('pengajuan');
Route::get('pengajuan/vcheck', [PengajuanController::class, 'vcheck'])->name('pengajuan.vcheck');
Route::get('pengajuan/sklcheck', [PengajuanController::class, 'sklcheck'])->name('pengajuan.sklcheck');
Route::get('pengajuan/vsuccess', [PengajuanController::class, 'vsuccess'])->name('pengajuan.vsuccess');
Route::get('pengajuan/sklsuccess', [PengajuanController::class, 'sklsuccess'])->name('pengajuan.sklsuccess');
Route::get('pengajuan/vfail', [PengajuanController::class, 'vfail'])->name('pengajuan.vfail');
Route::get('pengajuan/sklfail', [PengajuanController::class, 'sklfail'])->name('pengajuan.sklfail');
Route::get('pengajuan/submitted', [PengajuanController::class, 'submitted'])->name('pengajuan.submitted');

//v3 - SKL 
Route::get('skl', [SklController::class, 'index'])->name('skl');
Route::get('skl/create', [SklController::class, 'create'])->name('skl.create');
Route::get('skl/show', [SklController::class, 'show'])->name('skl.show');
Route::get('userskl', [SklController::class, 'userskl'])->name('userskl.');
Route::get('userskl/formskl', [SklController::class, 'formskl'])->name('userskl.formskl');

//v3 - Files Management
Route::get('files', [FilesController::class, 'index'])->name('files');
Route::get('files/myfiles', [FilesController::class, 'myfiles'])->name('files.myfiles');
Route::get('files/mygalleries', [FilesController::class, 'mygalleries'])->name('files.mygalleries');
Route::get('files/templates/user', [FilesController::class, 'templates'])->name('files.templates');
Route::get('files/templates/admin', [FilesController::class, 'templates'])->name('files.templates');
Route::get('files/templates/admin/create', [FilesController::class, 'create'])->name('files.templates.create');
Route::get('files/templates/admin/show', [FilesController::class, 'create'])->name('files.templates.edit');

//v3 feeds
Route::get('feeds', [FeedsController::class, 'index'])->name('feeds');
Route::get('feeds/read', [FeedsController::class, 'read'])->name('feeds.read');
Route::get('feeds/create', [FeedsController::class, 'create'])->name('feeds.create');
Route::get('feeds/update', [FeedsController::class, 'update'])->name('feeds.update');

//v3 messenger
Route::get('messenger', [MessengerController::class, 'index'])->name('messenger');
Route::get('messenger/inbox', [MessengerController::class, 'inbox'])->name('messenger.inbox');
Route::get('messenger/outbox', [MessengerController::class, 'outbox'])->name('messenger.outbox');
Route::get('messenger/deleted', [MessengerController::class, 'trash'])->name('messenger.trash');
Route::get('messenger/create', [MessengerController::class, 'create'])->name('messenger.create');
Route::get('messenger/read', [MessengerController::class, 'read'])->name('messenger.read');

//v3 Verification
Route::get('verification', [VerificationController::class, 'index'])->name('verification');

Route::get('verification/onfarm', [VerificationController::class, 'onfarm'])->name('verification.onfarm');
Route::get('verification/onfarm/detail', [VerificationController::class, 'detail_onfarm'])->name('verification.onfarm.detail');
Route::get('verification/onfarm/add_sampling', [VerificationController::class, 'add_sampling'])->name('verification.onfarm.add_sampling');
Route::get('verification/onfarm/show_location', [VerificationController::class, 'update_sampling'])->name('verification.onfarm.show_sampling');

Route::get('verification/online', [VerificationController::class, 'online'])->name('verification.online');
Route::get('verification/online/detail', [VerificationController::class, 'detail_online'])->name('verification.online.detail');
Route::get('verification/online/add_check', [VerificationController::class, 'add_check'])->name('verification.online.add_check');
Route::get('verification/online/show_check', [VerificationController::class, 'show_check'])->name('verification.online.show_check');

Route::get('verification/skl', [VerificationController::class, 'skl'])->name('verification.skl');
Route::get('verification/skl/check', [VerificationController::class, 'skl_check'])->name('verification.skl.check');
Route::get('verification/skl/success', [VerificationController::class, 'skl_success'])->name('verification.skl.success');
Route::get('verification/skl/postponed', [VerificationController::class, 'skl_postponed'])->name('verification.skl.postponed');

Route::get('verification/completed', [VerificationController::class, 'completed'])->name('verification.completed');

//Assets Management
Route::get('asset', [AssetController::class, 'index'])->name('asset');
Route::get('asset/add', [AssetController::class, 'add'])->name('add');
Route::post('asset/store', [AssetController::class, 'store'])->name('store');
Route::get('asset/edit/{id}', [AssetController::class, 'edit'])->name('edit');
Route::put('asset/update/{id}', [AssetController::class, 'update'])->name('update');

//Users Management

//v3 Profiles
Route::get('profile', [ProfilesController::class, 'index'])->name('profile');
Route::get('profile/edit/{id}', [ProfilesController::class, 'edit'])->name('edit');
Route::get('profile/password', [ProfilesController::class, 'password'])->name('password');

// ====================== End V.3.0 Routes ========================= //


// ====================== Start V.2 Routes ========================= //
Route::get('/v2', function () {
    return view('v2');
});
//v2 registration
Route::get('/v2/register', [RegisterController::class, 'indexv2'])->name('v2.register');

//v2 landing
Route::get('/v2/beranda', [LandingController::class, 'indexv2'])->name('v2.beranda');

//v2 dashboard
Route::get('/v2/dashboard/user', [DashboardController::class, 'indexv2'])->name('v2.dashboard.user');
Route::get('/v2/pemetaan/user', [DashboardController::class, 'pemetaanv2'])->name('v2.pemetaan.user');

//v2 kelompoktani crud
Route::get('/v2/kelompoktani', [KelompoktaniController::class, 'indexv2'])->name('v2.kelompoktani');
Route::get('/v2/kelompoktani/create', [KelompoktaniController::class, 'createv2'])->name('v2.create');
Route::get('/v2/kelompoktani/show', [KelompoktaniController::class, 'showv2'])->name('v2.show');

//v2 anggota crud
Route::get('/v2/anggota_keltan', [AnggotaController::class, 'indexv2'])->name('v2.anggota');
Route::get('/v2/anggota_keltan/create', [AnggotaController::class, 'createv2'])->name('v2.anggota.create');
Route::get('/v2/anggota_keltan/show', [AnggotaController::class, 'showv2'])->name('v2.anggota.show');

//v2 riph crud, CommitmentController, sebelumnya bernama RiphController RIPH.
Route::get('/v2/commitment', [CommitmentController::class, 'indexv2'])->name('v2.commitment');
Route::get('/v2/commitment/detail', [CommitmentController::class, 'detailv2'])->name('v2.commitment.detail');
Route::get('/v2/commitment/create', [CommitmentController::class, 'createv2'])->name('v2.commitment.create');
Route::get('/v2/commitment/show', [CommitmentController::class, 'showv2'])->name('v2.commitment.show');

// v2 pks-rencana tanam crud
Route::get('/v2/pks', [PksController::class, 'indexv2'])->name('v2.pks');
Route::get('/v2/pks/create', [PksController::class, 'createv2'])->name('v2.pks.create');
Route::get('/v2/pks/show', [PksController::class, 'showv2'])->name('v2.pks.show');
Route::get('/v2/pks/members', [PksController::class, 'membersv2'])->name('v2.pks.members');
Route::get('/v2/pks/saprodi', [PksController::class, 'saprodiv2'])->name('v2.pks.saprodi');

//v2 farm management
Route::get('/v2/farm', [FarmController::class, 'indexv2'])->name('v2.farm');
Route::get('/v2/farm/create', [FarmController::class, 'createv2'])->name('v2.farm.create');
Route::get('/v2/farm/show', [FarmController::class, 'showv2'])->name('v2.farm.show');
Route::get('/v2/farm/notes', [FarmController::class, 'notesv2'])->name('v2.farm.notes');

//v2 - pengajuan verifikasi dan lunas
Route::get('/v2/pengajuan', [PengajuanController::class, 'indexv2'])->name('v2.pengajuan');
Route::get('/v2/pengajuan/vcheck', [PengajuanController::class, 'vcheckv2'])->name('v2.pengajuan.vcheck');
Route::get('/v2/pengajuan/sklcheck', [PengajuanController::class, 'sklcheckv2'])->name('v2.pengajuan.sklcheck');
Route::get('/v2/pengajuan/vsuccess', [PengajuanController::class, 'vsuccessv2'])->name('v2.pengajuan.vsuccess');
Route::get('/v2/pengajuan/sklsuccess', [PengajuanController::class, 'sklsuccessv2'])->name('v2.pengajuan.sklsuccess');
Route::get('/v2/pengajuan/vfail', [PengajuanController::class, 'vfailv2'])->name('v2.pengajuan.vfail');
Route::get('/v2/pengajuan/sklfail', [PengajuanController::class, 'sklfailv2'])->name('v2.pengajuan.sklfail');
Route::get('/v2/pengajuan/submitted', [PengajuanController::class, 'submittedv2'])->name('v2.pengajuan.submitted');

//v2 - SKL
Route::get('/v2/userskl', [SklController::class, 'indexv2'])->name('v2.skl');
Route::get('/v2/userskl/formskl', [SklController::class, 'formsklv2'])->name('v2.skl.formskl');

//v2 - Files Management -> list and download only
Route::get('/v2/files', [FilesController::class, 'indexv2'])->name('v2.files');
Route::get('/v2/files/myfiles', [FilesController::class, 'myfilesv2'])->name('v2.files.myfiles');
Route::get('/v2/files/mygalleries', [FilesController::class, 'mygalleriesv2'])->name('v2.files.mygalleries');
Route::get('/v2/files/templates', [FilesController::class, 'templatesv2'])->name('v2.files.templates');

//v2 feeds
Route::get('/v2/feeds', [FeedsController::class, 'indexv2'])->name('v2.feeds');
Route::get('/v2/feeds/read', [FeedsController::class, 'readv2'])->name('v2.feeds.read');

//v2 messenger
Route::get('/v2/messenger', [MessengerController::class, 'indexv2'])->name('v2.messenger');
Route::get('/v2/messenger/inbox', [MessengerController::class, 'inboxv2'])->name('v2.messenger.inbox');
Route::get('/v2/messenger/outbox', [MessengerController::class, 'outboxv2'])->name('v2.messenger.outbox');
Route::get('/v2/messenger/deleted', [MessengerController::class, 'trashv2'])->name('v2.messenger.trash');
Route::get('/v2/messenger/create', [MessengerController::class, 'createv2'])->name('v2.messenger.create');
Route::get('/v2/messenger/read', [MessengerController::class, 'readv2'])->name('v2.messenger.read');

//v2 profile
Route::get('/v2/myprofile', [ProfilesController::class, 'indexv2'])->name('v2.myprofile');
Route::get('/v2/myprofile/edit/{id}', [ProfilesController::class, 'editv2'])->name('v2.myprofile.edit');
Route::put('/v2/myprofile/update/{id}', [ProfilesController::class, 'updatev2'])->name('v2.myprofile.update');

//v2 documentation how to
Route::get('/v2/howto', [HowtoController::class, 'indexv2'])->name('v2.howto');
Route::get('/v2/howto/feed', [HowtoController::class, 'feedv2'])->name('v2.howto.feed');

// v2 documentation build
Route::get('/v2/build', [BuildController::class, 'indexv2'])->name('v2.build');
Route::get('/v2/build/feed', [BuildController::class, 'feedv2'])->name('v2.build.feed');
// ====================== End V.2 Routes ========================= //