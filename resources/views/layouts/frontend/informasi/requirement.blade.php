@extends('layouts.frontend.appnew')

@extends('layouts.frontend.content')

@section('content')


@include('layouts.frontend.navbar')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Syarat & Ketentuan Pengajuan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Informasi</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Syarat & Ketentuan Pengajuan</li>
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
                    @foreach ($requirement as $rq)
                    <img class="img-fluid position-absolute w-100 h-100" src="{{asset('foto/'.$rq->foto)}}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Syarat dan Ketentuan</h6>
                <h1 class="mb-4">{{ $rq->judul }}</h1>
                <p class="mb-4">{!! $rq->isi !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

 <!-- Footer Start -->
 @include('layouts.frontend.footer')
 <!-- Footer End -->

@endsection
