@extends('user.layouts.master')

@section('main_content')

<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('frontend/img/page-top-bg.jpg') }}">
		<div class="container text-white">
			<h2>Blog grid</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Blog Grid</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			<div id="map-canvas" style="width: 100%; height: 400px; background-color: gray;"></div>
			<div class="contact-info-warp">
				<p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi</p>
				<p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
				<p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="{{ asset('frontend/img/contact.jpg') }}" alt="">
				</div>
				<div class="col-lg-6">
					<div class="contact-right">
						<div class="section-title">
							<h3>Get in touch</h3>
							<p>Browse houses and flats for sale and to rent in your area</p>
						</div>
						<form action="{{ route('user.feedback') }}" method="post" class="contact-form"> @csrf
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="name" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" name="email" placeholder="Your email">
								</div>
								<div class="col-md-12">
									<textarea name="message"  placeholder="Your message"></textarea>
									<button type="submit" class="site-btn">SUMMIT NOW</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page end -->

@endsection

@section('custom_scripts')

<!-- <script type="text/javascript" src="{{ asset('user/js/googleMap.js') }}"></script> -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1R1FYLrfYEdVGqVlhEC2HZ86PlhxAuFM&callback=loadMap">
    </script>
<script type="text/javascript">
	function loadMap() {
  // The location of Uluru
  var uluru = {lat: 51.4975, lng: 0.1357};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map-canvas'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map, icon: '../img/img111.png'});
}

</script>

@endsection