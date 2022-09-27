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
                        <h5 class="m-b-10">Bidang Magang</h5>
                        <p class="m-b-0">Berikut adalah daftar bidang magang</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin"> <i class="fa fa-home"></i> </a>
                        </li>
                        {{-- <li class="breadcrumb-item"><a href="#!">Bootstrap Tables</a> --}}
                        </li>
                        <li class="breadcrumb-item"><a href="/bidang">Bidang Magang</a>
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
            {{-- <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div> --}}
        </div>
        <form method="POST" action="" enctype="multipart/form-data"  >
            @csrf
                <div class="form-group col-sm-12">
                    <label>Nama Bidang</label>
                    <input type="text" id="nama" name="nama" class="form-control" >
                </div>
                <div class="form-group col-sm-12">
                    <label>Keterangan</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" ></textarea>
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
