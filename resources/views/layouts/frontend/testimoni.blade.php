<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Kesan & Pesan</h6>
            <h1 class="mb-5">Kesan Pesan Selama Magang</h1>
        </div>
        
        <div class="owl-carousel testimonial-carousel position-relative">
        @foreach ($kesanpesan as $kp)
            <div class="testimonial-item text-center">
                <h5 class="mb-0">{{ $kp->nama }}</h5>
                <p>{{ $kp->instansi }}</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0" style="height:73px">{{ $kp->isi }}</p>
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
