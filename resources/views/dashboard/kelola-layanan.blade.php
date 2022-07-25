@extends("layouts.dashboard")
@section('layanan-active','active')
@section("content")

<main class="content">
  <div class="container p-0">

    <div class="row">
      <h1 class="h3 mb-3">Kelola Layanan Desa Janju</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Tambah Layanan Janju</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="/dashboard/kelola-statistik/tambah" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label">Nama Layanan</label>
                        <input type="text" name="" class="form-control" placeholder="Masukkan nama layanan">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label">Deskripsi Layanan</label>
                        <textarea name="" cols="30" class="form-control" rows="10" placeholder="Masukkan deskripsi layanan"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label">Tautan Layanan</label>
                        <input type="text" name="" class="form-control" placeholder="Masukkan tautan layanan">
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary">Tambah</button>
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
            <h5 class="card-title">Daftar Data APBDesa Janju</h5>
          </div>
          <div class="card-body">
            <div class="row mb-5">
              <div class="col-md-12">
                <div class="mb-5 mt-0">
                  <label class="form-label"><strong>Tahun</strong></label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Tahun</option>
                  </select>
                </div>
                <h5><strong>Pendapatan Desa</strong></h5>
                <table id="table1" class="table table-striped table-sm" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Layanan</th>
                      <th>Deskripsi Layanan</th>
                      <th>Tautan Layanan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>ajwdijawjid</td>
                      <td>awdkpakdwokaopwdoappdk</td>
                      <td>ajidajwdajoiw</td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-">
                            <i class="fa fa-trash-can"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @if (session("pesan"))
    <div class="notyf" style="justify-content: flex-end; align-items: flex-end;">
      <div id="notify-custom" class="notyf__toast notyf__toast--lower">
        <div class="notyf__wrapper">
          <div class="notyf__icon"><i class="notyf__icon--success" style="color: rgb(59, 125, 221);"></i></div>
          <div class="notyf__message">{{ session("pesan") }}</div>
        </div>
        <div class="notyf__ripple" style="background: rgb(59, 125, 221);"></div>
      </div>
    </div>
    @endif

  </div>
</main>

@endsection
@section("script")
<script>
  $(document).ready(function() {
    $('#table1').DataTable({});
  });
</script>
@endsection