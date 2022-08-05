<?php

namespace Database\Seeders;

use App\Models\KabarDesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KabarDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KabarDesa::create([
            "judul" => "",
            "isi" => "",
            "gambar" => ""
        ]);
        KabarDesa::create([
            "judul" => "",
            "isi" => "",
            "gambar" => ""
        ]);
        KabarDesa::create([
            "judul" => "",
            "isi" => "",
            "gambar" => ""
        ]);
    }
}
