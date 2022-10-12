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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
                        <a href="/create-kesanpesan">Kesan & Pesan</a>
                    </li>
                </ul>
            </div>
                    @if(Session::has('success'))
                        <div class="btn btn-success" style="width:100%; height:50px">
                            <p>{{Session::get('success')}}</p>
                        </div>
                    @endif
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Kesan & Pesan</div>
                        </div>
                        <div class="card-body">

                        <form method="POST" action="" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                                <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="instansi">Instansi</label>
                                    <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi">
                                  </div>
                                <div class="form-group">
                                  <label for="isi">Kesan & Pesan</label>
                                  <textarea class="ckeditor form-control valid" id="isi" name="isi" rows="4" placeholder="Tulis kesan & pesan..."></textarea>
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
    @include('applicant.footer')

</div>
</div>

<script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('.ckeditor').ckeditor();
});
</script>
@endsection
