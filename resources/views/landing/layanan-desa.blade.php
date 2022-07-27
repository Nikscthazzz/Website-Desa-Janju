@extends('layouts.landing-layout')
@section("active_layanan", "active")
@section("content")

  <section class="bg-primary p-0" style="height:63.45px !important;">
  </section>

  <section class="mt-5">
    <div class="container">
      <h4 class="text-center" style="font-weight: 700">Layanan Desa Janju <hr class="bg-primary m-auto" style="width:20%; height:2px"></h4>
      <p class="text-justify">
        Layanan surat menyurat ini digunakan untuk membantu masyarakat Desa Janju dalam pembuatan surat secara online, sehingga dapat dilakukan dimana saja dan kapan saja tanpa harus ke Kantor Desa. Dapat langsung <a href="#">Klik Disini</a>. 
      </p>

      <div class="row">
        @foreach ($layanan_desa as $ld)
        <div class="col-md-3">
          <a href="{{ $ld->tautan }}">
            <div class="card card-1 boxed boxed--sm boxed--border bg-primary">
              <div class="col-md-12 text-center text-light">
                <i class="fas fa-file-alt" style="font-size: 3em"></i>
                <h5 class="text-light">{{ $ld->nama }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>

    <!--end of container-->
  </section>



@endsection