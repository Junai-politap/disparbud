<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriPotoController;
use App\Http\Controllers\Admin\GaleriVideoController;
use App\Http\Controllers\Admin\SaranaController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\StrukturOrganisasiController;
use App\Http\Controllers\Admin\TentangDinasController;
use App\Http\Controllers\Admin\VisiMisiController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'base']);

    Route::resource('admin', AdminController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('sarana', SaranaController::class);
    Route::resource('slide', SlideController::class);
    
    Route::resource('tentang-dinas', TentangDinasController::class);
    Route::resource('struktur-organisasi', StrukturOrganisasiController::class);
    
    Route::resource('galeri-poto', GaleriPotoController::class);
    Route::resource('galeri-video', GaleriVideoController::class);

    Route::get('visi-misi', [VisiMisiController::class, 'index']);
    Route::post('visi-misi/store-visi', [VisiMisiController::class, 'storeVisi']);
    Route::post('visi-misi/store-misi', [VisiMisiController::class, 'storeMisi']);
    Route::put('visi-misi/{visi}/update-visi', [VisiMisiController::class, 'updateVisi']);
    Route::put('visi-misi/{misi}/update-misi', [VisiMisiController::class, 'updateMisi']);
    Route::get('visi-misi/delete-visi/{visi}', [VisiMisiController::class, 'destroyVisi']);
    Route::get('visi-misi/delete-misi/{misi}', [VisiMisiController::class, 'destroyMisi']);
    
});
