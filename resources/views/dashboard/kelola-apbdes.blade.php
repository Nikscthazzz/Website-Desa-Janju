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
                <form action="/dashboard/kelola-apbdes/tambah" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-3">
                      <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="number" min="1000" name="tahun" class="form-control" placeholder="Masukkan Tahun" required>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="mb-3">
                        <label class="form-label">Jenis APBDesa Janju</label>
                        <select class="form-select" aria-label="Default select example" id="slc_jenis" name="jenis" required>
                          <option selected>Pendapatan Desa</option>
                          <option>Pembelanjaan Desa</option>
                          <option>Pelaksanaan Desa</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label" id="lbl_nama">Nama Pendapatan Desa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Pendapatan Desa" id="inp_nama" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Anggaran</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input type="number" class="form-control" placeholder="Masukkan Anggaran" name="anggaran" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Realisasi</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input type="number" class="form-control" placeholder="Masukkan Realisasi" name="realisasi" required>
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
                  <select class="form-select" aria-label="Default select example" id="slc_tahun">
                    <option selected value="*">Pilih Tahun</option>
                    @foreach ($tahun as $th)
                      <option>{{ $th->tahun }}</option>
                    @endforeach
                  </select>
                </div>
                <div id="data_apbdes">
                @foreach ($data as $key => $value)
                <h5><strong>{{ $key }}</strong></h5>
                <table class="table table-striped table-sm mb-3" style="width:100%">
                  <thead>
                    <tr>
                      <th>Uraian</th>
                      <th>Anggaran</th>
                      <th>Realisasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($value["data"] as $dt)
                    <tr>
                      <td>{{ $dt->nama }}</td>
                      <td>Rp. {{ number_format($dt->anggaran,2,',','.') }}</td>
                      <td>Rp. {{ number_format($dt->realisasi,2,',','.') }}</td>
                      <td>
                        <div class="d-flex">
                          <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#edit-{{ $dt->id }}">
                            <i class="fa fa-pen-to-square"></i>
                          </button>
                          <button type="button" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#hapus-{{ $dt->id }}">
                            <i class="fa fa-trash-can"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    <tr>
                      <td><strong>Total</strong></td>
                      <td><strong>Rp. {{ number_format($value["total"]["anggaran"],2,',','.') }}</strong></td>
                      <td colspan="2"><strong>Rp. {{ number_format($value["total"]["realisasi"],2,',','.') }}</strong></td>
                    </tr>
                  </tbody>
                </table>
                @endforeach
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    @foreach ($data as $key => $value)
      @foreach ($value["data"] as $dt)
        <!-- Edit Modal -->
        <div class="modal fade" id="edit-{{ $dt->id }}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Data APBDes Desa Janju</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body m-3">
                <form action="/dashboard/kelola-apbdes/edit/{{ $dt->id }}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-3">
                      <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="number" min="1000" name="tahun" class="form-control" placeholder="Masukkan Tahun" required value="{{ $dt->tahun }}">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="mb-3">
                        <label class="form-label">Jenis APBDesa Janju</label>
                        <select class="form-select" aria-label="Default select example" id="slc_jenis" name="jenis" required>
                          <option @if($dt->jenis == "Pendapatan Desa") selected @endif>Pendapatan Desa</option>
                          <option @if($dt->jenis == "Pembelanjaan Desa") selected @endif>Pembelanjaan Desa</option>
                          <option @if($dt->jenis == "Pelaksanaan Desa") selected @endif>Pelaksanaan Desa</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label" id="lbl_nama">Nama {{ $key }}</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama {{ $key }}" id="inp_nama" required value="{{ $dt->nama }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Anggaran</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input type="number" class="form-control" placeholder="Masukkan Anggaran" name="anggaran" required value="{{ $dt->anggaran }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Realisasi</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input type="number" class="form-control" placeholder="Masukkan Realisasi" name="realisasi" required value="{{ $dt->realisasi }}">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" required name="id" value="{{ $dt->id }}">Edit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- END Edit Modal -->

        <!-- Hapus Modal -->
        <div class="modal fade" id="hapus-{{ $dt->id }}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Hapus Data {{ $key }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body m-3">
                <p class="mb-0">Apakah anda yakin untuk menghapus data ini ?</p>
                <h5><strong>{{ $dt->nama }}</strong>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <form action="/dashboard/kelola-apbdes/delete/{{ $dt->id }}" method="post">
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
    @endforeach

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
  });
</script>

<script>
  const slc_jenis = document.getElementById("slc_jenis");
  const lbl_nama = document.getElementById("lbl_nama");
  const inp_nama = document.getElementById("inp_nama");

  slc_jenis.addEventListener("change", function(){
    var value = slc_jenis.value;
    var text = slc_jenis.options[slc_jenis.selectedIndex].text;
    lbl_nama.innerHTML = "Nama " + text;
    inp_nama.placeholder = "Masukkan Nama " + text;
  })
</script>

<script>
  const slc_tahun = document.getElementById("slc_tahun");
  const data_apbdes = document.getElementById("data_apbdes");
  slc_tahun.addEventListener("change", function(){
    data_apbdes.innerHTML = `
    <div class="text-center">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    `;

    var value = slc_tahun.value;
    var text = slc_tahun.options[slc_tahun.selectedIndex].text;

    var data = { tahun: text }

    fetch('{{ url("/dashboard/kelola-apbdes/data") }}', {
      method: 'POST', 
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify(data),
    })
    .then((response) => response.json())
    .then((data) => {
        data_apbdes.innerHTML = data;
    })
    .catch((error) => {
      console.error('Error:', error);
    });

  })
</script>
@endsection