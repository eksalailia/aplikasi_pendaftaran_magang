@extends('layouts.frontend.appnew')

@extends('layouts.frontend.content')

@section('content')

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.frontend.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend2/img/carousel-1.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Diskominfo Kota Madiun</h5>
                                <h1 class="display-3 text-white animated slideInDown">Selamat Datang di SIPENMA</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SIPENMA adalah Aplikasi Penerimaan Magang pada Kantor Diskominfo
                                    Kota Madiun berbasis website.</p>
                                <a href="/about" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="/register" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend2/img/carousel-2.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Diskominfo Kota Madiun</h5>
                                <h1 class="display-3 text-white animated slideInDown">SIPENMA - Aplikasi Penerimaan Magang</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SIPENMA dirancang untuk memudahkan masyarakat dalam
                                    mengakses informasi tentang magang sekaligus untuk mendaftarkan diri pada program magang
                                    di Diskominfo Kota Madiun.</p>
                                <a href="/about" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="/register" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    {{-- @include('layouts.frontend.service') --}}
    <!-- Service End -->


    <!-- About Start -->
    {{-- @include('layouts.frontend.about') --}}
    <!-- About End -->


    <!-- Categories Start -->
    {{-- @include('layouts.frontend.categories') --}}
    <!-- Categories Start -->


    <!-- Courses Start -->
    {{-- @include('layouts.frontend.courses') --}}
    <!-- Courses End -->


    <!-- Team Start -->
    {{-- @include('layouts.frontend.team') --}}
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('layouts.frontend.testimoni')
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('layouts.frontend.footer')
    <!-- Footer End -->

@endsection

