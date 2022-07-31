<?php

// $path    = './../routes/route_list';
// $files = scandir($path);
// $files = array_diff(scandir($path), array('.', '..'));
// foreach ($files as $file) {
//   require("route_list/" . $file);
// }


use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaApbdesController;
use App\Http\Controllers\KelolaLayananController;
use App\Http\Controllers\KelolaStatistikController;
use App\Http\Controllers\KelolaSuratKabarController;
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
Route::get('/kabar-desa/{kabar_desa}', [LandingController::class, "kabarDesaDetail"]);
Route::get('/login', [AuthController::class, "login"])->name("login")->middleware("guest");
Route::post('/login', [AuthController::class, "loginAuth"]);


Route::middleware(['auth'])->group(function () {
  Route::prefix("dashboard")->group(function () {
    Route::get('/', [DashboardController::class, "beranda"]);
    Route::post('/ubah-struktur-organisasi', [DashboardController::class, "ubahStrukturOrganisasi"]);

    Route::prefix("kelola-statistik")->controller(KelolaStatistikController::class)->group(function () {
      Route::get('/', "kelolaStatistik");
      Route::post('/tambah', "kelolaStatistikTambah");
      Route::post('/upload-csv', "kelolaStatistikUploadCsv");
      Route::post('/edit/{masyarakat}', "kelolaStatistikEdit");
      Route::delete('/delete/{masyarakat}', "kelolaStatistikDelete");
    });

    Route::prefix("kelola-apbdes")->controller(KelolaApbdesController::class)->group(function () {
      Route::get('/', "kelolaApbdes");
    });

    Route::prefix("kelola-layanan")->controller(KelolaLayananController::class)->group(function () {
      Route::get('/', "kelolaLayanan");
      Route::post('/tambah', "kelolaLayananTambah");
      Route::post('/edit/{layanan_desa}', "kelolaLayananEdit");
      Route::delete('/delete/{layanan_desa}', "kelolaLayananDelete");
    });

    Route::prefix("kelola-surat-kabar")->controller(KelolaSuratKabarController::class)->group(function () {
      Route::get('/', "kelolaSuratKabar");
      Route::post('/tambah', "kelolaSuratKabarTambah");
      Route::post('/edit/{kabar_desa}', "kelolaSuratKabarEdit");
      Route::delete('/delete/{kabar_desa}', "kelolaSuratKabarDelete");
    });
  });

  Route::get('/logout', [AuthController::class, "logout"]);
});
