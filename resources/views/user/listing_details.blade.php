@extends('user.layouts.master')

@section('main_content')

<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('frontend/img/page-top-bg.jpg') }}">
		<div class="container text-white">
			<h2>SINGLE LISTING</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Single Listing</span>
		</div>
	</div>

	<!-- Page -->
	<section class="page-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 single-list-page">
					<div class="single-list-slider owl-carousel" id="sl-slider">
						<div class="sl-item set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/1.jpg') }}">
							<div class="sale-notic">{{ $property->property_type }}</div>
						</div>
						<div class="sl-item set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/2.jpg') }}">
							<div class="rent-notic">FOR Rent</div>
						</div>
						<div class="sl-item set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/3.jpg') }}">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="sl-item set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/4.jpg') }}">
							<div class="rent-notic">FOR Rent</div>
						</div>
						<div class="sl-item set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/5.jpg') }}">
							<div class="sale-notic">FOR SALE</div>
						</div>
					</div>
					<div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
						<div class="sl-thumb set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/1.jpg') }}"></div>
						<div class="sl-thumb set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/2.jpg') }}"></div>
						<div class="sl-thumb set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/3.jpg') }}"></div>
						<div class="sl-thumb set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/4.jpg') }}"></div>
						<div class="sl-thumb set-bg" data-setbg="{{ asset('frontend/img/single-list-slider/5.jpg') }}"></div>
					</div>

					<div class="single-list-content">
						<div class="row">
							<div class="col-xl-8 sl-title">
								<h2>{{ $property['city']['name'] }}</h2>
								<p><i class="fa fa-map-marker"></i>{{ $property->address }}</p>
								<p><i class="fa fa-rupee"></i>{{ $property->price }}</p>
							</div>
							<div class="col-xl-4">
								<a href="{{ route('user.booking',$property->id) }}" class="price-btn">Book Now</a>
							</div>
						</div>
						<h3 class="sl-sp-title">Property Details</h3>
						<div class="row property-details-list">
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-th-large"></i> {{ $property->property_space }} Square foot</p>
								<p><i class="fa fa-bed"></i> {{ $property->beds }} Bedrooms</p>
								<p><i class="fa fa-user"></i> Gina Wesley</p>
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-car"></i> Parking For {{ $property->parking_space }}</p>
								<p><i class="fa fa-building-o"></i> {{ $property->suitable_for }}</p>
								<p><i class="fa fa-clock-o"></i> {{ $property->created_at->diffForHumans() }}</p>
							</div>
							<div class="col-md-4">
								<p><i class="fa fa-bath"></i> {{ $property->bathrooms }} Bathrooms</p>
								<p><i class="fa fa-trophy"></i> {{ $property->property_age }} years age</p>
							</div>
						</div>
						<h3 class="sl-sp-title">Description</h3>
						<div class="description">
							<p>{{ $property->description }}</p>
							</div>
						<h3 class="sl-sp-title">Property Details</h3>
						<div class="row property-details-list">
							<div class="col-md-4 col-sm-6">
								@if($property->air_conditioners == '1')
								<p><i class="fa fa-check-circle-o"></i> 
									Air conditioning									
								</p>
								@endif
								
								@if($property->telephone == '1')
								<p><i class="fa fa-check-circle-o"></i> 
									Telephone
								</p>
								@else
								<p><i class="fa fa-close"></i> 
									No Telephone
								</p>
								@endif
								@if($property->laundry_room == '1')
								<p><i class="fa fa-check-circle-o"></i>
									Laundry Room
								</p>
								@endif
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-check-circle-o"></i>
									@if($property->suitable_for == 'Individual')
									Individual
									@elseif($property->suitable_for == 'Family')
									Family
									@elseif($property->suitable_for == 'Professional')
									Professional
									@endif
								</p>
								<p><i class="fa fa-check-circle-o"></i>
									@if($property->transportation == 'Bus Stand')
									Bus Stand
									@elseif($property->transportation == 'Railway Station')
									Railway Station
									@elseif($property->transportation == 'Airport')
									Airport
									@endif
								</p>
							</div>
							<div class="col-md-4">
								@if($property->playground == '1')
								<p><i class="fa fa-check-circle-o"></i>
									Playground
								</p>
								@endif
								@if($property->wifi == '1')
								<p><i class="fa fa-check-circle-o"></i>
									Wifi
								</p>
								@endif
								@if($property->property_type == '1')
								<p><i class="fa fa-check-circle-o"></i>
									{{ $property->property_type }}
								</p>
								@endif
							</div>
						</div>

						<h3 class="sl-sp-title bd-no">Location</h3>
						<div class="pos-map" id="map-canvas" style="height:400px; width:100%; background: gray;"></div>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar">
					<div class="author-card">
						<div class="author-img set-bg" data-setbg="{{ asset('frontend/img/author.jpg') }}"></div>
						<div class="author-info">
							<h5>Gina Wesley</h5>
							<p>Real Estate Agent</p>
						</div>
						<div class="author-contact">
							<p><i class="fa fa-phone"></i>{{ $property->telephone }}</p>
							<p><i class="fa fa-envelope"></i>ginawesley26@gmail.com</p>
						</div>
					</div>
					<div class="contact-form-card">
						<h5>Do you have any question?</h5>
						<form method="post" action="{{ route('user.feedback') }}">@csrf
							<input type="text" placeholder="Your name" name="name">
							<input type="text" placeholder="Your email" name="email">
							<textarea placeholder="Your question" name="message"></textarea>
							<button type="submit">SEND</button>
						</form>
					</div>
					<div class="related-properties">
						<h2>Related Property</h2>
						@foreach($properties as $property)
						<div class="rp-item">
							<div class="rp-pic set-bg" data-setbg="{{ asset('frontend/img/feature/1.jpg') }}">
								<div class="sale-notic">{{ $property->property_type }}</div>
							</div>
							<div class="rp-info">
								<h5>{{ $property['city']['name'] }}</h5>
								<p><i class="fa fa-map-marker"></i>{{ $property->address }}</p>
							</div>
							<a href="#" class="rp-price">$ {{ $property->price }}</a>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page end -->


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
	<?php

		$lat = 31.1471;
		$lng = 75.3412;

	?>

