@extends('layouts.appnew')

@extends('layouts.content')

@section('content')

@include('layouts.header')

<section class="our-services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h5 class="text-dark">We’re offering</h5>
                <h3 class="font-weight-medium text-dark mb-5">Creative Digital Agency</h3>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-4 text-center text-lg-left">
                <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="{{ asset ('frontend/images/integrated-marketing.svg')}}" alt="integrated-marketing" data-aos="zoom-in">
                    <h6 class="text-dark mb-3 mt-4 font-weight-medium">Integrated
                        Marketing
                    </h6>
                    <p>Lorem ipsum dolor sit amet,
                        pretium pretium tempor.Lorem ipsum
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center text-lg-left">
                <div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="{{ asset ('frontend/images/design-development.svg')}}" alt="design-development" data-aos="zoom-in">
                    <h6 class="text-dark mb-3 mt-4 font-weight-medium">Design &
                        Development
                    </h6>
                    <p>Lorem ipsum dolor sit amet,
                        pretium pretium tempor.Lorem ipsum
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center text-lg-left">
                <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="{{ asset ('frontend/images/digital-strategy.svg')}}" alt="digital-strategy" data-aos="zoom-in">
                    <h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital
                        Strategy
                    </h6>
                    <p>Lorem ipsum dolor sit amet,
                        pretium pretium tempor.Lorem ipsum
                    </p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-4 text-center text-lg-left">
                <div class="services-box  pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="{{ asset ('frontend/images/digital-marketing.svg')}}" alt="digital-marketing" data-aos="zoom-in">
                    <h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital
                        Marketing
                    </h6>
                    <p>Lorem ipsum dolor sit amet,
                        pretium pretium tempor.Lorem ipsum
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center text-lg-left">
                <div class="services-box pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="{{ asset ('frontend/images/growth-strategy.svg')}}" alt="growth-strategy" data-aos="zoom-in">
                    <h6 class="text-dark mb-3 mt-4 font-weight-medium">Growth
                        Strategy
                    </h6>
                    <p>Lorem ipsum dolor sit amet,
                        pretium pretium tempor.Lorem ipsum
                    </p>
                </div>
            </div>
            <div class="col-sm-4 text-center text-lg-left">
                <div class="services-box pb-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="{{ asset ('frontend/images/saving-strategy.svg')}}" alt="saving-strategy" data-aos="zoom-in">
                    <h6 class="text-dark mb-3 mt-4 font-weight-medium">Saving
                        Strategy
                    </h6>
                    <p>Lorem ipsum dolor sit amet,
                        pretium pretium tempor.Lorem ipsum
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
