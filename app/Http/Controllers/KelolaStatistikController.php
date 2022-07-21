<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class KelolaStatistikController extends Controller
{
    public function kelolaStatistik()
    {
        $data = $this->getDataMasyarakat();
        $data["daftar_masyarakat"] = Masyarakat::all();
        return view("dashboard.kelola-statistik", compact("data"));
    }

    public function kelolaStatistikTambah(Request $request)
    {
        Masyarakat::create($request->all());
        return back()->with("pesan", "Berhasil menambahkan data masyarakat");
    }
    public function kelolaStatistikEdit(Masyarakat $masyarakat, Request $request)
    {
        $masyarakat->update($request->all());
        return back()->with("pesan", "Berhasil mengubah data masyarakat");
    }
    public function kelolaStatistikDelete(Masyarakat $masyarakat)
    {
        $masyarakat->delete();
        return back()->with("pesan", "Berhasil menghapus data masyarakat");
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
