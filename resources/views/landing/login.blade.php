@extends('layouts.landing-layout')
@section('content')
  <section class="height-100 imagebg text-center" data-overlay="4">
    <div class="background-image-holder">
        <img alt="background" src="{{ asset('assets/img/kantor_desa.jpg') }}" />
    </div>
    <div class="container pos-vertical-center">
        <div class="row">
            <div class="col-md-7 col-lg-5">
                <h2>DESA JANJU</h2>
                <p class="lead">
                    Jalan Negara KM.10, RT.003, Kecamatan Tanah Grogot, Kabupaten Paser, Kodepos 76251 
                </p>
                <form action="/login" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" placeholder="username" name="username"/>
                        </div>
                        <div class="col-md-12">
                            <input type="password" placeholder="password" name="password"/>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                        </div>
                      </div>
                      @if(session('pesan'))
                        <span class="text-danger text-center">{{ session('pesan') }}</span>
                      @endif
                    <!--end of row-->
                </form>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
  </section>
@endsection