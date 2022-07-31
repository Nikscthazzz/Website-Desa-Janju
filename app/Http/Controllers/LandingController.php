<?php

namespace App\Http\Controllers;

use App\Models\KabarDesa;
use App\Models\LayananDesa;
use App\Models\Masyarakat;
use App\Models\Pengunjung;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function home()
    {
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
        $data = $this->getDataMasyarakat();
        $total = [];
        foreach ($data as $key => $value) {
            foreach ($value as $vl) {
                $total[$key][] = Masyarakat::where($key, $vl)->get()->count();
            }
            if ($key == "pekerjaan") {
                $total[$key][] = Masyarakat::whereNotIn("pekerjaan", $data["pekerjaan"])->get()->count();
                $data["pekerjaan"][] = "LAINNYA";
            }
        }
        return view('landing.statistik-desa', compact("data", "total"));
    }
    public function apbDesa()
    {
        return view('landing.apb-desa');
    }
    public function layananDesa()
    {
        $layanan_desa = LayananDesa::all();
        return view("landing.layanan-desa", compact("layanan_desa"));
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

    private function getDataMasyarakat()
    {
        $data = [];

        $data["jenis_kelamin"] = [
            "LAKI-LAKI", "PEREMPUAN"
        ];
        $data["agama"] = [
            "ISLAM", "PROTESTAN", "KATOLIK", "HINDU", "BUDHA", "KONGHUCU", "LAINNYA"
        ];
        $data["pendidikan"] = [
            "SD", "SMP", "SMA", "DIPLOMA", "SARJANA", "LAINNYA"
        ];
        $data["pekerjaan"] = [
            "PENGURUS RUMAH TANGGA", "PELAJAR/MAHASISWA", "PNS/ASN", "KARYAWAN SWASTA", "PEDAGANG", "PETANI"
        ];
        $data["status_pernikahan"] = [
            "BELUM KAWIN", "KAWIN", "CERAI HIDUP", "CERAI MATI"
        ];
        $data["kewarganegaraan"] = [
            "WNI", "WNA"
        ];

        return $data;
    }
}
