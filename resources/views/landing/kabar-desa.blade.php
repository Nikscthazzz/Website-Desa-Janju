@extends('layouts.landing-layout')
@section("active_kabar", "active")
@section("content")

  <section class="bg-primary p-0" style="height:63.45px !important;">
  </section>

  <section class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center" style="font-weight: 700">Kabar Desa Janju <hr class="bg-primary m-auto" style="width:20%; height:2px"></h4>

          <div class="masonry">
            <div class="masonry__container row">
                {{-- <div class="masonry__item col-lg-4 col-md-6"></div> --}}
                @foreach ($kabar_desa as $kd)
                <div class="masonry__item col-lg-4 col-md-6" data-masonry-filter="Marketing">
                    <article class="feature feature-1">
                        <a href="/kabar-desa/{{ $kd->id }}" class="block">
                            <img alt="Image" src="{{ asset("storage/kabar_desa/" . $kd->gambar) }}" style="height: 300px; width: 100%; object-fit: cover" />
                        </a>
                        <div class="feature__body boxed boxed--border">
                            <span>{{ date_format($kd->created_at,"D, d-m-Y") }}</span>
                            <h5>{{ substr($kd->isi, 0, 200) }}</h5>
                            <a href="/kabar-desa/{{ $kd->id }}">
                                Lihat selengkapnya
                            </a>
                        </div>
                    </article>
                </div>
                <!--end item-->
                @endforeach
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>



@endsection