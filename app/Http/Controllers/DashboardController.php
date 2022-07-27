<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengunjung;
use App\Models\StrukturOrganisasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function beranda()
    {
        $data["struktur_organisasi"] = StrukturOrganisasi::latest()->pluck("gambar")[0];

        $tanggal = date("Y-m-d");
        $tanggalKemarin =  date('Y-m-d', strtotime("-1 days"));
        $bulanKemarin =  date('m', strtotime("-1 months"));
        $data["grafik"] = [
            "hari" => [
                "nilai" => Pengunjung::where("tanggal", $tanggal)->get()->count(),
                "selisih" => Pengunjung::where("tanggal", $tanggal)->get()->count() - Pengunjung::where("tanggal", $tanggalKemarin)->get()->count()
            ],
            "bulan" => [
                "nilai" => Pengunjung::whereMonth("tanggal", date("m"))->whereYear("tanggal", date("Y"))->get()->count(),
                "selisih" => Pengunjung::whereMonth("tanggal", date("m"))->whereYear("tanggal", date("Y"))->get()->count() - Pengunjung::whereMonth("tanggal", $bulanKemarin)->whereYear("tanggal", date("Y"))->get()->count()
            ],
            "total" => Pengunjung::all()->count()
        ];
        return view("dashboard.beranda", $data);
    }

    public function ubahStrukturOrganisasi(Request $request)
    {
        $request->file("gambar")->storeAs("public/struktur_organisasi", $request->file("gambar")->getClientOriginalName());

        StrukturOrganisasi::create([
            "user_id" => Auth::user()->id,
            "gambar" => $request->file("gambar")->getClientOriginalName()
        ]);
        return back()->with("pesan", "Berhasil mengubah struktur organisasi");
    }
}
