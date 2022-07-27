<?php

namespace App\Http\Controllers;

use App\Models\LayananDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaLayananController extends Controller
{
    public function kelolaLayanan()
    {
        $layanan_desa = LayananDesa::all();
        return view("dashboard.kelola-layanan", compact("layanan_desa"));
    }
    public function kelolaLayananTambah(Request $request)
    {
        $request["user_id"] = Auth::user()->id;
        LayananDesa::create($request->all());
        return back()->with("pesan", "Berhasil menambahkan data layanan desa");
    }
    public function kelolaLayananEdit(LayananDesa $layanan_desa, Request $request)
    {
        $request["user_id"] = Auth::user()->id;
        $layanan_desa->update($request->all());
        return back()->with("pesan", "Berhasil mengubah data layanan desa");
    }
    public function kelolaLayananDelete(LayananDesa $layanan_desa)
    {
        $layanan_desa->delete();
        return back()->with("pesan", "Berhasil menghapus data layanan desa");
    }
}
