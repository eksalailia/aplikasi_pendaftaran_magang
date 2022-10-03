<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dashboard - Admin</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="backend2/assets/img/icon.ico" type="image/x-icon"/>

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

@extends('admin.dashboard.app')
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
                <h4 class="page-title">Mentor</h4>
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
                        <a href="/mentor">Mentor</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                             <h4>Edit Mentor</h4>
                        </div>
                        <form action="{{route('admin.dashboard.mentor.edit',$mentor->id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label>Foto Mentor</label>
                            <img src="{{asset('img/'.$mentor->img)}}" style="width: 500px; height: 250px;">
                            <input type="file" name="img" class="form-control">
                            </div>
                        <div class="form-group col-sm-12">
                            <label>Nama Mentor</label>
                            <input type="text" id="nama" name="nama" class="form-control" required="" value="{{$mentor->nama}}" >
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Jabatan</label>
                            <input type="text" id="jabatan" name="jabatan" class="form-control" required="" value="{{$mentor->jabatan}}" >
                            {{-- <input type="text" id="deskripsi" name="deskripsi" class="form-control" required="" value="{{$kegiatan->deskripsi}}" > --}}
                        </div>
                        <div class="form-group col-sm-12">
                        <input type="submit" value="Simpan" class="btn btn-success">&nbsp;
                        <a href="/mentor" class="btn btn-secondary">Cancel</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
