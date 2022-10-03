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
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="card text-white bg-secondary mb-3">
                                        <h5 class="card-header">Data Magang</h5>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tahun Akademik</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control">
                                                            <option value="opt1">Tahun</option>
                                                            <option value="opt2">Type 2</option>
                                                            <option value="opt3">Type 3</option>
                                                            <option value="opt4">Type 4</option>
                                                            <option value="opt5">Type 5</option>
                                                            <option value="opt6">Type 6</option>
                                                            <option value="opt7">Type 7</option>
                                                            <option value="opt8">Type 8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jurusan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Bidang Magang</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control">
                                                            <option value="opt1">Bidang</option>
                                                            <option value="opt2">Type 2</option>
                                                            <option value="opt3">Type 3</option>
                                                            <option value="opt4">Type 4</option>
                                                            <option value="opt5">Type 5</option>
                                                            <option value="opt6">Type 6</option>
                                                            <option value="opt7">Type 7</option>
                                                            <option value="opt8">Type 8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Lama Magang</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-block">
                                        <div class="card text-white bg-secondary mb-3">
                                            <h5 class="card-header">Data Mahasiswa</h5>
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 1</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 2</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 3</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 4</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 5</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="card text-white bg-secondary mb-3">
                                            <h5 class="card-header">Upload Resume Mahasiswa</h5>
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 1</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control">
                                                            </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 2</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 3</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 4</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mahasiswa 5</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="card-block">
                                            <div class="card text-white bg-secondary mb-3">
                                                <h5 class="card-header">Upload Proposal Permohonan</h5>
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Proposal</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success">Daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

{{-- @include('applicant.footer') --}}

@endsection
