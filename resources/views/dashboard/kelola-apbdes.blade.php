@extends("layouts.dashboard")
@section('apbdes-active','active')
@section("content")

<main class="content">
  <div class="container p-0">

    <div class="row">
      <h1 class="h3 mb-3">Kelola APBDesa Janju</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Tambah data APBDesa Janju</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="/dashboard/kelola-statistik/tambah" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-3">
                      <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="number" min="1000" name="" class="form-control" placeholder="Masukkan Tahun">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="mb-3">
                        <label class="form-label">Jenis APBDesa Janju</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Pilih Jenis APBDes Janju</option>
                        </select>
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
                      <th>Uraian</th>
                      <th>Anggaran</th>
                      <th>Realisasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hasil Usaha Desa</td>
                      <td>Rp. 123131321</td>
                      <td>Rp. 4719738123981</td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#edit-">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#hapus-">
                            <i class="fa fa-trash-can"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Dana Desa</td>
                      <td>Rp. 123131321</td>
                      <td>Rp. 4719738123981</td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#edit-">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#hapus-">
                            <i class="fa fa-trash-can"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Total</strong></td>
                      <td><strong>Rp. 123131321</strong></td>
                      <td colspan="2"><strong>Rp. 4719738123981</strong></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="row mb-5">
              <div class="col-md-12">
                <h5><strong>Pembelanjaan Desa</strong></h5>
                <table id="table2" class="table table-striped table-sm" style="width:100%">
                  <thead>
                    <tr>
                      <th>Uraian</th>
                      <th>Anggaran</th>
                      <th>Realisasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hasil Usaha Desa</td>
                      <td>Rp. 123131321</td>
                      <td>Rp. 4719738123981</td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#edit-">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#hapus-">
                            <i class="fa fa-trash-can"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Dana Desa</td>
                      <td>Rp. 123131321</td>
                      <td>Rp. 4719738123981</td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#edit-">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#hapus-">
                            <i class="fa fa-trash-can"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Total</strong></td>
                      <td><strong>Rp. 123131321</strong></td>
                      <td colspan="2"><strong>Rp. 4719738123981</strong></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h5><strong>Pelaksanaan Desa</strong></h5>
                <table id="table3" class="table table-striped table-sm" style="width:100%">
                  <thead>
                    <tr>
                      <th>Uraian</th>
                      <th>Anggaran</th>
                      <th>Realisasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hasil Usaha Desa</td>
                      <td>Rp. 123131321</td>
                      <td>Rp. 4719738123981</td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#edit-">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#hapus-">
                            <i class="fa fa-trash-can"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Dana Desa</td>
                      <td>Rp. 123131321</td>
                      <td>Rp. 4719738123981</td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#edit-">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#hapus-">
                            <i class="fa fa-trash-can"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Total</strong></td>
                      <td><strong>Rp. 123131321</strong></td>
                      <td colspan="2"><strong>Rp. 4719738123981</strong></td>
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
    <div class="notyf" style="justify-content: flex-end; align-items: flex-end;"><div id="notify-custom" class="notyf__toast notyf__toast--lower"><div class="notyf__wrapper"><div class="notyf__icon"><i class="notyf__icon--success" style="color: rgb(59, 125, 221);"></i></div><div class="notyf__message">{{ session("pesan") }}</div></div><div class="notyf__ripple" style="background: rgb(59, 125, 221);"></div></div></div>
    @endif

  </div>
</main>

@endsection
@section("script")
<script>
  $(document).ready( function () {
      $('#table1').DataTable({
      });
      $('#table2').DataTable({
      });
      $('#table3').DataTable({
      });
  } );
</script>
@endsection