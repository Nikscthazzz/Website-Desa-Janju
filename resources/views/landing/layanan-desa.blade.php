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
      

      <div class="row">
        <div class="col-12">
          
          <table id="table" class="display">
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