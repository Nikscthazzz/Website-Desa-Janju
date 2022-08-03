@extends('layouts.landing-layout')
@section("active_statistik", "active")
@section("content")

  <section class="bg-primary p-0" style="height:63.45px !important;">
  </section>

  <section class="mt-5">
    <div class="container" data-aos="fade-up" data-aos-duration="500">
      <h3 class="text-center" style="font-weight: 700">Statistik Desa Janju <hr class="bg-primary m-auto" style="width:20%; height:2px"></h3>
      <p class="text-justify" style="font-size: 15px">
        Statistik Desa Janju merupakan hasil dari dalam melakukan pendataan secara tepat, akurat dan akuntabel berdasarkan catatan Kartu Keluarga. Diolah oleh tim pendata Desa Janju. Statistika Desa Janju meliputi beberapa kategori yakni sebagai berikut. 
      </p>
      <br>

      <div class="row" data-aos="fade-up" data-aos-duration="500">
        <div class="col-md-4 mb-3">
          <div class="card card-1 boxed boxed--sm boxed--border bg-light">
            <div class="card-head">
              <h4 class="card-title text-dark mb-1">
                <strong>Data Agama</strong>
              </h4>
            </div>
            <div class="card-body">
              <div class="card card-1 boxed boxed--sm boxed--border bg-light">
                <div class="card-body">
                  <canvas id="chart_agama"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card card-1 boxed boxed--sm boxed--border bg-light">
            <div class="card-head">
              <h4 class="card-title text-dark mb-1">
                <strong>Data Jenis Kelamin</strong>
              </h4>
            </div>
            <div class="card-body">
              <div class="card card-1 boxed boxed--sm boxed--border bg-light">
                <div class="card-body">
                  <canvas id="chart_jenis_kelamin"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card card-1 boxed boxed--sm boxed--border bg-light">
            <div class="card-head">
              <h4 class="card-title text-dark mb-1">
                <strong>Data Pendidikan</strong>
              </h4>
            </div>
            <div class="card-body">
              <div class="card card-1 boxed boxed--sm boxed--border bg-light">
                <div class="card-body">
                  <canvas id="chart_pendidikan"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card card-1 boxed boxed--sm boxed--border bg-light">
            <div class="card-head">
              <h4 class="card-title text-dark mb-1">
                <strong>Data Status Pernikahan</strong>
              </h4>
            </div>
            <div class="card-body">
              <div class="card card-1 boxed boxed--sm boxed--border bg-light">
                <div class="card-body">
                  <canvas id="chart_status_pernikahan"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card card-1 boxed boxed--sm boxed--border bg-light">
            <div class="card-head">
              <h4 class="card-title text-dark mb-1">
                <strong>Data Pekerjaan</strong>
              </h4>
            </div>
            <div class="card-body">
              <div class="card card-1 boxed boxed--sm boxed--border bg-light">
                <div class="card-body">
                  <canvas id="chart_pekerjaan"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card card-1 boxed boxed--sm boxed--border bg-light">
            <div class="card-head">
              <h4 class="card-title text-dark mb-1">
                <strong>Data Kewarganegaraan</strong>
              </h4>
            </div>
            <div class="card-body">
              <div class="card card-1 boxed boxed--sm boxed--border bg-light">
                <div class="card-body">
                  <canvas id="chart_kewarganegaraan"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--end of container-->
  </section>



@endsection
@section("script")
<script>
  Chart.overrides["pie"].plugins.legend.position = 'bottom';
  Chart.overrides["pie"].plugins.legend.display = false;
  // /////////////////////////////////////////////////////////////////////////////////////////
  const data_agama = {
    labels: @json($data["agama"]),
    datasets: [{
      label: 'My First Dataset',
      data: @json($total["agama"]),
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 99, 132)',
        'rgb(118, 186, 153)',
        'rgb(135, 100, 69)',
        'rgb(202, 149, 92)',
        'rgb(237, 223, 179)',
      ],
      hoverOffset: 4
    }]
  };

  const config_agama = {
    type: 'pie',
    data: data_agama,
  };

  const chart_agama = new Chart(
    document.getElementById('chart_agama'),
    config_agama
  );

  // //////////////////////////////////////////////////////////////////////////////////////

  const data_pendidikan = {
    labels: @json($data["pendidikan"]),
    datasets: [{
      label: 'My First Dataset',
      data: @json($total["pendidikan"]),
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 99, 132)',
        'rgb(118, 186, 153)',
        'rgb(135, 100, 69)',
        'rgb(202, 149, 92)',
      ],
      hoverOffset: 4
    }]
  };

  const config_pendidikan = {
    type: 'pie',
    data: data_pendidikan,
  };

  const chart_pendidikan = new Chart(
    document.getElementById('chart_pendidikan'),
    config_pendidikan
  );
  
  // //////////////////////////////////////////////////////////////////////////////////////

  const data_pekerjaan = {
    labels: @json($data["pekerjaan"]),
    datasets: [{
      label: 'My First Dataset',
      data: @json($total["pekerjaan"]),
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 99, 132)',
        'rgb(118, 186, 153)',
        'rgb(135, 100, 69)',
        'rgb(202, 149, 92)',
        'rgb(237, 223, 179)',
      ],
      hoverOffset: 4
    }]
  };

  const config_pekerjaan = {
    type: 'pie',
    data: data_pekerjaan,
  };

  const chart_pekerjaan = new Chart(
    document.getElementById('chart_pekerjaan'),
    config_pekerjaan
  );
  
  // //////////////////////////////////////////////////////////////////////////////////////

  const data_jenis_kelamin = {
    labels: @json($data["jenis_kelamin"]),
    datasets: [{
      label: 'My First Dataset',
      data: @json($total["jenis_kelamin"]),
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
      ],
      hoverOffset: 4
    }]
  };

  const config_jenis_kelamin = {
    type: 'pie',
    data: data_jenis_kelamin,
  };

  const chart_jenis_kelamin = new Chart(
    document.getElementById('chart_jenis_kelamin'),
    config_jenis_kelamin
  );
  
  // //////////////////////////////////////////////////////////////////////////////////////

  const data_status_pernikahan = {
    labels: @json($data["status_pernikahan"]),
    datasets: [{
      label: 'My First Dataset',
      data: @json($total["status_pernikahan"]),
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 99, 132)',
        'rgb(118, 186, 153)',
        'rgb(135, 100, 69)',
      ],
      hoverOffset: 4
    }]
  };

  const config_status_pernikahan = {
    type: 'pie',
    data: data_status_pernikahan,
  };

  const chart_status_pernikahan = new Chart(
    document.getElementById('chart_status_pernikahan'),
    config_status_pernikahan
  );
  
  // //////////////////////////////////////////////////////////////////////////////////////

  const data_kewarganegaraan = {
    labels: @json($data["kewarganegaraan"]),
    datasets: [{
      label: 'My First Dataset',
      data: @json($total["kewarganegaraan"]),
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };

  const config_kewarganegaraan = {
    type: 'pie',
    data: data_kewarganegaraan,
  };

  const chart_kewarganegaraan = new Chart(
    document.getElementById('chart_kewarganegaraan'),
    config_kewarganegaraan
  );
</script>
@endsection