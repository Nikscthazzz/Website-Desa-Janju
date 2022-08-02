@extends('layouts.landing-layout')
@section("active_beranda", "active")
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

  <section class="switchable switchable--switch feature-large" data-aos="fade-up" data-aos-duration="500">
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

  <section class="py-5 mt-5" data-aos="fade-up" data-aos-duration="500">
    <div class="container">
        {{-- <h3 class="text-center">INFORMASI PUBLIK</h3> --}}
        <div class="row">
            <div class="col-md-4 col-sm-12 text-center mb-5">
                <i class="fa-solid fa-building text-primary mb-3" style="font-size: 4em"></i>
                <h4 class="m-0"><strong>STATISTIK DESA</strong></h4>
                <p class="my-3">Statistik Desa untuk menampilkan informasi statistik Desa Janju</p>
                <a href="/statistik-desa" class="btn btn-outline-primary">Lihat Halaman <i class="fa-solid fa-angle-right"></i></a>
            </div>
            <div class="col-md-4 col-sm-12 text-center mb-5">
                <i class="fa-solid fa-money-bill-trend-up text-primary mb-3" style="font-size: 4em"></i>
                <h4 class="m-0"><strong>APBDesa</strong></h4>
                <p class="my-3">APBDesa untuk transparansi sumber dana dan pengeluaran pembangunan Desa Janju</p>
                <a href="/apb-desa" class="btn btn-outline-primary">Lihat Halaman <i class="fa-solid fa-angle-right"></i></a>
            </div>
            <div class="col-md-4 col-sm-12 text-center mb-5">
                <i class="fa-solid fa-file-lines text-primary mb-3" style="font-size: 4em"></i>
                <h4 class="m-0"><strong>LAYANAN DESA</strong></h4>
                <p class="my-3">Layanan surat untuk memudahkan masyarakat Desa Janju dalam pembuatan surat</p>
                <a href="/layanan-desa" class="btn btn-outline-primary">Lihat Halaman <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </div>
  </section>

  <section class="text-center imagebg" data-gradient-bg='#06283D,#1363DF,#47B5FF,#1F4690,#7FB5FF,#11468F'>
    <div class="container" data-aos="fade-up" data-aos-duration="500">
        <div class="row">
            <div class="col-md-4 text-center text-light">
                <i class="fas fa-users" style="font-size: 7em"></i><br>
                <h1 class="mb-0 mt-3 counter" style="font-weight: 700">{{ $mas_all }}</h1>
                <p class="m-0">Jumlah Penduduk</p>
            </div>
            <div class="col-md-4 text-center text-light">
                <i class="fas fa-male" style="font-size: 7em"></i>
                <h1 class="mb-0 mt-3 counter" style="font-weight: 700">{{ $mas_lk }}</h1>
                <p class="m-0">Jumlah Penduduk</p>
            </div>
            <div class="col-md-4 text-center text-light">
                <i class="fas fa-female" style="font-size: 7em"></i>
                <h1 class="mb-0 mt-3 counter" style="font-weight: 700">{{ $mas_pr }}</h1>
                <p class="m-0">Jumlah Penduduk</p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
  </section>

  <section class=" " data-aos="fade-up" data-aos-duration="500">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider slider--inline-arrows" data-arrows="true">
                    <ul class="slides">
                        @foreach ($kabar_desa as $kd)
                        <li>
                            <div class="testimonial row justify-content-center">
                                <div class="col-md-6 col-12">
                                    {{-- <img class="testimonial__image border--round mb-3" alt="Image" src="{{ asset('storage/kabar_desa/kantor_desa.jpg') }}" /> --}}
                                    <img class="testimonial__image border--round mb-3" style="height: 300px; width: 100%; object-fit: cover" alt="Image" src="{{ asset('storage/kabar_desa/' . $kd->gambar) }}" /><br>
                                    <a href="/kabar-desa/{{ $kd->id }}" class="btn btn-primary border-0">Lihat Halaman <i class="fas fa-angle-right"></i></a>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <h3 style="font-weight:700" class="mb-0">{{ $kd->judul }}</h3>
                                    <span class="text-primary d-inline-block my-3"><i class="fas fa-calendar-alt fa-lg"></i> {{ date_format($kd->created_at,"D, d-m-Y") }}</span>
                                    <p>{{ substr($kd->isi, 0, 200) }}..... <br><a href="/kabar-desa/{{ $kd->id }}"><span class="text-primary">Selengkapnya</span></a></p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
  </section>

@endsection