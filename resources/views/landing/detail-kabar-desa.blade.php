@extends('layouts.landing-layout')
@section("active_kabar", "active")
@section("content")

  <section class="bg-primary p-0" style="height:63.45px !important;">
  </section>

  <section class="mt-5">
    <div class="container" data-aos="fade-up" data-aos-duration="500">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <article>
                    <div class="article__title text-center">
                        <h1 class="h2">{{ $kabar_desa->judul }}</h1>
                        <span>{{ date_format($kabar_desa->created_at,"D, d-m-Y") }}</span>
                    </div>
                    <!--end article title-->
                    <div class="article__body">
                        <img alt="Image" src="{{ asset('storage/kabar_desa/' . $kabar_desa->gambar) }}" />
                        <br>
                        <br>
                        <p style="font-size: 17px; text-align:justify">{{ $kabar_desa->isi }}</p>
                    </div>
                </article>
                <!--end item-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>



@endsection