<?php

namespace Database\Seeders;

use App\Models\LayananDesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LayananDesa::create([
            "nama" => "Layanan Surat",
            "tautan" => "https://kusamba.desa.id/online/"
        ]);
    }
}
