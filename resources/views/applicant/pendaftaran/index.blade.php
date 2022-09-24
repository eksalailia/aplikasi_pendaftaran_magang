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
                        <h5 class="m-b-10">Pendaftaran Magang</h5>
                        <p class="m-b-0">Silakan isi form di bawah ini untuk mendaftar</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/applicant"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pendaftaran</a>
                        </li>
                        {{-- <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                        </li> --}}
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

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Pendaftaran</h5>
                                    {{-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> --}}
                                </div>
                                <div class="card-block">
                                    <div class="card text-white bg-secondary mb-3">
                                        <h5 class="card-header">Data Magang</h5>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tahun Akademik</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control">
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
                                                        <input type="text" class="form-control">
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
                                        <button type="button" class="btn btn-success">Daftar</button>
                                    </div>
                                </div>
                            </div>

                                    {{-- <h4 class="sub-title">Basic Inputs</h4> --}}
                                    {{-- <form>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Simple Input</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Placeholder</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                placeholder="Type your title in Placeholder">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control"
                                                placeholder="Password input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Read only</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                placeholder="You can't change me" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Disable Input</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                placeholder="Disabled text" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Predefine
                                                Input</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                    value="Enter yout content after me">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tahun Akademik</label>
                                                <div class="col-sm-10">
                                                    <select name="select" class="form-control">
                                                        <option value="opt1">Select One Value Only</option>
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
                                                <label class="col-sm-2 col-form-label">Round Input</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                    class="form-control form-control-round"
                                                    placeholder=".form-control-round">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Maximum
                                                    Length</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                        placeholder="Content must be in 6 characters"
                                                        maxlength="6">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Disable
                                                        Autocomplete</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control"
                                                            placeholder="Autocomplete Off"
                                                            autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Static Text</label>
                                                        <div class="col-sm-10">
                                                            <div class="form-control-static">Hello !... This is
                                                                static text
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Color</label>
                                                        <div class="col-sm-10">
                                                            <input type="color" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Upload File</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Textarea</label>
                                                        <div class="col-sm-10">
                                                            <textarea rows="5" cols="5" class="form-control"
                                                            placeholder="Default textarea"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="row">

                                                </div>
                                                <div class="row">

                                                </div>
                                            </div>
                                        </div>


                                        <!-- Page body end -->
                                    </div> --}}
                                {{-- </div> --}}
                                <!-- Main-body end -->
                                <div id="styleSelector">

                                </div>
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
