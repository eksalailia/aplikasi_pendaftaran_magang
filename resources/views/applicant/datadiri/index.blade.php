<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
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

@extends('applicant.appnew')
@extends('applicant.konten')
@section('content')

<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        @include('applicant.header')
        <!-- End Navbar -->
    </div>

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
                            <div class="card-title">Upload Data Diri</div>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                    {{-- {{ csrf_field() }} --}}
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                     <label for="">Nama Lengkap</label>
                                         <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="">
                                         <span class="text-danger"></span>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                     <label for="">Alamat</label>
                                         <input type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat" value="">
                                         <span class="text-danger"></span>
                                     </div>
                                 </div>
                                 </div>
                                 <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="">Jenis Kelamin</label>
                                         <select class="form-control" name="jenis_kelamin" value="">
                                             <option value="" selected>Pilih Jenis Kelamin</option>
                                             <option value="Laki-laki" style="font-size: 14px;">Laki-laki</option>
                                            <option value="Perempuan" style="font-size: 14px;">Perempuan</option>
                                         </select>
                                         <span class="text-danger"></span>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                     <label for="">Tempat Lahir</label>
                                         <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="">
                                         <span class="text-danger"></span>
                                     </div>
                                 </div>
                                </div>
                                <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                     <label for="">Tanggal Lahir</label>
                                         <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="">
                                         <span class="text-danger"></span>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                     <label for="">E-Mail</label>
                                         <input type="text" class="form-control" placeholder="E-Mail" name="email" value="">
                                         <span class="text-danger"></span>
                                     </div>
                                 </div>
                                 </div>
                                 <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                     <label for="">Nomor Telepon</label>
                                         <input type="text" class="form-control" placeholder="Nomor Telepon" name="no_tlp" value="">
                                         <span class="text-danger"></span>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Foto</label>
                                        <input type="file" class="form-control" required="" name="foto" value=""><br></br>
                                        <img src="" class="w-75" alt="" style="height:425px; width:354px; margin-left:-200px;">
                                         <span class="text-danger"></span>
                                     </div>
                                 </div>
                                 </div>

                                 <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                 </div>

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
