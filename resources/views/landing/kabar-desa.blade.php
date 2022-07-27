@extends('layouts.landing-layout')
@section("active_kabar", "active")
@section("content")

  <section class="bg-primary p-0" style="height:63.45px !important;">
  </section>

  <section class="mt-5">
    <div class="container">
      <h4 class="text-center" style="font-weight: 700">Kabar Desa Janju <hr class="bg-primary m-auto" style="width:20%; height:2px"></h4>

      <div class="row">

        @foreach ($kabar_desa as $kd)
        <div class="col-md-10 offset-md-1 mb-3">
          <div class="testimonial row justify-content-center">
            <div class="col-md-6 col-12">
                <img class="testimonial__image border--round" alt="Image" style="height: 300px; width: 100%; object-fit: cover" src="{{ asset('storage/kabar_desa/' . $kd->gambar) }}" />
            </div>
            <div class="col-lg-6 col-md-6">
                <a href=""><h5 style="font-weight:700" class="mb-0">{{ $kd->judul }}</h5></a>
                <span class="text-primary d-inline-block my-3"><i class="fas fa-calendar-alt fa-lg"></i> {{ date_format($kd->created_at,"D, d-m-Y") }}</span>
                <p>{{ $kd->isi }} <br><a href="#"><span class="text-primary">Selengkapnya</span></a></p>
            </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="col-md-10 offset-md-1">
          <div class="testimonial row justify-content-center">
            <div class="col-md-6 col-12">
                <img class="testimonial__image border--round" alt="Image" src="{{ asset('assets/img/kantor_desa.jpg') }}" />
            </div>
            <div class="col-lg-6 col-md-6">
                <h3 style="font-weight:700" class="mb-0">Title</h3>
                <span class="text-primary d-inline-block my-3"><i class="fas fa-calendar-alt fa-lg"></i> Jum'at, 22 September 2022</span>
                <p>Desa Janju merupakan salah satu Desa yang ada di Kecamatan Tanah Grogot Kabupaten Paser Kalimantan Timur yang terbagi menjadi 8 Rukun Tetangga (RT). Jarak tempuh dari Ibukota Kecamatan dan Ibukota Kabupaten  + 10 KM terletak pada ketinggian <a href="#"><span class="text-primary">Selengkapnya</span></a></p>
            </div>
          </div>
        </div> --}}

      </div>
      
    </div>
    <!--end of container-->
  </section>



@endsection