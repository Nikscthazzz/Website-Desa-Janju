@extends("layouts.dashboard")
@section('statistik-active','active')
@section("content")

<main class="content">
  <div class="container p-0">

    <div class="row">
      <h1 class="h3 mb-3">Dashboard Website Kantor Desa Janju</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Tambah data masyarakat Desa Janju</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="#" method="post">
                  @csrf
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label for="nik" class="form-label">NIK</label>
                      <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label for="pekerjaan" class="form-label">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan Pekerjaan">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label for="jk" class="form-label">Jenis Kelamin</label>
                          <select class="form-select" id="jk" aria-label="Default select example">
                            <option selected>Pilih Jenis Kelamin</option>
                            @foreach ($data["jenis_kelamin"] as $jk)
                              <option value="{{ $jk }}">{{ $jk }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label for="agama" class="form-label">Agama</label>
                          <select class="form-select" id="agama" aria-label="Default select example">
                            <option selected>Pilih Agama</option>
                            @foreach ($data["agama"] as $agama)
                              <option value="{{ $agama }}">{{ $agama }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label for="pendidikan" class="form-label">Pendidikan</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Pendidikan</option>
                            @foreach ($data["pendidikan"] as $pendidikan)
                              <option value="{{ $pendidikan }}">{{ $pendidikan }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="status_pernikahan" class="form-label">Status Pernikahan</label>
                          <select class="form-select" id="status_pernikahan" aria-label="Default select example">
                            <option selected>Pilih Status Pernikahan</option>
                            @foreach ($data["status_pernikahan"] as $status_pernikahan)
                              <option value="{{ $status_pernikahan }}">{{ $status_pernikahan }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                          <select class="form-select" id="kewarganegaraan" aria-label="Default select example">
                            <option selected>Pilih Kewarganegaraan</option>
                            @foreach ($data["kewarganegaraan"] as $kewarganegaraan)
                              <option value="{{ $kewarganegaraan }}">{{ $kewarganegaraan }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <button class="btn btn-primary">Tambah</button>
                    </div>
                  </div>
                </form>
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
            <h5 class="card-title">Daftar Data Masyarakat Desa Janju</h5>
          </div>
          <div class="card-body">
            <table id="datatables-reponsive" class="table table-striped table-sm" style="width:100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Pekerjaan</th>
                  <th>Status Pernikahan</th>
                  <th>Kewarganegaraan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data["daftar_masyarakat"] as $msy)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $msy["nik"] }}</td>
                    <td>{{ $msy["nama_lengkap"] }}</td>
                    <td>{{ $msy["jenis_kelamin"] }}</td>
                    <td>{{ $msy["agama"] }}</td>
                    <td>{{ $msy["pendidikan"] }}</td>
                    <td>{{ $msy["pekerjaan"] }}</td>
                    <td>{{ $msy["status_pernikahan"] }}</td>
                    <td>{{ $msy["kewarganegaraan"] }}</td>
                    <td>
                      <div class="d-flex">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                          <i class="fa fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#">
                          <i class="fa fa-trash-can"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
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