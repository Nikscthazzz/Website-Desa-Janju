@extends("layouts.dashboard")
@section('beranda-active','active')
@section("content")

<main class="content">
  <div class="container p-0">

    <div class="row">
      <h1 class="h3 mb-3">Dashboard Website Kantor Desa Janju</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Grafik</h5>
          </div>
          <div class="card-body">
            <div class="row">

              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Pengunjung Hari Ini</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="bar-chart-2"></i>
                        </div>
                      </div>
                    </div>
                    <h1 class="mt-1 mb-3">{{ $grafik["hari"]["nilai"] }}</h1>
                    <div class="mb-0">
                      <span class="text-muted">Selisih 
                      <span class="@if($grafik['hari']['selisih'] > 0) text-success @else text-danger @endif"> <i class="mdi mdi-arrow-bottom-right"></i> {{ $grafik["hari"]["selisih"] }} </span> dari hari kemarin</span>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Pengunjung Bulan Ini</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="bar-chart-2"></i>
                        </div>
                      </div>
                    </div>
                    <h1 class="mt-1 mb-3">{{ $grafik["bulan"]["nilai"] }}</h1>
                    <div class="mb-0">
                      <span class="text-muted">Selisih 
                      <span class="@if($grafik['bulan']['selisih'] > 0) text-success @else text-danger @endif"> <i class="mdi mdi-arrow-bottom-right"></i> {{ $grafik["bulan"]["selisih"] }} </span> dari bulan kemarin</span>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Total Pengunjung</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="bar-chart-2"></i>
                        </div>
                      </div>
                    </div>
                    <h1 class="mt-1 mb-3">{{ $grafik["total"] }}</h1>
                    <div class="mb-0">
                      <span class="text-danger">&nbsp;</span>
                      <span class="text-muted">&nbsp;</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Struktur pemerintahan Desa Janju</h5>
          </div>
          <div class="card-body">
            <div class="row">

              <div class="col-md-12">
                <form action="/dashboard/ubah-struktur-organisasi" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" name="gambar" aria-describedby="strukturPemerintahan" aria-label="Upload">
                    <button class="btn btn-outline-secondary" type="submit" id="strukturPemerintahan">Ubah</button>
                  </div>
                </form>
                <img src="{{ asset("storage/struktur_organisasi/" . $struktur_organisasi) }}" class="img-fluid">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    @if (session("pesan"))
    <div class="notyf" style="justify-content: flex-end; align-items: flex-end;"><div id="notify-custom" class="notyf__toast notyf__toast--lower"><div class="notyf__wrapper"><div class="notyf__icon"><i class="notyf__icon--success" style="color: rgb(59, 125, 221);"></i></div><div class="notyf__message">{{ session("pesan") }}</div></div><div class="notyf__ripple" style="background: rgb(59, 125, 221);"></div></div></div>
    @endif

  </div>
</main>

@endsection