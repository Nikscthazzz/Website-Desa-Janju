<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function kelolaStatistikUploadCsv(Request $request)
    {
        $file = $request->file('uploaded_file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server 
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database 
            $filepath = public_path($location . "/" . $filename);
            // Reading file
            $file = fopen($filepath, "r");
            $importData_arr = array(); // Read through the file and store the contents as an array
            $i = 0;
            //Read the contents of the uploaded file 
            while (($filedata = fgetcsv($file, 10000, ",")) !== FALSE) {
                $num = count($filedata);
                // Skip first row (Remove below comment if you want to skip the first row)
                if ($i == 0) {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file); //Close after reading
            $j = 0;
            foreach ($importData_arr as $importData) {
                // $data =  explode(";", $importData[0]);
                $data =  $importData;
                $j++;
                try {
                    $cekExisting = Masyarakat::where("nik", $data[0])->get()->count();
                    if ($cekExisting) {
                        $j--;
                        continue;
                    }
                    Masyarakat::create([
                        "user_id" => Auth::user()->id,
                        'nik' => $data[0],
                        'nama_lengkap' => strtoupper($data[1]),
                        'jenis_kelamin' => strtoupper($data[2]),
                        'agama' => strtoupper($data[3]),
                        'pendidikan' => strtoupper($data[4]),
                        'pekerjaan' => strtoupper($data[5]),
                        'status_pernikahan' => strtoupper($data[6]),
                        'kewarganegaraan' => strtoupper($data[7])
                    ]);
                } catch (\Exception $e) {
                    throw $e;
                }
            }
            return back()->with("pesan", "Berhasil menambahkan sebanyak $j data");
        } else {
            //no file was uploaded
            throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        }
    }

    public function kelolaStatistikExportCsv()
    {
        $tanggal = date("Y_m_d_H:i:s");
        $fileName = "masyarakat_desa_janju_$tanggal.csv";
        $masyarakat = Masyarakat::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('NIK', 'Nama Lengkap', 'Jenis Kelamin', 'Agama', 'Pendidikan', 'Pekerjaan', 'Status Pernikahan', 'Kewarganegaraan');

        $callback = function () use ($masyarakat, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($masyarakat as $msy) {
                $row['NIK']  = $msy->nik;
                $row['Nama Lengkap']    = $msy->nama_lengkap;
                $row['Jenis Kelamin']    = $msy->jenis_kelamin;
                $row['Agama']  = $msy->agama;
                $row['Pendidikan']  = $msy->pendidikan;
                $row['Pekerjaan']  = $msy->pekerjaan;
                $row['Status Pernikahan']  = $msy->status_pernikahan;
                $row['Kewarganegaraan']  = $msy->kewarganegaraan;

                fputcsv($file, array($row['NIK'], $row['Nama Lengkap'], $row['Jenis Kelamin'], $row['Agama'], $row['Pendidikan'], $row['Pekerjaan'], $row['Status Pernikahan'], $row['Kewarganegaraan']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
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

    private function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = array("csv"); //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
            }
        } else {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }
}
