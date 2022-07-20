<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo_paser.png') }}">


	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Dashboard Website Desa Janju</title>

	<link href="{{ asset("dashboard_assets") }}/css/app.css" rel="stylesheet">

	
	<link class="js-stylesheet" href="https://demo.adminkit.io/css/light.css" rel="stylesheet">
	

	{{-- Font Awesome 5 --}}
	<link href="{{ asset("dashboard_assets") }}/fa/css/all.css" rel="stylesheet">
	
	@yield("linkcss")

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="/">
          <span class="align-middle">
						<img class="img img-fluid" alt="logo" src="{{ asset('assets') }}/img/logo_paser_long.png" />
					</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Halaman Admin
					</li>
					<li class="sidebar-item @yield("beranda-active")">
						<a class="sidebar-link" href="/dashboard/beranda">
              <i class="fas fa-tachometer-alt align-middle"></i> <span class="align-middle">Beranda</span>
            </a>
					</li>					
					{{-- <li class="sidebar-item @yield("beranda-active")">
						<a class="sidebar-link" href="/kelola-beranda">
              <i class="far fa-file-alt align-middle"></i> <span class="align-middle">Kelola Beranda</span>
            </a>
					</li>					
					<li class="sidebar-item @yield("informasi-active")">
						<a class="sidebar-link" href="/kelola-informasi">
              <i class="far fa-file-alt align-middle"></i> <span class="align-middle">Kelola Informasi</span>
            </a>
					</li>					
					<li class="sidebar-item @yield("karya-active")">
						<a class="sidebar-link" href="/kelola-karya">
              <i class="align-middle fab fa-artstation"></i> <span class="align-middle">Kelola Karya</span>
            </a>
					</li>
					<li class="sidebar-item @yield("pegawai-active")">
						<a class="sidebar-link" href="/kelola-pegawai">
              <i class="fas fa-chalkboard-teacher align-middle"></i> <span class="align-middle">Kelola Pegawai</span>
            </a>
					</li> --}}
					<li class="sidebar-header">
						Authenticate
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="/logout">
              <i class="fas fa-sign-out-alt align-middle"></i> <span class="align-middle">Log Out</span>
            </a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link  d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<strong><span class="text-dark">DESA JANJU</span></strong>
              </a>
						</li>
					</ul>
				</div>
			</nav>

			@yield("content")

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="/" target="_blank"><strong>DESA JANJU</strong></a> &copy;
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	{{-- <script src="{{ asset("dashboard_assets") }}/js/app.js"></script> --}}
	<script src="https://demo.adminkit.io/js/app.js"></script>
	<script src="https://demo.adminkit.io/js/datatables.js"></script>


	<script>
		const notify = document.getElementById("notify-custom")
      setTimeout(() => {
        notify.classList.add("notyf__toast--disappear")
      }, 7500)

		document.addEventListener("DOMContentLoaded", function() {
					// Datatables Responsive
					$("#datatables-reponsive").DataTable({
						responsive: true
					});
					const notify = document.getElementById("notify-custom")
					setTimeout(() => {
						notify.classList.add("notyf__toast--disappear")
					}, 7500)
				});

		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 500
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

	@yield('script')

</body>

</html>