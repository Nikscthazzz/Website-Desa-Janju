<?php 

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaApbdesController;
use App\Http\Controllers\KelolaLayananController;
use App\Http\Controllers\KelolaStatistikController;
use App\Http\Controllers\KelolaSuratKabarController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
  Route::prefix("dashboard")->group(function () {
    Route::get('/', [DashboardController::class, "beranda"]);

    Route::prefix("kelola-statistik")->controller(KelolaStatistikController::class)->group(function () {
      Route::get('/', "kelolaStatistik");
      Route::post('/tambah', "kelolaStatistikTambah");
      Route::post('/edit/{masyarakat}', "kelolaStatistikEdit");
      Route::delete('/delete/{masyarakat}', "kelolaStatistikDelete");
    });

    Route::prefix("kelola-apbdes")->controller(KelolaApbdesController::class)->group(function () {
      Route::get('/', "kelolaApbdes");
    });

    Route::prefix("kelola-layanan")->controller(KelolaLayananController::class)->group(function () {
      Route::get('/', "kelolaLayanan");
    });

    Route::prefix("kelola-surat-kabar")->controller(KelolaSuratKabarController::class)->group(function () {
      Route::get('/', "kelolaSuratKabar");
    });
  });

  Route::get('/logout', [AuthController::class, "logout"]);
});
