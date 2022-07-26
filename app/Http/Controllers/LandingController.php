<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        Pengunjung::create([
            "tanggal" => date("d-m-Y")
        ]);
        return view('landing.home');
    }
    public function profilDesa()
    {
        return view('landing.profil-desa');
    }
    public function statistikDesa()
    {
        return view('landing.statistik-desa');
    }
    public function apbDesa()
    {
        return view('landing.apb-desa');
    }
    public function layananDesa()
    {
        return view("landing.layanan-desa");
    }
    public function kabarDesa()
    {
        return view("landing.kabar-desa");
    }
}
