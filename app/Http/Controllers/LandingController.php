<?php

namespace App\Http\Controllers;

use App\Models\KabarDesa;
use App\Models\Masyarakat;
use App\Models\Pengunjung;
use App\Models\StrukturOrganisasi;
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

        $data["kabar_desa"] = KabarDesa::take(3)->get();

        return view('landing.home', $data);
    }
    public function profilDesa()
    {
        $struktur_organisasi = StrukturOrganisasi::latest()->pluck("gambar")[0];
        return view('landing.profil-desa', compact("struktur_organisasi"));
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
        $kabar_desa = KabarDesa::all();
        return view("landing.kabar-desa", compact("kabar_desa"));
    }
    public function kabarDesaDetail(KabarDesa $kabar_desa)
    {
        return view("landing.detail-kabar-desa", compact("kabar_desa"));
    }
}
