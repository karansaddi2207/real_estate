@extends('user.layouts.master')

@section('main_content')

<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="{{ asset('frontend/img/bg.jpg') }}">
		<div class="container hero-text text-white">
			<h2>find your place with our local life style</h2>
			<p>Search real estate property records, houses, condos, land and more on leramiz.com®.<br>Find property info from the most comprehensive source data.</p>
			<a href="#" class="site-btn">VIEW DETAIL</a>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Filter form section -->
	@component('user.components.search_form')

	@endcomponent
	<!-- Filter form section end -->



	<!-- Properties section -->
	<section class="properties-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>RECENT PROPERTIES</h3>
				<p>Discover how much the latest properties have been sold for</p>
			</div>
			<div class="row">
				@foreach($properties as $property)
				<div class="col-md-6">
					<a href="{{ route('listing.details',$property->id) }}">
						<div class="propertie-item set-bg" data-setbg="{{ asset('frontend/img/propertie/1.jpg') }}">
							<div class="sale-notic">{{ $property->property_type }}</div>
							<div class="propertie-info text-white">
								<div class="info-warp">
									<h5>{{ $property->address }}</h5>
									<p><i class="fa fa-map-marker"></i>{{ $property['city']['name'] }}</p>
								</div>
								<div class="price">${{ $property->price }}</div>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Properties section end -->


	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg="{{ asset('frontend/img/service-bg.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="{{ asset('frontend/img/service.jpg') }}" alt="">
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="section-title text-white">
						<h3>OUR SERVICES</h3>
						<p>We provide the perfect service for </p>
					</div>
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Consultant Service</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Properties Management</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Renting and Selling</h5>
								<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->


	<!-- feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Featured Listings</h3>
				<p>Browse houses and flats for sale and to rent in your area</p>
			</div>
			<div class="row">
				@foreach($features as $value)
				<a href="{{ route('listing.details',$value->id) }}">
					<div class="col-lg-4 col-md-6">
						<!-- feature -->
						<div class="feature-item">
							<div class="feature-pic set-bg" data-setbg="{{ asset('frontend/img/feature/1.jpg') }}">
								<div class="sale-notic">
									{{ $value->property_type }}
								</div>
							</div>
							<div class="feature-text">
								<div class="text-center feature-title">
									<h5>{{ $value['city']['name'] }}</h5>
									<p><i class="fa fa-map-marker"></i> {{ $value->address }}</p>
								</div>
								<div class="room-info-warp">
									<div class="room-info">
										<div class="rf-left">
											<p><i class="fa fa-th-large"></i> 800 Square foot</p>
											<p><i class="fa fa-bed"></i> {{ $value->beds }} Bedrooms</p>
										</div>
										<div class="rf-right">
											<p><i class="fa fa-car"></i> 2 Garages</p>
											<p><i class="fa fa-bath"></i> {{ $value->bathrooms }} Bathrooms</p>
										</div>	
									</div>
									<div class="room-info">
										<div class="rf-left">
											<p><i class="fa fa-user"></i> {{ $value['state']['name'] }}</p>
										</div>
										<div class="rf-right">
											<p><i class="fa fa-clock-o"></i> {{ $value->created_at->DiffForHumans() }}</p>
										</div>	
									</div>
								</div>
								<a href="#" class="room-price">$ {{ $value->price }}</a>
							</div>
						</div>
					</div>
				</a>
				@endforeach
			</div>
		</div>
	</section>
	<!-- feature section end -->

	<!-- feature category section -->
	<section class="feature-category-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LOOKING PROPERTY</h3>
				<p>What kind of property are you looking for? We will help you</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="{{ asset('frontend/img/feature-cate/1.jpg') }}" alt="">
					<h5>Apartment for rent</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="{{ asset('frontend/img/feature-cate/2.jpg') }}" alt="">
					<h5>Family Home</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="{{ asset('frontend/img/feature-cate/3.jpg') }}" alt="">
					<h5>Resort Villas</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="{{ asset('frontend/img/feature-cate/4.jpg') }}" alt="">
					<h5>Office Building</h5>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->


	<!-- Gallery section -->
	<section class="gallery-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Popular Places</h3>
				<p>We understand the value and importance of place</p>
			</div>
			<div class="gallery">
				<div class="grid-sizer"></div>
				<a href="#" class="gallery-item grid-long set-bg" data-setbg="{{ asset('frontend/img/gallery/1.jpg') }}">
					<div class="gi-info">
						<h3>Bangalore</h3>
						<p>118 Properties</p>
					</div>
				</a>
				<a href="#" class="gallery-item grid-wide set-bg" data-setbg="{{ asset('frontend/img/gallery/2.jpg') }}">
					<div class="gi-info">
						<h3>Delhi</h3>
						<p>112 Properties</p>
					</div>
				</a>
				<a href="#" class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/gallery/3.jpg') }}">
					<div class="gi-info">
						<h3>Gurgaon</h3>
						<p>72 Properties</p>
					</div>
				</a>
				<a href="#" class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/gallery/4.jpg') }}">
					<div class="gi-info">
						<h3>Mumbai</h3>
						<p>50 Properties</p>
					</div>
				</a>
				
			</div>
		</div>
	</section>
	<!-- Gallery section end -->



	<!-- Review section -->
	<section class="review-section set-bg" data-setbg="{{ asset('frontend/img/review-bg.jpg') }}">
		<div class="container">
			<div class="review-slider owl-carousel">
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="{{ asset('frontend/img/review/1.jpg') }}"></div>
				</div>
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="{{ asset('frontend/img/review/1.jpg') }}"></div>
				</div>
				<div class="review-item text-white">
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
					<h5>Stacy Mc Neeley</h5>
					<span>CEP’s Director</span>
					<div class="clint-pic set-bg" data-setbg="{{ asset('frontend/img/review/1.jpg') }}"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end-->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LATEST NEWS</h3>
				<p>Real estate news headlines around the world.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 blog-item">
					<img src="{{ asset('frontend/img/blog/1.jpg') }}" alt="">
					<h5><a href="single-blog.html">Housing confidence hits record high as prices skyrocket</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>Amanda Seyfried</span>
						<span><i class="fa fa-clock-o"></i>25 Jun 201</span>
					</div>
					<p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
				</div>
				<div class="col-lg-4 col-md-6 blog-item">
					<img src="{{ asset('frontend/img/blog/2.jpg') }}" alt="">
					<h5><a href="single-blog.html">Taylor Swift is selling her $2.95 million Beverly Hills mansion</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>Amanda Seyfried</span>
						<span><i class="fa fa-clock-o"></i>25 Jun 201</span>
					</div>
					<p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
				</div>
				<div class="col-lg-4 col-md-6 blog-item">
					<img src="{{ asset('frontend/img/blog/3.jpg') }}" alt="">
					<h5><a href="single-blog.html">NYC luxury housing market saturated with inventory, says celebrity realtor</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>Amanda Seyfried</span>
						<span><i class="fa fa-clock-o"></i>25 Jun 201</span>
					</div>
					<p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid vitae maximus...</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="{{ asset('frontend/img/partner/1.png') }}" alt="">
				</a>
				<a href="#">
					<img src="{{ asset('frontend/img/partner/2.png') }}" alt="">
				</a>
				<a href="#">
					<img src="{{ asset('frontend/img/partner/3.png') }}" alt="">
				</a>
				<a href="#">
					<img src="{{ asset('frontend/img/partner/4.png') }}" alt="">
				</a>
				<a href="#">
					<img src="{{ asset('frontend/img/partner/5.png') }}" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->

@endsection