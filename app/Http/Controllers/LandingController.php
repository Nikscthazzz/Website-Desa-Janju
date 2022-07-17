<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
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
}
