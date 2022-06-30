@extends('layouts.landing-layout')
@section("content")

  <section class="text-center height-100 imagebg" data-overlay="4">
      <div class="background-image-holder">
          <img alt="background" src="{{ asset('assets') }}/img/home_hero.jpg" />
      </div>
      <div class="container pos-vertical-center">
          <div class="row">
              <div class="col-md-12">
                  <div class="typed-headline">
                      <span class="h1 inline-block">Selamat Datang Pada</span>
                      <span class="h1 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="Website Desa Janju"></span>
                  </div>
                  <p class="lead">
                      Kecamatan Tanah Grogot, Kabupaten Paser, Kalimantan Timur
                  </p>
                  {{-- <span class="block type--fine-print">or
                      <a href="{{ asset('template') }}/index.html">view the demos</a>
                  </span> --}}
              </div>
          </div>
          <!--end of row-->
      </div>
      <!--end of container-->
  </section>

  <section class="switchable switchable--switch feature-large">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-6 col-12">
                <div class="video-cover border--round box-shadow-wide">
                    <div class="background-image-holder">
                        <img src="{{ asset('assets/img/kantor_desa.jpg') }}" alt="">
                    </div>
                    <img src="{{ asset('assets/img/kantor_desa.jpg') }}" alt="">
                </div>
                <!--end video cover-->
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="switchable__text">
                    <h2>Tentang Desa Janju</h2>
                    <p class="lead">
                        Desa Janju merupakan salah satu Desa yang ada di Kecamatan Tanah Grogot Kabupaten Paser Kalimantan Timur yang terbagi menjadi 8 Rukun Tetangga (RT). Jarak tempuh dari Ibukota Kecamatan dan Ibukota Kabupaten  + 10 KM terletak pada ketinggian 0 – 15 Meter permukaan laut sedangkan jarak dari Desa Janju ke Ibu Kota Provinsi adalah 263 KM
                    </p>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
  </section>

  <section class="text-center imagebg" data-gradient-bg='#06283D,#1363DF,#47B5FF,#1F4690,#7FB5FF,#11468F'>
    <div class="container">
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

  <section class="py-5 mt-5">
    <div class="container">
        {{-- <h3 class="text-center">INFORMASI PUBLIK</h3> --}}
        <div class="row">
            <div class="col-md-4 col-sm-12 text-center mb-5">
                <i class="fa-solid fa-file-lines text-primary mb-3" style="font-size: 4em"></i>
                <h4 class="m-0"><strong>LAYANAN SURAT</strong></h4>
                <p class="my-3">Layanan surat untuk memudahkan masyarakat Desa Janju dalam pembuatan surat</p>
                <a href="#" class="btn btn-outline-primary">Lihat Halaman <i class="fa-solid fa-angle-right"></i></a>
            </div>
            <div class="col-md-4 col-sm-12 text-center mb-5">
                <i class="fa-solid fa-building text-primary mb-3" style="font-size: 4em"></i>
                <h4 class="m-0"><strong>STATISTIK DESA</strong></h4>
                <p class="my-3">Statistik Desa untuk menampilkan informasi statistik Desa Janju</p>
                <a href="#" class="btn btn-outline-primary">Lihat Halaman <i class="fa-solid fa-angle-right"></i></a>
            </div>
            <div class="col-md-4 col-sm-12 text-center mb-5">
                <i class="fa-solid fa-money-bill-trend-up text-primary mb-3" style="font-size: 4em"></i>
                <h4 class="m-0"><strong>APBDesa</strong></h4>
                <p class="my-3">APBDesa untuk transparansi sumber dana dan pengeluaran pembangunan Desa Janju</p>
                <a href="#" class="btn btn-outline-primary">Lihat Halaman <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </div>
  </section>


@endsection