<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OPSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NODISController;
use App\Http\Controllers\SPTugController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaftarKasusController;
use App\Http\Controllers\spAhliController;
use App\Http\Controllers\dataMasterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'can:Dashboard', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/menu')->middleware(['auth', 'role:Admin|User|Ahli|Mutu'])->group(static function() {
    Route::get('/daftarKasusPersuratan', [DaftarKasusController::class, 'indexDaftar'])->name('indexDaftar')->middleware('auth', 'verified');

    Route::get('printOps', [OPSController::class, 'printOPS'])->name('printOps')->middleware('auth', 'verified');
    Route::get('tug', [SPTugController::class, 'printTUG'])->name('printTug')->middleware('auth', 'verified');
    Route::get('printNodis', [NODISController::class, 'printNodis'])->name('printNodis')->middleware('auth', 'verified');
    Route::get('printAhli', [spAhliController::class, 'printAhli'])->name('printAhli')->middleware('auth', 'verified');
});

Route::prefix('/menu')->middleware(['auth', 'role:Admin|User'])->group(static function() {
    Route::get('/daftarKasus', [DaftarKasusController::class, 'index'])->name('daftarKasus')->middleware('auth', 'verified');
    Route::post('/daftarKasus', [DaftarKasusController::class, 'store'])->name('storedaftarKasus')->middleware('auth', 'verified');
    Route::get('/edit/{id}', [DaftarKasusController::class, 'inputDaftar'])->name('inputDaftar')->middleware('auth', 'verified');
    Route::post('update/{id}', [DaftarKasusController::class, 'updateDaftarKasus'])->name('updateDaftarKasus')->middleware('auth', 'verified');

    // Route::get('create', [DaftarKasusController::class, 'create'])->name('DaftarKasus.create')->middleware('auth', 'verified');
    Route::get('index', [OPSController::class, 'viewPrint'])->name('cetak')->middleware('auth', 'verified');
    Route::get('ops', [OPSController::class, 'index'])->name('SPOps')->middleware('auth', 'verified');
    Route::post('ops', [OPSController::class, 'store'])->name('create_ops')->middleware('auth', 'verified');
    Route::get('sptug', [SPTugController::class, 'index'])->name('SPTug')->middleware('auth', 'verified');
    Route::post('sptug', [SPTugController::class, 'store'])->name('create_tug')->middleware('auth', 'verified');
    Route::get('nodis', [NODISController::class, 'index'])->name('nodis')->middleware('auth', 'verified');
    Route::post('nodis', [NODISController::class, 'store'])->name('store')->middleware('auth', 'verified');
    Route::get('spAhli', [spAhliController::class, 'index'])->name('spAhli')->middleware('auth', 'verified');
    Route::post('spAhli', [spAhliController::class, 'store'])->name('spAhli')->middleware('auth', 'verified');
});

Route::prefix('/menu')->group(static function() {
    Route::get('kpi', [DaftarKasusController::class, 'indexKpi'])->name('kpi')->middleware('auth', 'verified');
    Route::get('tabulasi', [DaftarKasusController::class, 'tabulasi'])->name('tabulasi')->middleware('auth', 'verified');
    Route::get('tabulasiKasus', [DaftarKasusController::class, 'tabulasiIndex'])->name('tabulasiIndex')->middleware('auth', 'verified');
});

Route::prefix('word')->group(static function() {
    Route::get('ops/{ops}', [OPSController::class, 'cetak'])->name('cetakan')->middleware('auth', 'verified');
    Route::get('tug/{sptug}', [SPTugController::class, 'cetakan'])->name('cetakanTug')->middleware('auth', 'verified');
    Route::get('nodis/{nodis}', [NODISController::class, 'cetak'])->name('cetakNodis')->middleware('auth', 'verified');
    Route::get('ahli/{spahli}', [spAhliController::class, 'cetakAhli'])->name('cetakAhli')->middleware('auth', 'verified');
});

Route::prefix('dataMaster')->middleware(['auth', 'role:Admin|Mutu'])->group(static function() {
    Route::get('pejabat', [dataMasterController::class, 'indexPejabat'])->name('masterPejabat')->middleware('auth', 'verified');
    Route::get('dataPejabat', [dataMasterController::class, 'dataPejabat'])->name('dataPejabat')->middleware('auth', 'verified');
    Route::post('pejabat', [dataMasterController::class, 'storePejabat'])->name('storeMasterPejabat')->middleware('auth', 'verified');
    Route::get('editPejabat/{pejabat}', [dataMasterController::class, 'editPejabat'])->name('editPejabat')->middleware('auth', 'verified');
    Route::delete('/pejabat/{id}', [dataMasterController::class, 'destroyPejabat'])->name('destroyPejabat')->middleware('auth', 'verified');
    Route::post('updatePejabat/{id}', [dataMasterController::class, 'updatePejabat'])->name('updatePejabat')->middleware('auth', 'verified');


    Route::get('petugas', [dataMasterController::class, 'indexPetugas'])->name('masterPetugas')->middleware('auth', 'verified');
    Route::get('dataPetugas', [dataMasterController::class, 'dataPetugas'])->name('dataPetugas')->middleware('auth', 'verified');
    Route::post('petugas', [dataMasterController::class, 'storePetugas'])->name('storeMasterPetugas')->middleware('auth', 'verified');
    Route::delete('/petugas/{id}', [dataMasterController::class, 'destroyPetugas'])->name('destroyPetugas')->middleware('auth', 'verified');
    Route::get('editPetugas/{petugas}', [dataMasterController::class, 'editPetugas'])->name('editPetugas')->middleware('auth', 'verified');
    Route::post('updatePetugas/{petugas}', [dataMasterController::class, 'updatePetugas'])->name('updatePetugas')->middleware('auth', 'verified');

    Route::get('admin', [dataMasterController::class, 'indexAdmin'])->name('masterAdmin')->middleware('auth', 'verified');
    Route::get('editAdmin/{admin}', [dataMasterController::class, 'editAdmin'])->name('editAdmin')->middleware('auth', 'verified');
    Route::post('updateAdmin/{id}', [dataMasterController::class, 'updateAdmin'])->name('updateAdmin')->middleware('auth', 'verified');
});

require __DIR__.'/auth.php';
