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
                <form action="/dashboard/kelola-layanan/tambah" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label">Nama Layanan</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama layanan" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label">Tautan Layanan</label>
                        <input type="text" name="tautan" class="form-control" placeholder="Cth: https://your-url.com" required>
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
            <h5 class="card-title">Daftar Layanan Desa Janju</h5>
          </div>
          <div class="card-body">
            <div class="row mb-5">
              <div class="col-md-12">
                <table id="table1" class="table table-striped table-sm" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Layanan</th>
                      <th>Tautan Layanan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($layanan_desa as $ld)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $ld->nama }}</td>
                      <td><a href="{{ $ld->tautan }}" target="_blank">{{ $ld->tautan }}</a></td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{ $ld->id }}">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-{{ $ld->id }}">
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

    @foreach ($layanan_desa as $ld)
    <!-- Edit Modal -->
    <div class="modal fade" id="edit-{{ $ld->id }}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data Layanan Desa Janju</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body m-3">
            <form action="/dashboard/kelola-layanan/edit/{{ $ld->id }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="col-md-12">
                <div class="mb-3">
                  <label class="form-label">Nama Layanan</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan nama layanan" required value="{{ $ld->nama }}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <label class="form-label">Tautan Layanan</label>
                  <input type="text" name="tautan" class="form-control" placeholder="Cth: https://your-url.com" required value="{{ $ld->tautan }}">
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary" required name="id" value="{{ $ld->id }}">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END Edit Modal -->

    <!-- Hapus Modal -->
    <div class="modal fade" id="hapus-{{ $ld->id }}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus Data Layanan Desa Janju</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body m-3">
            <p class="mb-0">Apakah anda yakin untuk menghapus data ini ?</p>
            <h5><strong>{{ $ld->nama }}</strong></h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <form action="/dashboard/kelola-layanan/delete/{{ $ld->id }}" method="post">
              @csrf
              @method("DELETE")
              <button class="btn btn-danger">Hapus</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END Hapus Modal -->
    @endforeach

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