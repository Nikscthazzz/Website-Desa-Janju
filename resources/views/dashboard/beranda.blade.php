@extends("layouts.dashboard")
@section('beranda-active','active')
@section("content")

<main class="content">
  <div class="container-fluid p-0">

    <div class="row">
      <h1 class="h3 mb-3">Dashboard Sistem Informasi Profile Company SMPN 7 Bontang</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Deskripsi SMPN 7 Bontang</h5>
          </div>
          <div class="card-body d-flex">
            <div class="col-12">
              <form action="/kelola-sambutan/ubah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                  <label for="gambar">Gambar</label>
                  <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                </div>
                <div class="form-group mb-3">
                  <label for="isi">Sambutan</label>
                </div>
                <button type="submit" class="btn btn-primary" id="tambahBtn">Ubah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <h1 class="h3 mb-3">Dashboard Sistem Informasi Profile Company SMPN 7 Bontang</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Deskripsi SMPN 7 Bontang</h5>
          </div>
          <div class="card-body d-flex">
            <img src="logo.png" alt="Logo SMPN 7 Bontang">
            <p style="text-align: justify; margin: 0 0 0 12px; font-size: 1.2em">
              Sekolah Menengah Pertama Negeri 7 Kota Bontang merupakan salah satu 
              institusi pendidikan negeri tingkat menengah pertama yang sudah berdiri sejak 
              16 Juli 2007. Sekolah Menengah Pertama Negeri 7 Kota Bontang berlokasi di
              Jl. K.S. Tubun No.29 Kecamatan Bontang Selatan, Kota Bontang yang telah 
              terakreditasi A. Sekolah Menengah Pertama Negeri 7 Kota Bontang memiliki 
              staf pengajar guru yang kompeten pada bidang pelajarannya sehingga 
              berkualitas dan menjadi salah satu yang terbaik di Kota Bontang. Tersedia juga 
              berbagai fasilitas sekolah seperti ruang kelas yang nyaman, perpustakaan, 
              lapangan olahraga, kantin dan lainnya. Adapun pelajaran yang diberikan 
              meliputi semua mata pelajaran wajib sesuai kurikulum yang berlaku.
            </p>
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