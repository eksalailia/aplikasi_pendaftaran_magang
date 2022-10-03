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

@extends('admin.dashboard.app')
@extends('admin.table.appnew')
@include('admin.dashboard.header')
@include('admin.dashboard.sidebar')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Bidang Magang</h4>
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
                        <a href="/bidang">Bidang Magang</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/bidang">Bidang Magang</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                             <h4>Tambah Bidang</h4>
        </div>
        <form method="POST" action="" enctype="multipart/form-data"  >
            @csrf
                <div class="form-group col-sm-12">
                    <label>Nama Bidang</label>
                    <input type="text" id="nama" name="nama" class="form-control" >
                </div>
                <div class="form-group col-sm-12">
                    <label>Keterangan</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" id="keterangan" name="keterangan" ></textarea>
                </div>
                <div class="form-group col-sm-5">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/bidang" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection
