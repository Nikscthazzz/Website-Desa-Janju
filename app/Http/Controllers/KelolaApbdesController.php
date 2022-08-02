<?php

namespace App\Http\Controllers;

use App\Models\Apbdes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KelolaApbdesController extends Controller
{
    public function kelolaApbdes()
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
        return view("dashboard.kelola-apbdes", compact("data", "tahun"));
    }

    public function kelolaApbdesData(Request $request)
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
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
            ";

            foreach ($value["data"] as $dt) {
                $html .= "
                <tr>
                    <td>$dt->nama</td>
                    <td>Rp. $dt->anggaran</td>
                    <td>Rp. $dt->realisasi</td>
                    <td>
                    <div class='d-flex'>
                        <button type='button' class='btn btn-primary me-1' data-bs-toggle='modal' data-bs-target='#edit-'>
                        <i class='fa fa-pen-to-square'></i>
                        </button>
                        <button type='button' class='btn btn-danger me-1' data-bs-toggle='modal' data-bs-target='#hapus-'>
                        <i class='fa fa-trash-can'></i>
                        </button>
                    </div>
                    </td>
                </tr>
                ";
            }

            $html .= "
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>Rp. " . $value['total']['anggaran'] . "</strong></td>
                        <td colspan='2'><strong>Rp. " . $value['total']['realisasi'] . "</strong></td>
                    </tr>
                </tbody>
            </table>
            ";
        }
        return response()->json($html);
    }

    public function kelolaApbdesTambah(Request $request)
    {
        $request["user_id"] = Auth::user()->id;
        Apbdes::create($request->all());

        return back()->with("pesan", "Berhasil menambah data APBDes");
    }
}
