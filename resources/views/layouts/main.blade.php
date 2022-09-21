@extends('layouts.appnew')

@extends('layouts.content')

@section('content')

	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>

		@include('layouts.header')

		<div class="page-body-wrapper">
			<section id="home" class="home">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="main-banner">
								<div class="d-sm-flex justify-content-between">
									<div data-aos="zoom-in-up">
										<div class="banner-title">
												<h3 class="font-weight-medium">We Help Power
												Millions Of Businesses
												in 100+ Countries
											</h3>
										</div>
										<p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.

											<br>
											Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
										</p>
										<a href="#" class="btn btn-secondary mt-3">Learn more</a>
									</div>
									<div class="mt-5 mt-lg-0">
										<img src="{{ asset ('frontend/images/group.png')}}" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		{{-- @include('layouts.service') --}}

		{{-- @include('layouts.about') --}}

			<section class="our-projects" id="projects">
				<div class="container">
					<div class="row mb-5">
						<div class="col-sm-12">
							<div class="d-sm-flex justify-content-between align-items-center mb-2">
								<h3 class="font-weight-medium text-dark ">Let's See Our Latest Project</h3>
								<div><a href="#" class="btn btn-outline-primary">View more</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-5" data-aos="fade-up">
					<div class="owl-carousel-projects owl-carousel owl-theme">
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider1.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider2.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider3.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider4.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider5.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider1.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider2.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider3.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider4.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider5.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider1.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider2.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider3.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider4.jpg')}}" alt="slider">
						</div>
						<div class="item">
							<img src="{{ asset ('frontend/images/carousel/slider5.jpg')}}" alt="slider">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row pt-5 mt-5 pb-5 mb-5">
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
								<img src="{{ asset ('frontend/images/satisfied-client.svg')}}" alt="satisfied-client" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="scVal">0</span>%</h4>
									<h5 class="text-dark mb-0">Satisfied clients</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
								<img src="{{ asset ('frontend/images/finished-project.svg')}}" alt="satisfied-client" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="fpVal">0</span></h4>
									<h5 class="text-dark mb-0">Finished Project</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
								<img src="{{ asset ('frontend/images/team-members.svg')}}" alt="Team Members" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="tMVal">0</span></h4>
									<h5 class="text-dark mb-0">Team Members</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
								<img src="{{ asset ('frontend/images/our-blog-posts.svg')}}" alt="Our Blog Posts" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="bPVal">0</span></h4>
									<h5 class="text-dark mb-0">Our Blog Posts</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="testimonial" id="testimonial">
				<div class="container">
					<div class="row  mt-md-0 mt-lg-4">
						<div class="col-sm-6 text-white" data-aos="fade-up">
							<p class="font-weight-bold mb-3">Testimonials</p>
							<h3 class="font-weight-medium">Our customers are our <br>biggest fans</h3>
							<ul class="flipster-custom-nav">
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link" title="0"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link"  title="1"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link active" title="2"></a>
								</li>
								<li class="flipster-custom-nav-item">
									<a href="javascript:;" class="flipster-custom-nav-link"  title="3"></a>
								</li>
							</ul>
						</div>
						<div class="col-sm-6" data-aos="fade-up">
							<div id="testimonial-flipster">
								<ul>
									<li>
										<div class="testimonial-item">
											<img src="{{ asset ('frontend/images/testimonial/testimonial1.jpg')}}" alt="icon" class="testimonial-icons">
											<p>Lorem ipsum dolor sit amet, consectetur
												pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
											</p>
											<h6 class="testimonial-author">Mark Spenser</h6>
											<p class="testimonial-destination">Accounts</p>
										</div>
									</li>
									<li>
										<div class="testimonial-item">
											<img src="{{ asset ('frontend/images/testimonial/testimonial2.jpg')}}" alt="icon" class="testimonial-icons">
											<p>Lorem ipsum dolor sit amet, consectetur
												pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
											</p>
											<h6 class="testimonial-author">Tua Manuera</h6>
											<p class="testimonial-destination">Director,Dj market</p>
										</div>
									</li>
									<li>
										<div class="testimonial-item">
											<img src="{{ asset ('frontend/images/testimonial/testimonial3.jpg')}}" alt="icon" class="testimonial-icons">
											<p>Lorem ipsum dolor sit amet, consectetur
												pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
											</p>
											<h6 class="testimonial-author">Sarah Philip</h6>
											<p class="testimonial-destination">Chief Accountant</p>
										</div>
									</li>
									<li>
										<div class="testimonial-item">
											<img src="{{ asset ('frontend/images/testimonial/testimonial4.jpg')}}" alt="icon" class="testimonial-icons">
											<p>Lorem ipsum dolor sit amet, consectetur
												pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
											</p>
											<h6 class="testimonial-author">Mark Spenser</h6>
											<p class="testimonial-destination">Director,Dj market</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="clients pt-5 mt-5"  data-aos="fade-up" data-aos-offset="-400">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="d-sm-flex justify-content-between align-items-center">
								<img src="{{ asset ('frontend/images/deloit.svg')}}" alt="deloit" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
								<img src="{{ asset ('frontend/images/erricson.svg')}}" alt="erricson" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
								<img src="{{ asset ('frontend/images/netflix.svg')}}" alt="netflix" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
								<img src="{{ asset ('frontend/images/instagram.svg')}}" alt="instagram" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
								<img src="{{ asset ('frontend/images/coinbase.svg')}}" alt="coinbase" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="pricing-list" id="plans">
				<div class="container">
					<div class="row" data-aos="fade-up" data-aos-offset="-500">
						<div class="col-sm-12">
							<div class="d-sm-flex justify-content-between align-items-center mb-2">
								<div>
									<h3 class="font-weight-medium text-dark ">Checkout Pricing Plan</h3>
									<h5 class="text-dark ">Lorem ipsum dolor sit amet, consectetur pretium pretium tempor. Lorem ipsum dolor </h5>
								</div>
								<div class="mb-5 mb-lg-0 mt-3 mt-lg-0">
									<div class="d-flex align-items-center">
										<p class="mr-2 font-weight-medium monthly text-active check-box-label">Monthly</p>
										<label class="toggle-switch toggle-switch">
										<input type="checkbox" checked  id="toggle-switch">
										<span class="toggle-slider round"></span>
										</label>
										<p class="ml-2 font-weight-medium yearly check-box-label">Yearly</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row"  data-aos="fade-up" data-aos-offset="-300">
						<div class="col-sm-4">
							<div class="pricing-box">
								<img src="{{ asset ('frontend/images/starter.svg')}}" alt="starter">
								<h6 class="font-weight-medium title-text">Starter Business</h6>
								<h1 class="text-amount mb-4 mt-2">$23</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-outline-primary">Puchase Now</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pricing-box selected">
								<img src="{{ asset ('frontend/images/proffessional.svg')}}" alt="starter">
								<h6 class="font-weight-medium title-text">Professional</h6>
								<h1 class="text-amount mb-4 mt-2">$45</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-primary">Puchase Now</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pricing-box">
								<img src="{{ asset ('frontend/images/premium.svg')}}" alt="starter">
								<h6 class="font-weight-medium title-text">Premium</h6>
								<h1 class="text-amount mb-4 mt-2">$87</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-outline-primary">Puchase Now</a>
							</div>
						</div>
					</div>
				</div>
			</section>

		{{-- @include('layouts.contact') --}}

		</div>
		@include('layouts.footer')
@endsection
