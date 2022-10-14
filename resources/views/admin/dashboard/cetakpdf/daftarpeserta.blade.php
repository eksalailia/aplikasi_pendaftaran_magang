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
@extends('admin.table.apps')
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
            <h4 class="page-title">Daftar Peserta Lolos</h4>
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
                        <a href="/bidang">Daftar Peserta Lolos</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Status Pendaftaran</h4>
                        </div>
                        <div class="card-body">
                            <br>
                            <div class="table-responsive">
                                <table id="basic-pdtables" class="display table table-striped table-hover" >
                                <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Pemohon</th>
                                            <th>Divisi Tujuan</th>
                                            <th>Durasi PKL / Magang</th>
                                            <th>Anggota PKL / Magang</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($pendaftaran as $pd)
                                            <td>#</td>
                                            <td>{{ $pd->user->name }}</td>
                                            <td>{{ $pd->bidang->nama }}</td>
                                            <td>{{ $pd->durasi }}</td>
                                            <td>{{ $pd->peserta1 }}, <br>
                                                {{ $pd->peserta2 }}, <br>
                                                {{ $pd->peserta3 }}
                                            </td>
                                            @if($pd->status == 1)
                                            <td>
                                                <span class="badge badge-pill badge-success"><b style="font-size:14px;">Lolos</span>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="float-left my-2 text-center">
                                    <a class="btn btn-danger mt-3" href="{{route('admin.cetakpdf.cetakpendaftar')}}">Cetak PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    @include('admin.dashboard.footer')

</div>
</div>

@endsection