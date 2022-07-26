<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function beranda()
    {
        $data["struktur_organisasi"] = StrukturOrganisasi::latest()->pluck("gambar")[0];
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
