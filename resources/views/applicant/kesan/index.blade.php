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
                <h4 class="page-title">Kesan & Pesan</h4>
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
                        <a href="/applicant-kesanpesan">Kesan & Pesan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Kesan & Pesan</div>
                        </div>
                        <div class="card-body">

                            <form class="forms-sample">
                                <div class="form-group">
                                  <label for="exampleInputName1">Nama</label>
                                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Instansi</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Instansi">
                                  </div>
                                <div class="form-group">
                                  <label for="exampleTextarea1">Kesan & Pesan</label>
                                  <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Tulis kesan & pesan..."></textarea>
                                </div>
                                {{-- <button type="submit" class="btn btn-success"><i class="fas fa-checks"> Submit</button> --}}
                                <button type="submit" class="btn btn-success">
                                        <i class="fas fa-check"></i> Submit</button>
                                <a href="/applicant" class="btn btn-secondary">
                                    <i class="fas fa-reply"></i> Kembali</a>
                              </form>
                        </div>
                        {{-- <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div> --}}
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
</div>

@endsection
