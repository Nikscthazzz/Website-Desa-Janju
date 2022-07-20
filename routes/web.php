<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, "home"]);
Route::get('/profil-desa', [LandingController::class, "profilDesa"]);
Route::get('/statistik-desa', [LandingController::class, "statistikDesa"]);
Route::get('/apb-desa', [LandingController::class, "apbDesa"]);
Route::get('/layanan-desa', [LandingController::class, "layananDesa"]);
Route::get('/kabar-desa', [LandingController::class, "kabarDesa"]);

Route::get('/login', [AuthController::class, "login"])->name("login")->middleware("guest");
Route::post('/login', [AuthController::class, "loginAuth"]);

Route::middleware(['auth'])->group(function () {
  Route::prefix("dashboard")->group(function () {
    Route::get('/', [DashboardController::class, "beranda"]);

    Route::prefix("kelola-statistik")->group(function () {
      Route::get('/', [DashboardController::class, "kelolaStatistik"]);
      Route::post('/tambah', [DashboardController::class, "kelolaStatistikTambah"]);
      Route::post('/edit/{masyarakat}', [DashboardController::class, "kelolaStatistikEdit"]);
      Route::delete('/delete/{masyarakat}', [DashboardController::class, "kelolaStatistikDelete"]);
    });
  });

  Route::get('/logout', [AuthController::class, "logout"]);
});
