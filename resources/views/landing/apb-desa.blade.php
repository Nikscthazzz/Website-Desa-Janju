@extends('layouts.landing-layout')
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
        <span class="dropdown__trigger bg-primary" style="padding: 8px 24px; border-radius: 24px">Pilih Tahun
            <i class="stack-down-open"></i>
        </span>
        <div class="dropdown__container">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-2 dropdown__content">
                        <h5>Select an option</h5>
                        <ul class="menu-vertical">
                            <li>
                                <a href="#">Create</a>
                            </li>
                            <li>
                                <a href="#">Manage</a>
                            </li>
                            <li>
                                <a href="#">Share</a>
                            </li>
                            <li>
                                <a href="#">Logout</a>
                            </li>
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
        <h5 class="m-1">Hallo world</h5>
        <table id="table1" class="display">
          <thead>
              <tr>
                  <th>Column 1</th>
                  <th>Column 2</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Row 1 Data 1</td>
                  <td>Row 1 Data 2</td>
              </tr>
              <tr>
                  <td>Row 2 Data 1</td>
                  <td>Row 2 Data 2</td>
              </tr>
          </tbody>
        </table>

      </div>
    </div>

    <div class="row mb-3">
      <div class="col-12">
        <h5 class="m-1">Hallo world</h5>
        <table id="table2" class="display">
          <thead>
              <tr>
                  <th>Column 1</th>
                  <th>Column 2</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Row 1 Data 1</td>
                  <td>Row 1 Data 2</td>
              </tr>
              <tr>
                  <td>Row 2 Data 1</td>
                  <td>Row 2 Data 2</td>
              </tr>
          </tbody>
        </table>

      </div>
    </div>

    <div class="row mb-3">
      <div class="col-12">
        <h5 class="m-1">Hallo world</h5>
        <table id="table2" class="display">
          <thead>
              <tr>
                  <th>Column 1</th>
                  <th>Column 2</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Row 1 Data 1</td>
                  <td>Row 1 Data 2</td>
              </tr>
              <tr>
                  <td>Row 2 Data 1</td>
                  <td>Row 2 Data 2</td>
              </tr>
          </tbody>
        </table>

      </div>
    </div>
    <!--end of container-->
  </section>

@endsection
@section("script")
<script>
  $(document).ready( function () {
      $('#table').DataTable({
        searching: false,
        ordering:  false,
        paging: false
      });
  } );
</script>
@endsection