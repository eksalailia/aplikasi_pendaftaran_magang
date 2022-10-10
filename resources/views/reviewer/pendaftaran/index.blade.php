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

@extends('reviewer.konten')
@extends('admin.table.appnew')
@section('content')


	<div class="wrapper">

			@include('reviewer.header')
			<!-- End Navbar -->


		<!-- Sidebar -->

		@include('reviewer.sidebar')

		<!-- End Sidebar -->


<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Diri</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="/reviewer">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/pendaftaran-reviewer">Data Diri</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Data Diri</h4>
                        </div>
                        <div class="card-tools">
                            {{-- <a href="{{ route('reviewer.pendaftaran.create') }}" class="btn btn-success" style="margin-left:30px">Tambah Data <i class="fa fa-plus"></i></a> --}}
                        </div>
                        <br>
                    @if(Session::has('success'))
                        <div class="btn btn-success" style="width:100%; height:50px">
                             <p>{{Session::get('success')}}</p>
                        </div>
                    @endif

                    @if(Session::has('delete'))
                        <div class="btn btn-warning" style="width:100%; height:50px">
                            <p>{{Session::get('delete')}}</p>
                            </div>
                    @endif

                    @if(Session::has('update'))
                        <div class="btn btn-info" style="width:100%; height:50px">
                            <p>{{Session::get('update')}}</p>
                        </div>
                    @endif

                    @if(Session::has('failed'))
                        <div class="btn btn-danger" style="width:100%; height:50px">
                            <p>{{Session::get('delete')}}</p>
                        </div>
                    @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Nama Pemohon</th>
                                            <th>Divisi Tujuan</th>
                                            <th>Jurusan</th>
                                            <th>Tahun Akademik</th>
                                            <th>Durasi PKL / Magang</th>
                                            <th width="300px">Anggota PKL / Magang</th>
                                            <th>Resume</th>
                                            <th>Proposal</th>
                                            <th>Verifikasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach ($pendaftar as $data)
                                            <td>{{ $data->user->name}}</td>
                                            <td>{{ $data->bidang->nama }}</td>
                                            <td>{{ $data->jurusan }}</td>
                                            <td>{{ $data->tahun_akademik }}</td>
                                            <td>{{ $data->durasi }}</td>
                                            <td>{{ $data->peserta1}}, <br>
                                                {{$data->peserta2}}, <br>
                                                {{$data->peserta3 }}</td>
                                            <td>
                                                <form>
                                                <a class="btn btn-info" href="{{ route('reviewer.pendaftaran.showResume',$data->id) }}"><i class="fa fa-eye"></i></a>
                                            </form>    
                                            </td>
                                            <td>
                                                <form>
                                                <a class="btn btn-warning" href="{{ route('reviewer.pendaftaran.showProposal',$data->id) }}"><i class="fa fa-eye"></i></a>
                                            </form>    
                                            </td>
                                            

                                            @if($data->status == null)
                                            <td>
                                                <a href="{{ route('reviewer.pendaftaran.acc', $data->id) }}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-check"></i><b style="font-size: 13px">Acc
                                                </a>
                                            </td>
                                            
                                            @elseif($data->status == 1)
                                            <td>
                                                <a href="{{ route('reviewer.pendaftaran.notacc', $data->id) }}" class="btn btn-xs btn-danger btn-flat"><i class="fa"></i><b style="font-size: 13px">Not Acc
                                                </a>
                                            </td>

                                            @elseif($data->status == 2)
                                            <td>
                                                <a href="{{ route('reviewer.pendaftaran.acc', $data->id) }}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-check"></i><b style="font-size: 13px">Acc
                                                </a>
                                            </td>
                                            @endif
                                            <td>
                                            <form action="{{ route('reviewer.pendaftaran.destroy',$data->id) }}"  method="POST">
                                                    <a class="btn btn-info" href="{{ route('reviewer.pendaftaran.show',$data->id) }}"><i class="fa fa-eye"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
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
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright ml-auto">
                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
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
                    ticdata: {
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


