@extends('layouts.frontend.appnew')

@extends('layouts.frontend.content')

@section('content')


@include('layouts.frontend.navbar')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tentang</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Beranda</a></li>
                            {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">Tentang</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('frontend2/img/about.jpg')}}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Tentang</h6>
                <h1 class="mb-4">SIPENMA Diskominfo Kota Madiun</h1>
                <p class="mb-4">SIPENMA atau Aplikasi Penerimaan Magang adalah sebuah sistem layanan yang dirancang untuk memfasilitasi
                    masyarakat dalam pelaksanaan program PKL/magang di Diskominfo Kota Madiun.</p>
                <p class="mb-4">Aplikasi ini dimaksudkan untuk membantu masyarakat dalam melaksanakan program PKL/magang
                    dari proses pendaftaran, seleksi, hingga pemberitahuan hasil seleksi.</p>
                    {{-- <h5 class="mb-3">Berikut adalah bidang yang dapat dipilih sesuai jurusan :</h5>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Bidang Pengelolaan IKP</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Bidang Pengelolaan TIK</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Bidang Pengelolaan Statistik<br>
                            &ensp;&ensp;&nbsp;&nbsp;dan Persandian</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>PPID</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
            </div>
        </div>
    </div>
</div>

 <!-- Footer Start -->
 @include('layouts.frontend.footer')
 <!-- Footer End -->

@endsection
