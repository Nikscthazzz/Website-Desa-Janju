<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaApbdesController;
use App\Http\Controllers\KelolaLayananController;
use App\Http\Controllers\KelolaStatistikController;
use App\Http\Controllers\KelolaSuratKabarController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, "home"]);
Route::get('/profil-desa', [LandingController::class, "profilDesa"]);
Route::get('/statistik-desa', [LandingController::class, "statistikDesa"]);
Route::get('/apb-desa', [LandingController::class, "apbDesa"]);
Route::get('/layanan-desa', [LandingController::class, "layananDesa"]);
Route::get('/kabar-desa', [LandingController::class, "kabarDesa"]);
Route::get('/login', [AuthController::class, "login"])->name("login")->middleware("guest");
Route::post('/login', [AuthController::class, "loginAuth"]);
