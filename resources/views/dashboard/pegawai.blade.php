@extends("root.dashboard")
@section('linkcss')
<style>
  /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
@endsection
@section('pegawai-active','active')
@section("content")

<main class="content">
  <div class="container-fluid p-0">

    <div class="row">
      <h1 class="h3 mb-3">Kelola Pegawai</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Tambah Data Pegawai Baru</h5>
          </div>
          <div class="card-body d-flex">
            <div class="col-12">
              <form action="/kelola-pegawai/tambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" required>
                </div>
                <div class="form-group mb-3">
                  <label for="nip">NIP</label>
                  <input type="number" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="posisi">Posisi</label>
                      <select class="form-control" id="posisi" name="posisi" required>
                        <option value="guru">Guru</option>
                        <option value="tendik">Tendik</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="jabatan">Jabatan</label>
                      <select class="form-control" id="jabatan" name="jabatan" required>
                        <option disabled>-- Posisi Guru --</option>
                        <option value="Guru Mapel">Guru Mapel</option>
                        <option value="Guru BK">Guru BK</option>
                        <option disabled>-- Posisi Tendik --</option>
                        <option value="Tenaga Administrasi Sekolah">Tenaga Administrasi Sekolah</option>
                        <option value="Tenaga Perpustakaan">Tenaga Perpustakaan</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Daftar Guru</h5>
            </div>
            <div class="card-body">
              <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Bidang Kompetensi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pegawai as $p)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal-{{ $p->id }}">Edit</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-modal-{{ $p->id }}">Hapus</button>
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
</main>

@if (session("pesan"))
<div class="notyf" style="justify-content: flex-end; align-items: flex-end;"><div id="notify-custom" class="notyf__toast notyf__toast--lower"><div class="notyf__wrapper"><div class="notyf__icon"><i class="notyf__icon--success" style="color: rgb(59, 125, 221);"></i></div><div class="notyf__message">{{ session("pesan") }}</div></div><div class="notyf__ripple" style="background: rgb(59, 125, 221);"></div></div></div>
@endif


@foreach ($pegawai as $p)
  <!-- Edit Modal -->
  <div class="modal fade" id="edit-modal-{{ $p->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Informasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <form action="/kelola-pegawai/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" value="{{ $p->nama }}" required>
            </div>
            <div class="form-group mb-3">
              <label for="nip">NIP</label>
              <input type="number" class="form-control" id="nip" name="nip" placeholder="NIP" value="{{ $p->nip }}" required>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="posisi">Posisi</label>
                  <select class="form-control" id="posisi" name="posisi" required>
                    <option value="guru" {{ $p->posisi == "guru" ? "selected" : "" }}>Guru</option>
                    <option value="tendik" {{ $p->posisi == "tendik" ? "selected" : "" }}>Tendik</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="jabatan">Jabatan</label>
                  <select class="form-control" id="jabatan" name="jabatan" required>
                    <option disabled>-- Posisi Guru --</option>
                    <option value="Guru Mapel" {{ $p->jabatan == "Guru Mapel" ? "selected" : "" }}>Guru Mapel</option>
                    <option value="Guru BK" {{ $p->jabatan == "Guru BK" ? "selected" : "" }}>Guru BK</option>
                    <option disabled>-- Posisi Tendik --</option>
                    <option value="Tenaga Administrasi Sekolah" {{ $p->jabatan == "Tenaga Administrasi Sekolah" ? "selected" : "" }}>Tenaga Administrasi Sekolah</option>
                    <option value="Tenaga Perpustakaan" {{ $p->jabatan == "Tenaga Perpustakaan" ? "selected" : "" }}>Tenaga Perpustakaan</option>
                    <option value="Kepala Sekolah" {{ $p->jabatan == "Kepala Sekolah" ? "selected" : "" }}>Kepala Sekolah</option>
                  </select>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" name="id" value="{{ $p->id }}">Edit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Edit Modal -->

  <!-- Hapus Modal -->
  <div class="modal fade" id="hapus-modal-{{ $p->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Data Pegawai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <p class="mb-0">Apakah anda yakin untuk menghapus data pegawai ini?</p>
          <h5><strong>{{ $p->nama }}</strong></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href="/kelola-pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Hapus Modal -->

@endforeach


@endsection