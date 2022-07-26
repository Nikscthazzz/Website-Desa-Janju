<?php

namespace App\Http\Controllers;

use App\Models\KabarDesa;
use App\Models\Masyarakat;
use App\Models\Pengunjung;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        // $data = Pengunjung::first();
        // return date("Y", strtotime($data->tanggal));
        Pengunjung::create([
            "tanggal" => date("Y-m-d")
        ]);

        $data = [];
        $data["mas_all"] = Masyarakat::all()->count();
        $data["mas_lk"] = Masyarakat::where("jenis_kelamin", "LAKI-LAKI")->count();
        $data["mas_pr"] = Masyarakat::where("jenis_kelamin", "PEREMPUAN")->count();

        $data["kabar_desa"] = KabarDesa::take(3);

        return view('landing.home', $data);
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