@endsection

@section('custom_scripts')

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1R1FYLrfYEdVGqVlhEC2HZ86PlhxAuFM&callback=loadMap">
    </script>
<script type="text/javascript">
	function loadMap() {
	  // The location of Uluru
	  var uluru = {lat: 0, lng: -180};
	  // The map, centered at Uluru
	  var map = new google.maps.Map(
	      document.getElementById('map-canvas'), {zoom: 1, center: uluru, mapTypeId: 'roadmap'});
	  // The marker, positioned at Uluru
	  //var marker = new google.maps.Marker({position: uluru, map: map, icon: '../../../img/img111.png'});

	  var flightPlanCoordinates = [
          {lat: 37.772, lng: -122.214},
          {lat: 21.291, lng: -157.821},
          {lat: -18.142, lng: 178.431},
          {lat: -27.467, lng: 153.027}
        ];

	  var flightPath = new google.maps.Polyline(
		  	{
		  		path: flightPlanCoordinates,
		          geodesic: true,
		          strokeColor: '#FF0000',
		          strokeOpacity: 1.0,
		          strokeWeight: 2
		  	}
	  	);

	  flightPath.setMap(map);

	}

</script>





<!-- for showing number of markers -->
<!-- <script type="text/javascript" src="{{ asset('js/googleMap.js') }}"></script> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1R1FYLrfYEdVGqVlhEC2HZ86PlhxAuFM&callback=loadMap">
    </script>
<script type="text/javascript">
alert('sdf');
	function loadMap() {
  // The location of Uluru
  var uluru = {lat: <?php echo $lat; ?>, lng: <?php echo $lng; ?>};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map-canvas'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});

  geocoder = new google.maps.Geocoder();

  codeAddress(map);

  alert('sdf');

}

function codeAddress(map) {

	alert('sdf');

		  data = {
		  	name: 'The Taj Mahal Palace',
		  	address: <?php //echo $property->address ?>
		  }
          var address = data.name + ' ' + data.address;
          geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == 'OK') {
              map.setCenter(results[0].geometry.location);
              alert(map.getCenter().lat());
            } else {
              alert('Geocode was not successful for the following reason: ' + status);
            }
          });


}-->

</script>
@endsection