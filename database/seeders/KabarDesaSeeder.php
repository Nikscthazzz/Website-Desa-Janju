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
            "judul" => "Rapat Koordinasi Pembangunan Fisik Desa Janju TA 2021",
            "isi" => "Acara tersebut dipimpin langsung oleh Sekretaris Desa Agung Mulyanto, SE dengan dengan dipandu Oleh Kaur Perencanaan Dody Dian Dwi Cahyoko SE serta dihadiri oleh TPK dan TTK dari 6 Dusun di Desa Kaligono tersebut. Dalam pembahasan Pembangunan Infrastruktur Desa dengan pembacaan Pencermatan RAB oleh Tim Pelaksana Kegiatan dan Dusun Penerima Manfaat Pembangunan Fisik TA 2021. Dalam acara ini juga dibahas tentang teknis kegiatan pembangunan fisik, agar tidak terjadi ada kekeliruan dan kesalahpahaman dalam pembangunan Infrastruktur Desa. Disampaikan pula oleh Kaur Perencanaan tentang teknis pelaporan kegiatan dan pencairan anggaran dalam pekerjaan infrastruktur tersebut. Setelah itu diadakan juga sesi tanya jawab antara TPK, TTK dan Pemdes, ini dilakukan supaya antara Pemdes, TPK dan TTK memiliki satu kata yang sama dalam pembangunan ini. Jika ada TTK atau TPK yang belum jelas tentang teknis dan apapun terkait pembangunan Infrastruktur langsung bertanya dalam forum ini. Rapat Koordinasi oleh Pemerintah Desa TPK dan TPK tersebut diharapkan mampu menjadi media bersama dalam memutuskan kesepakatan, menyampaikan saran dan usulan serta menjadi media sosialisasi program berjalan.",
            "gambar" => "kabardesa1.jpeg"
        ]);
        KabarDesa::create([
            "judul" => "Pelatihan Kewirausahaan Budidaya Lebah Kelulut 'Yang Muda Bekarya'",
            "isi" => "Salah satu Kelompok Usaha Perhutanan Sosial (KUPS) di Desa Datai Nirui, Kecamatan Teweh Tengah, Kabupaten Barito Utara, Kalimantan Tengah, melakukan budidaya lebah kelulut. Ketua Kelompok KUPS Madu Kelulut Sinardi mengatakan budidaya lebah tersebut baru dimulai sejak 3 bulan lalu. Pada Kamis, 11 November 2021, baru ada 113 sarang lebah dalam dalam tahap percobaan itu. Sinardi memperkirakan madu kelulut tersebut bisa dipanen pada akhir bulan November. Jumlahnya ditaksir hingga 10 liter madu. Selain itu, Sinardi berharap pemerintah bisa meningkatkan bantuan pada KUPS. Tujuannya, agar produksi madu kelulut bisa terus ditingkatkan.",
            "gambar" => "kabardesa2.jpeg"
        ]);
        KabarDesa::create([
            "judul" => "Keindahan Objek Wisata 'Kampung Warna Warni'",
            "isi" => "Sudut-sudut kampung dihiasi dengan berbagai warna yang elok dipandang. Warna cerah dan terang sangat memikat perhatian setiap pengunjung. Spot-spot menarik yang instagramable bisa kamu temukan saat berkunjung ke Kampung Warna Warni Jodipan. Kamu bisa mengabadikan momen selama di kampung wisata ini dengan bidikan kamera. Berkunjung bersama keluarga ke Kampung Warna Warni Jodipan sangat cocok. Bersama pasangan agar semakin romantis juga menjadi opsi untuk kamu. Inspirasi baru bisa kamu dapatkan saat berkunjung ke Kampung Jodipan. Kemudian inspirasi tersebut kamu realisasikan di rumah atau di kampung halaman.",
            "gambar" => "kabardesa3.jpeg"
        ]);
    }
}
