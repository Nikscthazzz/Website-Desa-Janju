<?php

namespace App\Http\Controllers;

use App\Models\Apbdes;
use App\Models\KabarDesa;
use App\Models\LayananDesa;
use App\Models\Masyarakat;
use App\Models\Pengunjung;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function home()
    {
        Pengunjung::create([
            "tanggal" => date("Y-m-d")
        ]);

        $data = [];
        $data["mas_all"] = Masyarakat::all()->count();
        $data["mas_lk"] = Masyarakat::where("jenis_kelamin", "!=", "PEREMPUAN")->count();
        $data["mas_pr"] = Masyarakat::where("jenis_kelamin", "PEREMPUAN")->count();

        $data["kabar_desa"] = KabarDesa::take(3)->latest()->get();

        return view('landing.home', $data);
    }
    public function profilDesa()
    {
        $struktur_organisasi = StrukturOrganisasi::latest()->pluck("gambar")[0];
        return view('landing.profil-desa', compact("struktur_organisasi"));
    }
    public function statistikDesa()
    {
        $data = $this->getDataMasyarakat();
        $total = [];
        foreach ($data as $key => $value) {
            foreach ($value as $vl) {
                $total[$key][] = Masyarakat::where($key, $vl)->get()->count();
            }
            if ($key == "pekerjaan") {
                $total[$key][] = Masyarakat::whereNotIn("pekerjaan", $data["pekerjaan"])->get()->count();
                $data["pekerjaan"][] = "LAINNYA";
            }
        }
        return view('landing.statistik-desa', compact("data", "total"));
    }
    public function apbDesa()
    {
        $data = [];
        $data["Pendapatan Desa"] = [
            "data" => Apbdes::where("jenis", "Pendapatan Desa")->get(),
            "total" => [
                "anggaran" => Apbdes::select('anggaran')->where("jenis", "Pendapatan Desa")->sum('anggaran'),
                "realisasi" => Apbdes::select('realisasi')->where("jenis", "Pendapatan Desa")->sum('realisasi'),
            ]
        ];

        $data["Pembelanjaan Desa"] = [
            "data" => Apbdes::where("jenis", "Pembelanjaan Desa")->get(),
            "total" => [
                "anggaran" => Apbdes::select('anggaran')->where("jenis", "Pembelanjaan Desa")->sum('anggaran'),
                "realisasi" => Apbdes::select('realisasi')->where("jenis", "Pembelanjaan Desa")->sum('realisasi'),
            ]
        ];

        $data["Pelaksanaan Desa"] = [
            "data" => Apbdes::where("jenis", "Pelaksanaan Desa")->get(),
            "total" => [
                "anggaran" => Apbdes::select('anggaran')->where("jenis", "Pelaksanaan Desa")->sum('anggaran'),
                "realisasi" => Apbdes::select('realisasi')->where("jenis", "Pelaksanaan Desa")->sum('realisasi'),
            ]
        ];
        $tahun = Apbdes::select("tahun")->groupBy("tahun")->get();
        return view('landing.apb-desa', compact("data", "tahun"));
    }
    public function apbDesaData(Request $request)
    {
        $data = [];
        $data["Pendapatan Desa"] = [
            "data" => Apbdes::where("jenis", "Pendapatan Desa")->where("tahun", $request->tahun)->get(),
            "total" => [
                "anggaran" => Apbdes::select('anggaran')->where("jenis", "Pendapatan Desa")->where("tahun", $request->tahun)->sum('anggaran'),
                "realisasi" => Apbdes::select('realisasi')->where("jenis", "Pendapatan Desa")->where("tahun", $request->tahun)->sum('realisasi'),
            ]
        ];

        $data["Pembelanjaan Desa"] = [
            "data" => Apbdes::where("jenis", "Pembelanjaan Desa")->where("tahun", $request->tahun)->get(),
            "total" => [
                "anggaran" => Apbdes::select('anggaran')->where("jenis", "Pembelanjaan Desa")->where("tahun", $request->tahun)->sum('anggaran'),
                "realisasi" => Apbdes::select('realisasi')->where("jenis", "Pembelanjaan Desa")->where("tahun", $request->tahun)->sum('realisasi'),
            ]
        ];

        $data["Pelaksanaan Desa"] = [
            "data" => Apbdes::where("jenis", "Pelaksanaan Desa")->where("tahun", $request->tahun)->get(),
            "total" => [
                "anggaran" => Apbdes::select('anggaran')->where("jenis", "Pelaksanaan Desa")->where("tahun", $request->tahun)->sum('anggaran'),
                "realisasi" => Apbdes::select('realisasi')->where("jenis", "Pelaksanaan Desa")->where("tahun", $request->tahun)->sum('realisasi'),
            ]
        ];

        $html = "";
        foreach ($data as $key => $value) {
            $html .= "
            <h5><strong>$key</strong></h5>
            <table class='table table-striped table-sm mb-3' style='width:100%'>
                <thead>
                <tr>
                    <th>Uraian</th>
                    <th>Anggaran</th>
                    <th>Realisasi</th>
                </tr>
                </thead>
                <tbody>
            ";

            foreach ($value["data"] as $dt) {
                $html .= "
                <tr>
                    <td>$dt->nama</td>
                    <td>Rp. " . number_format($dt->anggaran, 2, ',', '.') . "</td>
                    <td>Rp. " . number_format($dt->realisasi, 2, ',', '.') . "</td>
                </tr>
                ";
            }

            $html .= "
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>Rp. " . number_format($value['total']['anggaran'], 2, ',', '.') . "</strong></td>
                        <td colspan='2'><strong>Rp. " . number_format($value['total']['realisasi'], 2, ',', '.') . "</strong></td>
                    </tr>
                </tbody>
            </table>
            ";
        }
        return response()->json($html);
    }
    public function layananDesa()
    {
        $layanan_desa = LayananDesa::all();
        return view("landing.layanan-desa", compact("layanan_desa"));
    }
    public function kabarDesa()
    {
        $kabar_desa = KabarDesa::latest()->get();
        return view("landing.kabar-desa", compact("kabar_desa"));
    }
    public function kabarDesaDetail(KabarDesa $kabar_desa)
    {
        return view("landing.detail-kabar-desa", compact("kabar_desa"));
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
            "SD/SEDERAJAT", "SLTP/SEDERAJAT", "SLTA/SEDERAJAT", "TIDAK/BELUM SEKOLAH", "SARJANA", "LAINNYA"
        ];
        $data["pekerjaan"] = [
            "MENGURUS RUMAH TANGGA", "PELAJAR/MAHASISWA", "PNS/ASN", "KARYAWAN SWASTA", "PEDAGANG", "PETANI"
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
