<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Pegawai;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::controller(Admin\AuthController::class)->group(function () {
        Route::get('/login', 'loginHTML')->name('admin.login');
        Route::post('/login', 'loginSESS');
        Route::get('/logout', 'logoutSESS')->middleware('auth:admin')->name('admin.logout');
    });

    Route::controller(Admin\DashboardController::class)->group(function () {
        Route::get('/dashboard', 'indexHTML')->middleware('auth:admin')->name('admin.dashboard');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::group([
            'prefix' => 'pegawai',
            'controller' => Admin\PegawaiController::class
        ], function () {
            Route::get('/tambah', 'tambahPegawaiHTML')->name('admin.pegawai.tambah');
            Route::post('/tambah', 'tambahPegawaiDB');

            Route::get('/list', 'listPegawaiHTML')->name('admin.pegawai.list');

            Route::get('/edit/{pegawai}', 'editPegawaiHTML')->name('admin.pegawai.edit');
            Route::post('/edit/{pegawai}', 'editPegawaiDB');

            Route::post('/hapus/{pegawai}', 'hapusPegawaiDB');
        });

        Route::group([
            'prefix' => 'cuti',
            'controller' => Admin\CutiController::class
        ], function () {
            Route::get('/buat', 'buatCutiHTML')->name('admin.cuti.buat');
            Route::post('/buat', 'buatCutiDB');

            Route::get('/list', 'listCutiHTML')->name('admin.cuti.list');

            Route::get('/detail/{cuti}', 'detailCutiHTML')->name('admin.cuti.detail');

            Route::post('/approve/{cuti}', 'approveCutiDB')->name('admin.cuti.approve');
            Route::post('/reject/{cuti}', 'rejectCutiDB')->name('admin.cuti.reject');
        });
    });
});

Route::prefix('pegawai')->group(function() {
    Route::controller(Pegawai\AuthController::class)->group(function () {
        Route::get('/login', 'loginHTML')->name('pegawai.login');
        Route::post('/login', 'loginSESS');
        Route::get('/logout', 'logoutSESS')->middleware('auth:pegawai')->name('pegawai.logout');
    });

    Route::controller(Pegawai\DashboardController::class)->group(function () {
        Route::get('/dashboard', 'indexHTML')->middleware('auth:pegawai')->name('pegawai.dashboard');
    });

    Route::middleware('auth:pegawai')->group(function () {
        Route::group([
            'prefix' => 'cuti',
            'controller' => Pegawai\CutiController::class
        ], function () {
            Route::get('/ajukan', 'ajukanCutiHTML')->name('pegawai.cuti.ajukan');
            Route::post('/ajukan', 'ajukanCutiDB');

            Route::get('/riwayat', 'riwayatCutiHTML')->name('pegawai.cuti.riwayat');

            Route::get('/status/{cuti}', 'statusCutiHTML')->name('pegawai.cuti.status');
            Route::get('/status/{cuti}/suratizin', 'statusCutiSuratizinPDF')->name('pegawai.cuti.status.suratizin');
        });
    });
});

