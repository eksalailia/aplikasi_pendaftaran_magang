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
                <h4 class="page-title">Data Laporan Tugas Peserta PKL / Magang</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="/applicant">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/laporan">Data Laporan Tugas Peserta PKL / Magang</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                             <h4>Edit Data Laporan Tugas Peserta PKL / Magang</h4>
                        </div>
                        <form action="{{route('laporan.edit',$laporan->id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label>Nama Mentor</label>
                                <select name="users" class="form-control" required="">
                                    @foreach($mentor as $mt)
                                    <option value="{{$mt->id}}">{{$mt->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Ketua Kelompok</label> 
                                <select name="user" class="form-control" required="">
                                    @foreach($pendaftar as $pdftr)
                                    @if(Auth::user() -> id == $pdftr -> id)
                                    <option value="{{$pdftr->id}}">{{$pdftr->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Anggota Kelompok</label>
                            <textarea class="ckeditor form-control valid" rows="4" id="anggota" name="anggota" >{!! $laporan->anggota !!}</textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Judul</label>
                            <input type="text" id="judul" name="judul" class="form-control" required="" value="{{ $laporan->judul }}" >
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Laporan Progress</label>
                            <textarea class="ckeditor form-control valid" rows="4" id="isi" name="isi" >{!! $laporan->isi !!}</textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>File Lampiran</label>
                               <input type="file" class="form-control  @error('laporan') is-invalid @enderror" id="laporan" name="laporan" placeholder="Laporan" required="" multiple value="{{ $laporan->laporan }}">
                                    @error('laporan')
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                       </div>
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check"></i> Simpan</button>
                        {{-- <input type="submit" value="Simpan" class="btn btn-success">&nbsp; --}}
                        <a href="/laporantugas" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel</a>
                    </form>
                    </div>
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
