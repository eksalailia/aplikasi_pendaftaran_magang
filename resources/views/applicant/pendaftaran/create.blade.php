<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dashboard - Applicant</title>
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

@extends('applicant.appnew')
@extends('applicant.konten')
@extends('admin.table.appnew')
@section('content')


	<div class="wrapper">

			@include('applicant.header')
			<!-- End Navbar -->


		<!-- Sidebar -->

		@include('applicant.sidebar')

		<!-- End Sidebar -->

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Pendaftaran</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="/applicant-pendaftaran">Pendaftaran</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Pendaftaran Magang</div>
                            </div>
                            <br></br>
                                 @if(Session::has('success'))
                                    <div class="btn btn-success" style="width:100%; height:50px">
                                        <p>{{Session::get('success')}}</p>
                                    </div>
                                @endif
                            <div class="col-md-12">
                                <br>
                            <div class="card">
                                <div class="card-block">
                                    <div class="card text-white bg-primary mb-3">
                                        <h5 class="card-header"><i class="fas fa-fax"></i> <b>Data Magang</b></h5>
                                        <div class="card-body">
                                        <form method="POST" action="" enctype="multipart/form-data" class="forms-sample">
                                            @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-white">Tahun Akademik</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="tahun_akademik" name="tahun_akademik" placeholder="Tahun">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-white">Jurusan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-white">Pemohon</label>
                                                    <div class="col-sm-10">
                                                        <select name="user" class="form-control" required="">
                                                            @foreach($user as $d)
                                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-white">Bidang Magang</label>
                                                    <div class="col-sm-10">
                                                        <select name="bidang" class="form-control" required="">
                                                            @foreach($data as $d)
                                                            <option value="{{$d->id}}">{{$d->nama}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label text-white">Periode Magang / PKL</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="durasi" name="durasi" placeholder="Periode Magang">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-block">
                                        <div class="card text-white bg-primary mb-3">
                                            <h5 class="card-header"><i class="fas fa-users"></i> <b>Data Peserta</b></h5>
                                            <div class="card-body">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-white">Peserta 1</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="peserta1" name="peserta1" placeholder="Peserta 1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-white">Peserta 2</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="peserta2" name="peserta2" placeholder="Peserta 2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-white">Peserta 3</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="peserta3" name="peserta3" placeholder="Peserta 3">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card text-white bg-primary mb-3">
                                            <h5 class="card-header text-white"><i class="fas fa-address-card"></i> <b>Upload Resume Peserta</b></h5>
                                            <div class="card-body">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-white">Resume Peserta</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control" id="resume" name="resume" placeholder="Resume">
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="card-block">
                                            <div class="card text-white bg-primary mb-3">
                                                <h5 class="card-header text-white"><i class="fas fa-upload"></i> <b>Upload Proposal Permohonan</b></h5>
                                                <div class="card-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label text-white">Proposal</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" class="form-control" id="proposal" name="proposal" placeholder="Proposal">
                                                                </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">
                                                <i class="fas fa-check"></i> Daftar</button>
                                            <a href="/applicant" class="btn btn-secondary">
                                                <i class="fas fa-reply"></i> Kembali</a>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


{{-- @include('applicant.footer') --}}

@endsection
