<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dashboard - Admin</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="backend2/assets/img/book.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="backend2/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['backend2/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="backend2/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="backend2/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="backend2/assets/css/demo.css">
</head>

<body>

@extends('admin.dashboard.konten')
@section('content')


	<div class="wrapper">

			@include('admin.dashboard.header')
			<!-- End Navbar -->


		<!-- Sidebar -->

		@include('admin.dashboard.sidebar')

		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Informasi Umum Terkait Halaman Admin</h5>
							</div>
						</div>
					</div>
				</div>
				<br></br>
                <div class="container-fluid">
                                <div class="row">
                                <div class="col-xl-3 col-md-6 mb-5">
                                    <div class="card border-left-success shadow h-100 py-2" style="background-color: #FD841F; ">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-4">
                                                    <div class="text-xs font-weight-bold text-uppercase mb-1 text-white">Mentor</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_mentor }}</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-solid fa-users fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-5">
                                    <div class="card border-left-success shadow h-100 py-2" style="background-color: #4ece13; ">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-uppercase mb-1 text-white">Bidang Magang</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_bidang }}</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-solid fa-tasks fa-2x text-gray-300"></i>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-5">
                                <div class="card border-left-success shadow h-100 py-2" style="background-color: #5F9DF7; ">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1 text-white">Kesan & Pesan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_kesanpesan }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-solid fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-5">
                                <div class="card border-left-success shadow h-100 py-2" style="background-color: #EC4646; ">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1 text-white">Aspirasi</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_aspirasi }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-solid fa-comment-dots fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card mb-4" style="background: #c2f3ff">
                                            <div class="card-header">
                                                <i class="fas fa-chart-bar me-1"></i>
                                                Jumlah Pendaftar Magang / PKL Diskominfo Per Bulan
                                            </div>
                                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card mb-4" style="background: rgba(178, 255, 170, 0.667)">
                                            <div class="card-header" >
                                                <i class="fas fa-chart-area me-1"></i>
                                                Jumlah Pendaftar Magang / PKL Diskominfo Per Tahun
                                            </div>
                                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pie Chart -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card mb-4" style="background: rgba(210, 210, 210, 0.733)">
                                            <div class="card-header">
                                                <i class="fas fa-chart-pie me-1"></i>
                                                Status Pendaftaran Peserta Magang / PKL Diskominfo
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        @foreach($plabels as $label)
                                        <span class="mr-2">
                                            <i class="fas fa-circle"></i> {{$label}}
                                        </span>
                                        @endforeach
                                        </div>
                                </div>
                            </div>
                                </div>
                                <div class="col-xl-6">
                                        <div class="card mb-4" style="background: rgba(210, 210, 210, 0.733)">
                                            <div class="card-header">
                                                <i class="fas fa-chart-pie me-1"></i>
                                                Status Aktivasi Peserta Magang / PKL Diskominfo
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieCharts"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        @foreach($pplabels as $lbl)
                                        <span class="mr-2">
                                            <i class="fas fa-circle"></i> {{$lbl}}
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                <!-- /.container-fluid -->


			@include('admin.dashboard.footer')

		</div>
		<!-- Custom template | don't include it in your project! -->
		{{-- <div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div> --}}
		<!-- End Custom template -->
	</div>

<!--   Core JS Files   -->
<script src="backend2/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="backend2/assets/js/core/popper.min.js"></script>
<script src="backend2/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="backend2/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="backend2/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="backend2/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="backend2/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="backend2/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="backend2/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="backend2/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="backend2/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="backend2/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="backend2/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="backend2/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="backend2/assets/js/atlantis.min.js"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="backend2/assets/js/setting-demo.js"></script>
<script src="backend2/assets/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
	var _ydata=JSON.parse('{!! json_encode($months) !!}');
	var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
</script>
<script type="text/javascript">
	var __ydata=JSON.parse('{!! json_encode($year) !!}');
	var __xdata=JSON.parse('{!! json_encode($yearsCount) !!}');
</script>
<script src="backend2/assets/demo/chart-area-demo.js"></script>
<script src="backend2/assets/demo/chart-bar-demo.js"></script>

<!-- Page level plugins -->
<script src="backend2/vendor/chart.js/Chart.min.js"></script>

<script type="text/javascript">
    var _plabels={!! json_encode($plabels) !!};
    var _pdata={!! json_encode($pdata) !!};
</script>
<script type="text/javascript">
    var _pplabels={!! json_encode($pplabels) !!};
    var _ppdata={!! json_encode($ppdata) !!};
</script>
<!-- Page level custom scripts -->
<script src="backend2/js/demo/chart-pie-demo.js"></script>
<script src="backend2/js/demo/charts-pie-demo.js"></script>

<script>
    Circles.create({
        id:'circles-1',
        radius:45,
        value:60,
        maxValue:100,
        width:7,
        text: 5,
        colors:['#f1f1f1', '#FF9E27'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    Circles.create({
        id:'circles-2',
        radius:45,
        value:70,
        maxValue:100,
        width:7,
        text: 36,
        colors:['#f1f1f1', '#2BB930'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    Circles.create({
        id:'circles-3',
        radius:45,
        value:40,
        maxValue:100,
        width:7,
        text: 12,
        colors:['#f1f1f1', '#F25961'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: 'bar',
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
            datasets : [{
                label: "Total Income",
                backgroundColor: '#ff9e27',
                borderColor: 'rgb(23, 125, 255)',
                data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false //this will remove only the label
                    },
                    gridLines : {
                        drawBorder: false,
                        display : false
                    }
                }],
                xAxes : [ {
                    gridLines : {
                        drawBorder: false,
                        display : false
                    }
                }]
            },
        }
    });

    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
</script>
</body>
</html>

