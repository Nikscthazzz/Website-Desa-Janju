@extends('layouts.landing-layout')
@section("active_profil", "active")
@section("content")

  <section class="bg-primary p-0" style="height:63.45px !important;">
  </section>

  <section class="mt-5">
    <div class="container">
      <h4 class="text-center" style="font-weight: 700">Desa Janju <hr class="bg-primary m-auto" style="width:20%; height:2px"></h4>
      <p class="text-justify">
        Desa Janju merupakan salah satu Desa yang ada di Kecamatan Tanah Grogot Kabupaten Paser Kalimantan Timur yang terbagi menjadi 8 Rukun Tetangga (RT). Jarak tempuh dari Ibukota Kecamatan dan Ibukota Kabupaten  + 10 KM terletak pada ketinggian 0 – 15 Meter permukaan laut sedangkan jarak dari Desa Janju ke Ibu Kota Provinsi adalah 263 KM. 
      </p>
      <p class="text-justify">
        Kantor Desa Janju yang terletak pada Kabupaten Paser merupakan salah satu instansi pemerintahan yang berfungsi sebagai tempat berlangsungnya segala kegiatan yang ada di Desa Janju mulai dari kegiatan tata pemerintahan desa hingga pelayanan kepada masyarakat umum.
      </p>
      <p class="text-justify">
        Kepala Pemerintahan di Desa Janju yang dipimpin oleh seorang Tokoh Masyarakat (Pembakal) dan istilah sekarang dengan sebutan Kepala Desa. Dari sebelum Indonesia merdeka sampai periode sekarang ini, telah mengalami 10  (Sepuluh) kali pergantian Pemimpin Desa / Kepala Desa. Adapun nama-nama Kepala Desa yang pernah memimpin pemerintahan Desa Janju adalah sebagai berikut :
        <ol class="mx-5">
          <li class="mb-1">Almarhum H. Jafar  beliau cukup lama memimpin Desa Janju.</li>
          <li class="mb-1">Almarhum Jemain  dari Tahun 1925 – 1963 dari masih jaman penjajahan.</li>
          <li class="mb-1">Almarhum Dahalid  dari Tahun 1964 – 1969.</li>
          <li class="mb-1">Almarhum Koci  dari 1970 – 1971</li>
          <li class="mb-1">Sahardin Effendi dari Tahun 1971 – 1984</li>
          <li class="mb-1">Ukoy dari Tahun 1985 – 1990</li>
          <li class="mb-1">Sahakila S.I.Phasa 1991 – 2001</li>
          <li class="mb-1">Harini dari Tahun 2002 – 2003</li>
          <li class="mb-1">Sahardin Effendi dari Tahun 2003 – 2008</li>
          <li class="mb-1">Sahardin Effendi dari Tahun 2008 – 2014</li>
          <li class="mb-1">Edi Kariyadi dari Tahun 2014 - Sekarang.</li>
        </ol>
      </p>
    </div>
    <!--end of container-->
  </section>

  <section class="text-center imagebg" data-gradient-bg='#06283D,#1363DF,#47B5FF,#1F4690,#7FB5FF,#11468F'>
    <div class="container" data-aos="fade-up" data-aos-duration="500">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="cta">
                    {{-- <h1 style="font-weight: 700; letter-spacing: 3px">VISI DAN MISI</h1> --}}
                    <h2 class="text-center" style="letter-spacing: 8px; line-height: 0; font-weight:900">VISI</h2>
                    <p style="font-size: 1.5em; font-weight:500;"><i>“Mewujudkan Desa Janju yang Mandiri , Sejahtera dan Demokratis”</i></p>
                    <br>
                    <h2 class="text-center" style="letter-spacing: 8px; line-height: 0; font-weight:900">MISI</h2>
                    <ul style="color: white;">
                        <li>
                            <p style="font-size: 1.5em; font-weight:500;"><i>“Meningkatkan Sumber Daya Manusia agar mempunyai wawasan yang luas.”</i></p>
                        </li>
                        <li>
                            <p style="font-size: 1.5em; font-weight:500;"><i>“Penyelenggaraan Pemerintahan Desa yang bersih dan berwibawa.”</i></p>
                        </li>
                        <li>
                            <p style="font-size: 1.5em; font-weight:500;"><i>“Mengembangkan sikap kegotong royongan masyarakat dalam pembangunan.”</i></p>
                        </li>
                        <li>
                            <p style="font-size: 1.5em; font-weight:500;"><i>“Meningkatkan ekonomi masyarakat dengan membudayakan kemitraan dengan pelaku pembangunan lain.”</i></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
  </section>

  <section>
    <div class="container">
      <h4 class="text-center" style="font-weight: 700">Struktur Pemerintahan Desa Janju <hr class="bg-primary m-auto" style="width:20%; height:2px"></h4>
      <img src="{{ asset("assets/img/struktur_pemerintahan.png") }}" class="img-fluid">
    </div>
    <!--end of container-->
  </section>

  <section class="imagebg" data-gradient-bg='#06283D,#1363DF,#47B5FF,#1F4690,#7FB5FF,#11468F'>
    <h4 class="text-center" style="font-weight: 700">Demografi Desa Janju <hr class="bg-light m-auto" style="width:20%; height:2px"></h4>
    <div class="container">
      <div class="row">
        <p class="text-justify">
          Desa Janju merupakan salah satu Desa yang ada di Kecamatan Tanah Grogot Kabupaten Paser Kalimantan Timur. Jarak tempuh dari Ibukota Kecamatan dan Ibukota Kabupaten  +  10 Km terletak pada ketinggian 0 – 15 M permukaan laut sedangkan  jarak dari Desa Janju ke Ibu Kota Propinsi adalah 263 Km. Desa Janju secara administratif terbagi menjadi 8 Rukun Tetangga ( RT ) dan berbatasan langsung dengan :
          <ul>
            <li><strong>Sebelah Utara</strong> : Sungai Muru ( Kuaro )</li>
            <li><strong>Sebelah Timur</strong> : Desa Tepian Batang dan Desa Jone</li>
            <li><strong>Selatan</strong> : Desa Sempulang</li>
            <li><strong> Barat</strong> : Desa Keluang Lolo</li>
          </ul>
        </p>
      </div>
    </div>
  </section>


@endsection