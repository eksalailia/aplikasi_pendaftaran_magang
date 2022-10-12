@extends('layouts.frontend.appnew')

@extends('layouts.frontend.content')

@section('content')


@include('layouts.frontend.navbar')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Pengumuman</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Informasi</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Pengumuman</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Pengumuman</h6>
                <h1 class="mb-5">Pengumuman Terbaru</h1>
            </div>

            <div class="owl-carousel testimonial-carousel position-relative">
            @foreach ($pengumuman as $pgm)
                <div class="testimonial-item text-center">
                    <h5 class="mb-0">{{ $pgm->judul }}</h5>
                    <p>{{ $pgm->tanggal }}</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0" style="height:73px">{{ $pgm->isi }}</p>
                    </div>
                </div>
                @endforeach
                <!-- <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('frontend2/img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('frontend2/img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('frontend2/img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


 <!-- Footer Start -->
 @include('layouts.frontend.footer')
 <!-- Footer End -->

@endsection
