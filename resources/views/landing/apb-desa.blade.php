@extends('layouts.landing-layout')
@section("active_apb", "active")
@section("content")

  <section class="bg-primary p-0" style="height:63.45px !important;">
  </section>

  <section class="mt-5">
    <div class="container">
      <h4 class="text-center" style="font-weight: 700">APBDesa Janju <hr class="bg-primary m-auto" style="width:20%; height:2px"></h4>
      <p class="text-justify">
        APBDesa adalah singkatan dari Anggaran Pendapatan dan Belanja Desa  merupakan peraturan desa yang memuat sumber-sumber penerimaan dan alokasi pengeluaran desa dalam kurun waktu satu tahun. APBDesa terdiri dari pendapatan desa, belanja desa dan pembiayaan. Rancangan APBDesa dibahas dalam musyawarah perencanaan pembangunan desa. 
      </p>

      <div class="dropdown mb-5 text-light" style="display: inline-block">
        <span class="dropdown__trigger bg-primary" style="padding: 8px 24px; border-radius: 24px" id="lbl_tahun">Pilih Tahun
            <i class="stack-down-open"></i>
        </span>
        <div class="dropdown__container">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-2 dropdown__content">
                        <h5 class="my-0">Pilih Tahun</h5>
                        <ul class="menu-vertical">
                          @foreach ($tahun as $thn)
                            <li>
                                <a href="#{{ $thn->tahun }}" class="tahun_value">{{ $thn->tahun }}</a>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end dropdown container-->
    </div>

    <div class="row mb-3">
      <div class="col-12">

        <div id="data_apbdes">
          @foreach ($data as $key => $value)
          <h5><strong>{{ $key }}</strong></h5>
          <table class="table table-striped table-sm mb-3" style="width:100%">
            <thead>
              <tr>
                <th>Uraian</th>
                <th>Anggaran</th>
                <th>Realisasi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($value["data"] as $dt)
              <tr>
                <td>{{ $dt->nama }}</td>
                <td>Rp. {{ number_format($dt->anggaran,2,',','.') }}</td>
                <td>Rp. {{ number_format($dt->realisasi,2,',','.') }}</td>
              </tr>
              @endforeach
              <tr>
                <td><strong>Total</strong></td>
                <td><strong>Rp. {{ number_format($value["total"]["anggaran"],2,',','.') }}</strong></td>
                <td><strong>Rp. {{ number_format($value["total"]["realisasi"],2,',','.') }}</strong></td>
              </tr>
            </tbody>
          </table>
          @endforeach
          </div>

      </div>
    </div>
    <!--end of container-->
  </section>

@endsection
@section("script")
<script>
  $(document).ready( function () {
      $('#table1').DataTable({
        searching: false,
        ordering:  false,
        paging: false
      });
      $('#table2').DataTable({
        searching: false,
        ordering:  false,
        paging: false
      });
      $('#table3').DataTable({
        searching: false,
        ordering:  false,
        paging: false
      });
  } );
</script>

<script>
  const tahun_value = document.getElementsByClassName("tahun_value");
  const data_apbdes = document.getElementById("data_apbdes");
  const lbl_tahun = document.getElementById("lbl_tahun");

  for (let i = 0; i < tahun_value.length; i++) {
    tahun_value[i].addEventListener("click", function(){
      data_apbdes.innerHTML = `
        <div class="text-center">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      `;
      lbl_tahun.innerHTML = "Data Tahun " + tahun_value[i].href.split("#")[1] + "<i class='stack-down-open'></i>";

      let data = {tahun: tahun_value[i].href.split("#")[1]}

      fetch('{{ url("/apb-desa/data") }}', {
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
    
  }
  // tahun_value.forEach(thn => {
  //   thn.addEventListener("click", function(){
  //     alert(thn.href.split("#")[1])
  //   })
  // });
</script>
@endsection