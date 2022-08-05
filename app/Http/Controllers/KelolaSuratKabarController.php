<?php

namespace App\Http\Controllers;

use App\Models\KabarDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaSuratKabarController extends Controller
{
    public function kelolaSuratKabar()
    {
        $kabar_desa = KabarDesa::latest()->get();
        return view("dashboard.kelola-surat-kabar", compact("kabar_desa"));
    }
    public function kelolaSuratKabarTambah(Request $request)
    {
        $request["user_id"] = Auth::user()->id;
        $request["gambar"] = $request->file("gambar_file")->getClientOriginalName();
        $request->file("gambar_file")->storeAs("public/kabar_desa", $request->file("gambar_file")->getClientOriginalName());
        KabarDesa::create($request->all());
        return back()->with("pesan", "Berhasil menambahkan kabar desa");
    }
    public function kelolaSuratKabarEdit(KabarDesa $kabar_desa, Request $request)
    {
        $request["user_id"] = Auth::user()->id;
        if ($request->gambar_file) {
            $request->file("gambar_file")->storeAs("public/kabar_desa", $request->file("gambar_file")->getClientOriginalName());
            $request["gambar"] = $request->file("gambar_file")->getClientOriginalName();
        } else {
            $request["gambar"] = $kabar_desa->gambar;
        }
        $kabar_desa->update($request->all());
        return back()->with("pesan", "Berhasil mengubah kabar desa");
    }
    public function kelolaSuratKabarDelete(KabarDesa $kabar_desa)
    {
        $kabar_desa->delete();
        return back()->with("pesan", "Berhasil menghapus kabar desa");
    }
}
