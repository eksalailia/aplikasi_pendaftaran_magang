@extends('layouts.frontend.appnew')

@extends('layouts.frontend.content')

@section('content')

@include('layouts.frontend.navbar')

  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Mentor</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                        <li class="breadcrumb-item text-white active" aria-current="page">Mentor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Mentor</h6>
            <h1 class="mb-5">Pembimbing Magang</h1>
        </div>

        <div class="row g-4">
             @foreach ($mentor as $mt)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('/backend/assets/uploads/profile/'.$mt->foto)}}" alt="" style="width:200px; height:230px; margin-left:30px; margin-top:20px;">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        {{-- <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div> --}}
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">{{ $mt-> name }}</h5>
                        <small>{{ $mt->jabatan }}</small>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
@include('layouts.frontend.footer')
@endsection
