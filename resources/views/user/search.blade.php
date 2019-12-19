@extends('user.layouts.master')

@section('main_content')

<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('frontend/img/page-top-bg.jpg') }}">
		<div class="container text-white">
			<h2>Search Results</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Filter form section -->
	@component('user.components.search_form')

	@endcomponent
	<!-- Filter form section end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Featured Listings</span>
		</div>
	</div>


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
			<div class="row">
				@foreach($features as $feature)
				<a href="{{ route('listing.details',$feature->id) }}">
					<div class="col-lg-4 col-md-6">
						<!-- feature -->
						<div class="feature-item">
							<div class="feature-pic set-bg" data-setbg="{{ asset('frontend/img/feature/1.jpg') }}">
								<div class="sale-notic">{{ $feature->property_type }}</div>
							</div>
							<div class="feature-text">
								<div class="text-center feature-title">
									<h5>{{ $feature['city']['name'] }}</h5>
									<p><i class="fa fa-map-marker"></i> {{ $feature->address }}</p>
								</div>
								<div class="room-info-warp">
									<div class="room-info">
										<div class="rf-left">
											<p><i class="fa fa-th-large"></i> {{ $feature->property_space }} Square foot</p>
											<p><i class="fa fa-bed"></i> {{ $feature->beds }} Bedrooms</p>
										</div>
										<div class="rf-right">
											<p><i class="fa fa-car"></i> 2 Garages</p>
											<p><i class="fa fa-bath"></i> {{ $feature->bathrooms }} Bathrooms</p>
										</div>	
									</div>
									<div class="room-info">
										<div class="rf-left">
											<p><i class="fa fa-user"></i> Tony Holland</p>
										</div>
										<div class="rf-right">
											<p><i class="fa fa-clock-o"></i> {{ $feature->created_at->diffForHumans() }}</p>
										</div>	
									</div>
								</div>
								<a href="#" class="room-price">$ {{ $feature->price }}</a>
							</div>
						</div>
					</div>
				</a>
				@endforeach
				
			</div>
			<!--for defining your own paignation with style -->
			{{--  @include('user.includes.pagination',['links' => $features]) --}}
			 {{ $features->links() }}

			 @if(count($features) < 1)
			 	<p class="nothing-found">Please try to search with different keywords!</p>
			 @endif
			
		</div>
	</section>
	<!-- page end -->


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