<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masyarakat::create([
            "user_id" => 1,
            "nik" => "38103219312381029",
            "nama_lengkap" => "NIKITA SAMANTHA",
            "jenis_kelamin" => "PEREMPUAN",
            "agama" => "ISLAM",
            "pendidikan" => "DIPLOMA IV/STRATA I",
            "status_pernikahan" => "BELUM KAWIN",
            "kewarganegaraan" => "WNI",
            "pekerjaan" => "FREELANCE"
        ]);
    }
}
