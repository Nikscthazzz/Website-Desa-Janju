@extends("root.dashboard")
@section('informasi-active','active')
@section("content")

<main class="content">

  {{-- <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Quill</h5>
          <h6 class="card-subtitle text-muted">Modern WYSIWYG editor built for compatibility and extensibility.</h6>
        </div>
        <div class="card-body">
          <div class="clearfix">
            <div id="quill-toolbar">
              <span class="ql-formats">
                <select class="ql-font"></select>
                <select class="ql-size"></select>
              </span>
              <span class="ql-formats">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-strike"></button>
              </span>
              <span class="ql-formats">
                <select class="ql-color"></select>
                <select class="ql-background"></select>
              </span>
              <span class="ql-formats">
                <button class="ql-script" value="sub"></button>
                <button class="ql-script" value="super"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-header" value="1"></button>
                <button class="ql-header" value="2"></button>
                <button class="ql-blockquote"></button>
                <button class="ql-code-block"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-list" value="ordered"></button>
                <button class="ql-list" value="bullet"></button>
                <button class="ql-indent" value="-1"></button>
                <button class="ql-indent" value="+1"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-direction" value="rtl"></button>
                <select class="ql-align"></select>
              </span>
              <span class="ql-formats">
                <button class="ql-link"></button>
                <button class="ql-image"></button>
                <button class="ql-video"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-clean"></button>
              </span>
            </div>
            <div id="quill-editor"></div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="container-fluid p-0">

    <div class="row">
      <h1 class="h3 mb-3">Kelola Informasi</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Tambah Informasi Baru</h5>
          </div>
          <div class="card-body d-flex">
            <div class="col-12">
              <form action="/kelola-informasi/tambah" method="POST" enctype="multipart/form-data" id="tambahForm">
                @csrf
                <div class="form-group mb-3">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Informasi" required>
                </div>
                <div class="form-group mb-3">
                  <label for="isi">Isi</label>
                  <textarea class="form-control" id="isi" rows="15" name="isi" placeholder="Isi Informasi" required></textarea>
                </div>
                <div class="form-group mb-3">
                  <label for="gambar">Gambar</label>
                  <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary" id="tambahBtn">Tambah</button>
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
              <h5 class="card-title">Daftar Informasi</h5>
            </div>
            <div class="card-body">
              <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Di Upload Oleh</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th style="width: 30%">Isi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($informasi as $i)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $i->user->name }}</td>
                    <td>{{ date('M, d Y', strtotime($i->created_at)) }}</td>
                    <td>
                      <img src="{{ asset("upload/informasi/" . $i->gambar) }}" alt="{{ $i->judul }}" style="max-height: 100px" class="img-responsive img-thumbnail">
                    </td>
                    <td>{{ $i->judul }}</td>
                    <td>{{ substr(str_replace('<br />', '', $i->isi), 0, 100) }} @if(strlen($i->isi) > 100) ... @endif</td>
                    <td class="table-action">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal-{{ $i->id }}">Edit</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-modal-{{ $i->id }}">Hapus</button>
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


@foreach ($informasi as $i)
  <!-- Edit Modal -->
  <div class="modal fade" id="edit-modal-{{ $i->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Informasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <form action="/kelola-informasi/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Informasi" value="{{ $i->judul }}" required>
            </div>
            <div class="form-group mb-3">
              <label for="isi">Isi</label>
              <textarea class="form-control" id="isi" rows="17" name="isi" placeholder="Isi Informasi" required>{{ str_replace('<br />', '', $i->isi) }}</textarea>
            </div>
            <div class="form-group mb-3">
              <label for="gambar">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" name="id" value="{{ $i->id }}">Edit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Edit Modal -->

  <!-- Hapus Modal -->
  <div class="modal fade" id="hapus-modal-{{ $i->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Informasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <p class="mb-0">Apakah anda yakin untuk menghapus informasi ini?</p>
          <h5><strong>{{ $i->judul }}</strong></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href="/kelola-informasi/hapus/{{ $i->id }}" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Hapus Modal -->
@endforeach

@endsection
