<?php

namespace Database\Seeders;

use App\Models\Apbdes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class APBDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Apbdes::create([
        "tahun" => "2019",
        "jenis" => "Pendapatan Desa",
        "nama" => "Hasil Usaha Desa",
        "anggaran" => "7450000",
        "realisasi" => "7450000"
       ]);
       Apbdes::create([
        "tahun" => "2019",
        "jenis" => "Pendapatan Desa",
        "nama" => "Dana Desa",
        "anggaran" => "776143000",
        "realisasi" => "776143000"
       ]);
       Apbdes::create([
        "tahun" => "2019",
        "jenis" => "Pembelanjaan Desa",
        "nama" => "Penyelenggaraan Pemerintahan Desa",
        "anggaran" => "17450000",
        "realisasi" => "17450000"
       ]);
       Apbdes::create([
        "tahun" => "2019",
        "jenis" => "Pembelanjaan Desa",
        "nama" => "Pelaksanaan Pembangunan Desa",
        "anggaran" => "27450000",
        "realisasi" => "17450000"
       ]);
       Apbdes::create([
        "tahun" => "2019",
        "jenis" => "Pelaksanaan Desa",
        "nama" => "Pembiayaan SILPA Tahun Sebelumnya",
        "anggaran" => "27450000",
        "realisasi" => "27450000"
       ]);
       Apbdes::create([
        "tahun" => "2019",
        "jenis" => "Pelaksanaan Desa",
        "nama" => "Biaya Bantuan Bencana Alam",
        "anggaran" => "7450000",
        "realisasi" => "7450000"
       ]);
    }
}
