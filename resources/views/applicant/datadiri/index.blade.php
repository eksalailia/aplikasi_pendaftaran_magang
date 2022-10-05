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
                <h4 class="page-title">Upload Data Diri</h4>
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
                        <a href="/applicant-datadiri">Upload Data Diri</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <h5>Upload Data Diri</h5>
                <div class="card-body">
                <br></br>
                    @if(Session::has('success'))
                        <div class="btn btn-success" style="width:100%; height:50px">
                            <p>{{Session::get('success')}}</p>
                        </div>
                    @endif
                    <br></br>
                    <form action="{{ url('datadiri-update') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Nama Lengkap</label>
                                 <input type="text" class="form-control" required="" placeholder="Nama Lengkap" name="name" value="{{ Auth::user()->name }}">
                                 <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Alamat</label>
                                 <input type="text" class="form-control" required="" placeholder="Alamat Lengkap" name="alamat" value="{{ Auth::user()->alamat }}">
                                 <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         </div>
                         <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Jenis Kelamin</label>
                                 <select class="form-control" required="" name="jenis_kelamin" value="{{ Auth::user()->jenis_kelamin }}">
                                     <option value="{{ Auth::user()->jenis_kelamin }}" selected>{{ Auth::user()->jenis_kelamin }}</option>
                                     <option value="Laki-laki" style="font-size: 14px;">Laki-laki</option>
                                    <option value="Perempuan" style="font-size: 14px;">Perempuan</option>
                                 </select>
                                 <span class="text-danger">@error('jenis_kelamin'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Tempat Lahir</label>
                                 <input type="text" class="form-control" required="" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ Auth::user()->tempat_lahir }}">
                                 <span class="text-danger">@error('tempat_lahir'){{ $message }}@enderror</span>
                             </div>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Tanggal Lahir</label>
                                 <input type="date" class="form-control" required="" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}">
                                 <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">E-Mail</label>
                                 <input type="text" class="form-control" required="" placeholder="E-Mail" name="email" value="{{ Auth::user()->email }}">
                                 <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         </div>
                         <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Asal Universitas</label>
                                 <input type="text" class="form-control" required="" placeholder="Universitas" name="univ" value="{{ Auth::user()->univ }}">
                                 <span class="text-danger">@error('univ'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">NIM</label>
                                 <input type="text" class="form-control" required="" placeholder="NIM" name="nim" value="{{ Auth::user()->nim }}">
                                 <span class="text-danger">@error('nim'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         </div>
                         <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Jurusan</label>
                                 <input type="text" class="form-control" required="" placeholder="Jurusan" name="jurusan" value="{{ Auth::user()->jurusan }}">
                                 <span class="text-danger">@error('jurusan'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Semester</label>
                                 <input type="text" class="form-control" required="" placeholder="Semester" name="semester" value="{{ Auth::user()->semester }}">
                                 <span class="text-danger">@error('semester'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         </div>
                         <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Nomor Telepon</label>
                                 <input type="text" class="form-control" required="" placeholder="Nomor Telepon" name="no_tlp" value="{{ Auth::user()->no_tlp }}">
                                 <span class="text-danger">@error('no_tlp'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto" value="{{ Auth::user()->foto }}"><br></br>
                                <img src="{{ asset('backend/assets/uploads/profile/'.Auth::user()->foto) }}" class="w-75" alt="" style="height:300px; width:100px; margin-left:-200px;">
                                 <span class="text-danger">@error('foto'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         </div>

                         {{-- <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2"> --}}
                        <div class="action-buttons justify-content-between bg-white pt-2 pb-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check"></i> Submit</button>
                            <a href="/applicant" class="btn btn-secondary">
                                <i class="fas fa-reply"></i> Kembali</a>
                         </div>

                     </div>
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

@endsection
