<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function beranda()
    {
        return view("dashboard.beranda");
    }

    public function kelolaStatistik()
    {
        $data = $this->getDataMasyarakat();
        $data["daftar_masyarakat"] = [
            [
                "nik" => "38103219312381029",
                "nama_lengkap" => "sallie mansurina",
                "jenis_kelamin" => "LAKI-LAKI",
                "agama" => "ISLAM",
                "pendidikan" => "SARJANA",
                "status_pernikahan" => "BELUM KAWIN",
                "kewarganegaraan" => "WNI",
                "pekerjaan" => "FREELANCE"
            ],
            [
                "nik" => "38103219312381029",
                "nama_lengkap" => "sallie mansurina",
                "jenis_kelamin" => "LAKI-LAKI",
                "agama" => "ISLAM",
                "pendidikan" => "SARJANA",
                "status_pernikahan" => "BELUM KAWIN",
                "kewarganegaraan" => "WNI",
                "pekerjaan" => "FREELANCE"
            ],
        ];
        return view("dashboard.kelola-statistik", compact("data"));
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
        $data["status_pernikahan"] = [
            "BELUM KAWIN", "KAWIN", "CERAI HIDUP", "CERAI MATI"
        ];
        $data["kewarganegaraan"] = [
            "WNI", "WNA"
        ];

        return $data;
    }
}
