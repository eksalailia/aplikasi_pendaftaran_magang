<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - Applicant</title>
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
@include('applicant.header')
@extends('applicant.content')
@section('content')
@include('applicant.sidebar')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Upload Data Diri</h5>
                        <p class="m-b-0">Silakan upload data diri Anda</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/applicant"> <i class="fa fa-home"></i> </a>
                        </li>
                        {{-- <li class="breadcrumb-item"><a href="#!">Bootstrap Tables</a> --}}
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Upload Data Diri</a>
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
                            <h5>Upload Data Diri</h5>
                <div class="card-body">
                    <form action="{{ url('datadiri-update') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Nama Lengkap</label>
                                 <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="{{ Auth::user()->name }}">
                                 <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Alamat</label>
                                 <input type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat" value="{{ Auth::user()->alamat }}">
                                 <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         </div>
                         <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Jenis Kelamin</label>
                                 <select class="form-control" name="jenis_kelamin" value="{{ Auth::user()->jenis_kelamin }}">
                                     <option value="" selected>Pilih Jenis Kelamin</option>
                                     <option value="Laki-laki" style="font-size: 14px;">Laki-laki</option>
                                    <option value="Perempuan" style="font-size: 14px;">Perempuan</option>
                                 </select>
                                 <span class="text-danger">@error('jenis_kelamin'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Tempat Lahir</label>
                                 <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ Auth::user()->tempat_lahir }}">
                                 <span class="text-danger">@error('tempat_lahir'){{ $message }}@enderror</span>
                             </div>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Tanggal Lahir</label>
                                 <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}">
                                 <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">E-Mail</label>
                                 <input type="text" class="form-control" placeholder="E-Mail" name="email" value="{{ Auth::user()->email }}">
                                 <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         </div>
                         <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                             <label for="">Nomor Telepon</label>
                                 <input type="text" class="form-control" placeholder="Nomor Telepon" name="no_tlp" value="{{ Auth::user()->no_tlp }}">
                                 <span class="text-danger">@error('no_tlp'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" required="" name="foto" value="{{ Auth::user()->foto }}"><br></br>
                                <img src="{{ asset('backend/assets/uploads/profile/'.Auth::user()->foto) }}" class="w-75" alt="" style="height:425px; width:354px; margin-left:-200px;">
                                 <span class="text-danger">@error('foto'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         </div>

                         <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                         </div>

                     </div>
                        </div>
                    </div>
                    <!-- Hover table card end -->
                    <!-- Contextual classes table starts -->
                    {{-- <div class="card">
                        <div class="card-header">
                            <h5>Contextual Classes</h5>
                            <span>For Make row Contextual add Contextual class like <code>.table-success</code> in <code> tr tag</code> and For cell add Contextual class in <code> td or th tag</code> . </span>
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
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-active">
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="table-success">
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="table-warning">
                                            <th scope="row">5</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="table-danger">
                                            <th scope="row">7</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="table-info">
                                            <th scope="row">9</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Contextual classes table ends -->
                    <!-- Background Utilities table start -->
                    {{-- <div class="card">
                        <div class="card-header">
                            <h5>Background Utilities</h5>
                            <span>Regular table background variants are not available with the inverse table, however, you may use <code>text or background utilities</code> to achieve similar styles.</span>
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
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-inverse">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-primary">
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="bg-success">
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="bg-warning">
                                            <th scope="row">5</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="bg-danger">
                                            <th scope="row">7</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="bg-info">
                                            <th scope="row">9</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Background Utilities table end -->
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->


        <div id="styleSelector">

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
