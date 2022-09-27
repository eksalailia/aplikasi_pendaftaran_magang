<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - Admin</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap applicant template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap applicant template, applicant theme, applicant dashboard, dashboard template, applicant template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="{{ asset ('backend/assets/images/book.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="backend/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="backend/assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="backend/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="backend/assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="backend/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="backend/assets/css/jquery.mCustomScrollbar.css">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="backend/assets/css/style.css">
  </head>

  <body>
  <!-- Pre-loader start -->
@include('admin.header')
@extends('admin.content')
@section('content')
@include('admin.sidebar')


<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Daftar Mentor</h5>
                        <p class="m-b-0">Daftar profil pembimbing magang</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin"> <i class="fa fa-home"></i> </a>
                        </li>
                        {{-- <li class="breadcrumb-item"><a href="#!">Bootstrap Tables</a> --}}
                        </li>
                        <li class="breadcrumb-item"><a href="/mentor">Mentor</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
    <div class="card">
        <div class="card-header">
            <h5>Daftar Mentor</h5>

            {{-- <span>use class <code>table-hover</code> inside table element</span> --}}
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>

        {{-- <form action="" method="" style="margin-top:20px">
        <div class="form-group col-3" style="">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Search...">
            <button class="btn btn-secondary" type="submit"  style="font-size: 23px;margin-bottom:3px"><i class="fa fa-search"></i></button>
        </form> --}}
        <div class="card-block table-border-style">
            <div class="content">
                <div class="card card-info card-outline">
                        <div class="card-tools">
                            <a href="{{ route('admin.mentor.create') }}" class="btn btn-success" style="">Tambah Data <i class="fa fa-plus"></i></a>
                        </div>
                </div>
            </div>
            <div class="table-responsive">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($mentor as $mt)
                            <td>{{ $mt->id }}</td>
                            <td>{{ $mt->nama }}</td>
                            <td>{{ $mt->jabatan }}</td>
                            <td><img alt="img" src="/img/{{ $mt->img }}" width="100px"></td>
                            <td>
                                <form action="{{ route('admin.mentor.destroy',$mt->id) }}"  method="POST">
                                    <a class="btn btn-info" href="{{ route('admin.mentor.show',$mt->id) }}">Show <i class="fa fa-eye"></i></a>
                                    <a href="{{ route('admin.mentor.edit',$mt->id) }}" class="btn btn-success ">Edit <i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete <i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>



<!-- Required Jquery -->
<script type="text/javascript" src="backend/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="backend/assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="backend/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="backend/assets/js/bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript" src="backend/assets/pages/widget/excanvas.js "></script>
<!-- waves js -->
<script src="backend/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="backend/assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="backend/assets/js/modernizr/modernizr.js "></script>
<!-- slimscroll js -->
<script type="text/javascript" src="backend/assets/js/SmoothScroll.js"></script>
<script src="backend/assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- Chart js -->
<script type="text/javascript" src="backend/assets/js/chart.js/Chart.js"></script>
<!-- amchart js -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="backend/assets/pages/widget/amchart/gauge.js"></script>
<script src="backend/assets/pages/widget/amchart/serial.js"></script>
<script src="backend/assets/pages/widget/amchart/light.js"></script>
<script src="backend/assets/pages/widget/amchart/pie.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<!-- menu js -->
<script src="backend/assets/js/pcoded.min.js"></script>
<script src="backend/assets/js/vertical-layout.min.js "></script>
<!-- custom js -->
<script type="text/javascript" src="backend/assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="backend/assets/js/script.js "></script>
</body>

</html>
