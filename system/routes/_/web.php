<?php

use App\Http\Controllers\Web\AgendaController;
use App\Http\Controllers\Web\BeritaController;
use App\Http\Controllers\Web\GaleriController;
use App\Http\Controllers\Web\ProfilController;
use App\Http\Controllers\Web\SaranaController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index']);
Route::get('detail-berita/{berita}',[WebController::class,'detailBerita']);

Route::get('tentang-dinas', [ProfilController::class, 'tentangDinas']);
Route::get('visi-misi', [ProfilController::class, 'visiMisi']);
Route::get('struktur-organisasi', [ProfilController::class, 'strukturOrganisasi']);

Route::get('sarana', [SaranaController::class, 'index']);

Route::get('agenda', [AgendaController::class, 'index']);

Route::get('berita', [BeritaController::class, 'index']);

Route::get('galeri-photo', [GaleriController::class, 'galeriPhoto']);
Route::get('galeri-video', [GaleriController::class, 'galeriVideo']);