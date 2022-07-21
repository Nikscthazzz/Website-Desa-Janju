@extends("root.dashboard")
@section('karya-active','active')
@section("content")

<main class="content">
  <div class="container-fluid p-0">

    <div class="row">
      <h1 class="h3 mb-3">Kelola Karya Siswa SMPN 7 Bontang</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Kelola Karya</h5>
          </div>
          <div class="card-body">
            <div class="col-12">
              <form action="/kelola-karya/tambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                  <label for="karya">Karya</label>
                  <input type="file" class="form-control" id="karya" name="karya" accept=".mp3, .m4a, .wav, .mp4, .mov, .avi, .mkv, .png, .jpg, .jpeg, .ico, .svg">
                  <small class="text-primary mb-0 align-middle"> Karya dapat berupa gambar, video, maupun audio</small>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group mb-3">
                      <label for="pencipta">Pencipta</label>
                      <input type="text" class="form-control" id="pencipta" name="pencipta" placeholder="Pencipta" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group mb-3">
                      <label for="kategori">Kelas</label>
                      <select class="form-control" id="kelas" name="kelas" required>
                        <option disabled>Kelas 7</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="7C">7C</option>
                        <option value="7D">7D</option>
                        <option disabled>Kelas 8</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="8C">8C</option>
                        <option value="8D">8D</option>
                        <option disabled>Kelas 9</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        <option value="9C">9C</option>
                        <option value="9D">9D</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Karya" required>
                </div>
                <div class="form-group mb-3">
                  <label for="isi">Deskripsi</label>
                  <textarea class="form-control" id="isi" rows="15" name="deskripsi" placeholder="Deskripsi Karya" required></textarea>
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
              <h5 class="card-title">Daftar Karya</h5>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <label class="text-bold">Tampilkan berdasarkan format</label>
                <div class="btn-group mb-3" role="group" aria-label="Default button group">
                  <button type="button" id="karya_all" class="btn btn-primary">Semua</button>
                  <button type="button" id="karya_image" class="btn btn-primary">
                    <i class="fas fa-image"></i> Image
                  </button>
                  <button type="button" id="karya_audio" class="btn btn-primary">
                    <i class="fas fa-music"></i> Audio
                  </button>
                  <button type="button" id="karya_video" class="btn btn-primary">
                    <i class="fas fa-video"></i> Video
                  </button>
                </div>
              </div>
              <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Karya</th>
                    <th>Format</th>
                    <th>Judul</th>
                    <th style="max-width: 30%">Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($karya as $k)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <button class="btn btn-link" data-bs-toggle="modal" data-bs-target="#karya-modal-{{ $k->id }}">
                        <i class="fas fa-eye"></i> Lihat Karya <i class="fas fa-external-link-alt"></i>
                      </button>
                    </td>
                    <td>{{ $k->format }}</td>
                    <td>{{ $k->judul }}</td>
                    <td>{{ substr(str_replace('<br />', '', $k->deskripsi), 0, 100) }} @if(strlen($k->deskripsi) > 100) . . . @endif</td>
                    <td class="table-action">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal-{{ $k->id }}">Edit</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-modal-{{ $k->id }}">Hapus</button>
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

@foreach ($karya as $k)
  <!-- Edit Modal -->
  <div class="modal fade" id="edit-modal-{{ $k->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Karya</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <form action="/kelola-karya/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
              <label for="karya">Karya</label>
              <input type="file" class="form-control" id="karya" name="karya" accept=".mp3, .m4a, .wav, .mp4, .mov, .avi, .mkv, .png, .jpg, .jpeg, .ico, .svg">
              <small class="text-primary mb-0 align-middle"> Karya dapat berupa gambar, video, maupun audio</small>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group mb-3">
                  <label for="pencipta">Pencipta</label>
                  <input type="text" class="form-control" id="pencipta" name="pencipta" placeholder="Pencipta" value="{{ $k->pencipta }}" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group mb-3">
                  <label for="kategori">Kelas</label>
                  <select class="form-control" id="kelas" name="kelas" required>
                    <option disabled>Kelas 7</option>
                    <option value="7A" @if($k->kelas == "7A") selected @endif>7A</option>
                    <option value="7B" @if($k->kelas == "7B") selected @endif>7B</option>
                    <option value="7C" @if($k->kelas == "7C") selected @endif>7C</option>
                    <option value="7D" @if($k->kelas == "7D") selected @endif>7D</option>
                    <option disabled>Kelas 8</option>
                    <option value="8A" @if($k->kelas == "8A") selected @endif>8A</option>
                    <option value="8B" @if($k->kelas == "8B") selected @endif>8B</option>
                    <option value="8C" @if($k->kelas == "8C") selected @endif>8C</option>
                    <option value="8D" @if($k->kelas == "8D") selected @endif>8D</option>
                    <option disabled>Kelas 9</option>
                    <option value="9A" @if($k->kelas == "9A") selected @endif>9A</option>
                    <option value="9B" @if($k->kelas == "9B") selected @endif>9B</option>
                    <option value="9C" @if($k->kelas == "9C") selected @endif>9C</option>
                    <option value="9D" @if($k->kelas == "9D") selected @endif>9D</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group mb-3">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Karya" value="{{ $k->judul }}" required>
            </div>
            <div class="form-group mb-3">
              <label for="isi">Deskripsi</label>
              <textarea class="form-control" id="isi" rows="15" name="deskripsi" placeholder="Deskripsi Karya" required>{{ str_replace('<br />', '', $k->deskripsi) }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" name="id" value="{{ $k->id }}">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Edit Modal -->

  <!-- Hapus Modal -->
  <div class="modal fade" id="hapus-modal-{{ $k->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Karya</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <p class="mb-0">Apakah anda yakin untuk menghapus karya ini?</p>
          <h5><strong>{{ $k->judul }}</strong></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href="/kelola-karya/hapus/{{ $k->id }}" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Hapus Modal -->
  
  <!-- Karya Modal -->
  
  <div class="modal fade" id="karya-modal-{{ $k->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ $k->judul }} - Karya {{ $k->pencipta }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <div class="row">
            <div class="col-md-12">
              @if($k->format == "video")
              <video class="w-100" controls>
                <source src="{{asset('upload/karya/' . $k->format . "/" . $k->karya)}}" type="video/mp4">
              </video>
              @elseif($k->format == "audio")
              <audio controls class="w-100">
                <source src="{{asset('upload/karya/' . $k->format . "/" . $k->karya)}}" type="audio/mpeg">
              </audio>
              @elseif($k->format == "image")
              <img src="{{asset('upload/karya/' . $k->format . "/" . $k->karya)}}" class="w-100" alt="{{ $k->judul }}">
              @endif
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          {{-- <a href="/kelola-karya/hapus/{{ $k->id }}" class="btn btn-danger">Hapus</a> --}}
        </div>
      </div>
    </div>
  </div>

  <!-- End Karya Modal -->



@endforeach



@endsection

@section('script')

<script>
  // filter table by button 
  // show all
  $('#karya_all').click(function() {
    $('#datatables-reponsive').DataTable().search('').columns().search('').draw();
  });
  $('#karya_image').click(function() {
    $('#datatables-reponsive').DataTable().column(2).search('image').draw();
  });
  $('#karya_audio').click(function() {
    $('#datatables-reponsive').DataTable().column(2).search('audio').draw();
  });
  $('#karya_video').click(function() {
    $('#datatables-reponsive').DataTable().column(2).search('video').draw();
  });
</script>

@endsection