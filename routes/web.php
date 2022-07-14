<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, "login"]);
Route::post('/login', [AuthController::class, "loginAuth"]);
