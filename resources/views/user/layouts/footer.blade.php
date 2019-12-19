<footer class="footer-section set-bg" data-setbg="{{ asset('frontend/img/footer-bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="{{ asset('frontend/img/logo.png')}}" alt="">
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi </p>
						<p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
						<p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Florida</a></li>
							<li><a href="">New York</a></li>
							<li><a href="">Washington</a></li>
							<li><a href="">Los Angeles</a></li>
							<li><a href="">Chicago</a></li>
						</ul>
						<ul>
							<li><a href="">St Louis</a></li>
							<li><a href="">Jacksonville</a></li>
							<li><a href="">San Jose</a></li>
							<li><a href="">San Diego</a></li>
							<li><a href="">Houston</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Featured Listing</a></li>
						<li><a href="">About us</a></li>
						<li><a href="">Pages</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
				<div class="copyright">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script>
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('js/add.json') }}"></script>

	<script>
		
		$(document).ready(function(){

			$('#address_name').autocomplete({

				source: "{{ route('listing.saearch.autocomplete') }}",

				delay: 500,

				minLength: 3

			});

			//for homepage
			$('#date_from').datepicker({
				changeMonth: true,
				changeYear: true,
				maxDate: '+1m',
				minDate: 0
			});

			$('#date_to').datepicker({
				changeMonth: true,
				changeYear: true,
				maxDate: '+2m',
				minDate: '+1d'
				
			});

			$('#check_in').validate({
				rules: {
					name: {
						required: true
					},
					to: {
						required: true,
						date: true
					},
					from: {
						required: true,
						date: true
					}
				}
			});

			//for booking page
			$('#book_from').datepicker({
				changeMonth: true,
				changeYear: true,
				maxDate: '+1m',
				minDate: 0
			});

			$('#book_to').datepicker({
				changeMonth: true,
				changeYear: true,
				maxDate: '+2m',
				minDate: '+1d'
				
			});

			$('#booking_form').validate({
				rules: {
					name: {
						required: true
					},
					book_to: {
						required: true,
						date: true
					},
					book_from: {
						required: true,
						date: true
					}
				}
			});

		});

	</script>

	    <script>
	// This sample uses the Autocomplete widget to help the user select a
	// place, then it retrieves the address components associated with that
	// place, and then it populates the form fields with those details.
	// This sample requires the Places library. Include the libraries=places
	// parameter when you first load the API. For example:
	// <script
	// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

	var placeSearch, autocomplete;

	var componentForm = {
	  street_number: 'short_name',
	  route: 'long_name',
	  locality: 'long_name',
	  administrative_area_level_1: 'short_name',
	  country: 'long_name',
	  postal_code: 'short_name'
	};

	function initAutocomplete() {
	  // Create the autocomplete object, restricting the search predictions to
	  // geographical location types.
	  autocomplete = new google.maps.places.Autocomplete(
	      document.getElementById('autocomplete'), {types: ['geocode']});

	  // Avoid paying for data that you don't need by restricting the set of
	  // place fields that are returned to just the address components.
	  autocomplete.setFields(['address_component']);

	  // When the user selects an address from the drop-down, populate the
	  // address fields in the form.
	  autocomplete.addListener('place_changed', fillInAddress);
	}

	function fillInAddress() {
	  // Get the place details from the autocomplete object.
	  var place = autocomplete.getPlace();

	  for (var component in componentForm) {
	    document.getElementById(component).value = '';
	    document.getElementById(component).disabled = false;
	  }

	  // Get each component of the address from the place details,
	  // and then fill-in the corresponding field on the form.
	  for (var i = 0; i < place.address_components.length; i++) {
	    var addressType = place.address_components[i].types[0];
	    if (componentForm[addressType]) {
	      var val = place.address_components[i][componentForm[addressType]];
	      document.getElementById(addressType).value = val;
	    }
	  }
	}

	// Bias the autocomplete object to the user's geographical location,
	// as supplied by the browser's 'navigator.geolocation' object.
	function geolocate() {
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(function(position) {
	      var geolocation = {
	        lat: position.coords.latitude,
	        lng: position.coords.longitude
	      };
	      var circle = new google.maps.Circle(
	          {center: geolocation, radius: position.coords.accuracy});
	      autocomplete.setBounds(circle.getBounds());
	    });
	  }
	}
	    </script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqovfBxkKvQNEjxFurH8Ephices_bns-M&libraries=places&callback=initAutocomplete"
	        async defer></script>

	@section('custom_scripts')
	@show