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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

@extends('admin.dashboard.konten')
@extends('admin.table.appnew')
@section('content')


	<div class="wrapper">

			@include('admin.dashboard.header')
			<!-- End Navbar -->


		<!-- Sidebar -->

		@include('admin.dashboard.sidebar')

		<!-- End Sidebar -->


<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Mentoring Peserta PKL / Magang</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="/admin">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/mentoring">Data Mentoring Peserta PKL / Magang</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                             <h4>Edit Data Mentoring Peserta PKL / Magang</h4>
                        </div>
                        <form action="{{route('admin.dashboard.mentoring.edit',$mentoring->id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label>Nama Mentor</label>
                                <select name="users" class="form-control" required="">
                                    @foreach($mentor as $mt)
                                    <option value="{{$mt->id}}">{{$mt->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Ketua Kelompok</label>
                                <select name="user" class="form-control" required="">
                                    @foreach($pendaftar as $pdftr)
                                    <option value="{{$pdftr->id}}">{{$pdftr->name}}</option>
                                     @endforeach
                                </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Anggota Kelompok</label>
                            <textarea class="ckeditor form-control valid" rows="4" id="anggota" name="anggota">{!! $mentoring->anggota !!}</textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Jurusan/Prodi</label>
                            <input type="text" id="jurusan" name="jurusan" class="form-control" required="" value="{{$mentoring->jurusan}}" >
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Semester</label>
                            <input type="text" id="semester" name="semester" class="form-control" required="" value="{{$mentoring->semester}}" >
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Universitas</label>
                            <input type="text" id="juniversitas" name="universitas" class="form-control" required="" value="{{$mentoring->universitas}}" >
                        </div>
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check"></i> Simpan</button>
                        {{-- <input type="submit" value="Simpan" class="btn btn-success">&nbsp; --}}
                        <a href="/mentoring" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('.ckeditor').ckeditor();
});
</script>

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
