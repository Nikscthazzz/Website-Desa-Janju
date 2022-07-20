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
                <form action="/dashboard/kelola-statistik/tambah" method="post">
                  @csrf
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label for="nik" class="form-label">NIK</label>
                      <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" name="nama_lengkap">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label for="jk" class="form-label">Jenis Kelamin</label>
                          <select class="form-select" id="jk" aria-label="Default select example" name="jenis_kelamin">
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
                          <select class="form-select" id="agama" aria-label="Default select example" name="agama">
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
                          <select class="form-select" aria-label="Default select example" name="pendidikan">
                            <option selected>Pilih Pendidikan</option>
                            @foreach ($data["pendidikan"] as $pendidikan)
                              <option value="{{ $pendidikan }}">{{ $pendidikan }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label for="pekerjaan" class="form-label">Pekerjaaan</label>
                          <input class="form-control" list="listPekerjaan" id="pekerjaan" placeholder="Pilih Pekerjaan" name="pekerjaan">
                          <datalist id="listPekerjaan">
                            @foreach ($data["pekerjaan"] as $pk)
                              <option value="{{ $pk }}">{{ $pk }}</option>
                            @endforeach
                            <option value=""></option>
                          </datalist>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label for="status_pernikahan" class="form-label">Status Pernikahan</label>
                          <select class="form-select" id="status_pernikahan" aria-label="Default select example" name="status_pernikahan">
                            <option selected>Pilih Status Pernikahan</option>
                            @foreach ($data["status_pernikahan"] as $status_pernikahan)
                              <option value="{{ $status_pernikahan }}">{{ $status_pernikahan }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mb-3">
                          <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                          <select class="form-select" id="kewarganegaraan" aria-label="Default select example" name="kewarganegaraan">
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
                    <td>{{ $msy->nik }}</td>
                    <td>{{ $msy->nama_lengkap }}</td>
                    <td>{{ $msy->jenis_kelamin }}</td>
                    <td>{{ $msy->agama }}</td>
                    <td>{{ $msy->pendidikan }}</td>
                    <td>{{ $msy->pekerjaan }}</td>
                    <td>{{ $msy->status_pernikahan }}</td>
                    <td>{{ $msy->kewarganegaraan }}</td>
                    <td>
                      <div class="d-flex">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{ $msy->id }}">
                          <i class="fa fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-{{ $msy->id }}">
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

    @foreach ($data["daftar_masyarakat"] as $msy)
    <!-- Edit Modal -->
    <div class="modal fade" id="edit-{{ $msy->id }}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data Statistik Desa Janju</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body m-3">
            <form action="/dashboard/kelola-statistik/edit/{{ $msy->id }}" method="post">
              @csrf
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" value="{{ $msy->nik }}" name="nik">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ $msy->nama_lengkap }}" name="nama_lengkap">
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="jk" class="form-label">Jenis Kelamin</label>
                      <select class="form-select" id="jk" aria-label="Default select example" name="jenis_kelamin">
                        <option>Pilih Jenis Kelamin</option>
                        @foreach ($data["jenis_kelamin"] as $jk)
                          <option value="{{ $jk }}" @if($msy->jenis_kelamin===$jk) selected @endif>{{ $jk }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="agama" class="form-label">Agama</label>
                      <select class="form-select" id="agama" aria-label="Default select example" name="agama">
                        <option>Pilih Agama</option>
                        @foreach ($data["agama"] as $agama)
                          <option value="{{ $agama }}" @if($msy->agama===$agama) selected @endif>{{ $agama }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="pendidikan" class="form-label">Pendidikan</label>
                      <select class="form-select" aria-label="Default select example" name="pendidikan">
                        <option>Pilih Pendidikan</option>
                        @foreach ($data["pendidikan"] as $pendidikan)
                          <option value="{{ $pendidikan }}" @if($msy->pendidikan===$pendidikan) selected @endif>{{ $pendidikan }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="pekerjaan" class="form-label">Pekerjaaan</label>
                      <input class="form-control" list="listPekerjaan" id="pekerjaan" placeholder="Pilih Pekerjaan" value="{{ $msy->pekerjaan }}" name="pekerjaan">
                      <datalist id="listPekerjaan">
                        @foreach ($data["pekerjaan"] as $pk)
                          <option value="{{ $pk }}">{{ $pk }}</option>
                        @endforeach
                        <option value=""></option>
                      </datalist>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="status_pernikahan" class="form-label">Status Pernikahan</label>
                      <select class="form-select" id="status_pernikahan" aria-label="Default select example" name="status_pernikahan">
                        <option>Pilih Status Pernikahan</option>
                        @foreach ($data["status_pernikahan"] as $status_pernikahan)
                          <option value="{{ $status_pernikahan }}" @if($msy->status_pernikahan===$status_pernikahan) selected @endif>{{ $status_pernikahan }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                      <select class="form-select" id="kewarganegaraan" aria-label="Default select example" name="kewarganegaraan">
                        <option>Pilih Kewarganegaraan</option>
                        @foreach ($data["kewarganegaraan"] as $kewarganegaraan)
                          <option value="{{ $kewarganegaraan }}" @if($msy->kewarganegaraan===$kewarganegaraan) selected @endif>{{ $kewarganegaraan }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary" name="id" value="{{ $msy->id }}">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END Edit Modal -->

    <!-- Hapus Modal -->
    <div class="modal fade" id="hapus-{{ $msy->id }}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus Data Statistik Desa Janju</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body m-3">
            <p class="mb-0">Apakah anda yakin untuk menghapus data ini ?</p>
            <h5><strong>{{ $msy->nik }}</strong> - <strong>{{ $msy->nama_lengkap }}</strong></h5>
            <h5><strong>{{ $msy->judul }}</strong></h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <form action="/dashboard/kelola-statistik/delete/{{ $msy->id }}" method="post">
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