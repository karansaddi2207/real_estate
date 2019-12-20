@extends('user.layouts.master')

@section('custom_css')

<style type="text/css">
	#payment-form input{
		border-radius: 20px;
		height: 50px;
		padding-left: 25px;
		font-size: 15px;
	}
	#payment-form input:focus{
		border:1px solid gray;
		box-shadow: none;
	}
	#payment-form label{
		margin-left: 20px;
		font-size: 15px;
		color: gray;
	}
	#payment-form button{
		
		background:#800080;
		color: #fff;
		width: 100%;
		height: 50px;
		border-radius: 50px;
		border:none;
	}
	#payment-form button:hover{
		background:#400040;
		color:#fff;
	}

	#payment-form .error{
		color:red;
	}

	.related-properties{
		
		border:1px solid #CFD4DB;
		padding:20px;
		margin-left: 50px;
		margin-right:50px;
		padding-left:60px;
		padding-right:60px;
	}

	.related-properties h2{
		font-size: 15px;
		color: gray;
	}










	/**
	 * The CSS shown here will not be introduced in the Quickstart guide, but shows
	 * how you can use CSS to style your Element's container.
	 */
	.StripeElement {
	  box-sizing: border-box;

	  height: 40px;

	  padding: 10px 12px;

	  border: 1px solid transparent;
	  border-radius: 4px;
	  background-color: white;

	  box-shadow: 0 1px 3px 0 #e6ebf1;
	  -webkit-transition: box-shadow 150ms ease;
	  transition: box-shadow 150ms ease;
	}

	.StripeElement--focus {
	  box-shadow: 0 1px 3px 0 #cfd7df;
	}

	.StripeElement--invalid {
	  border-color: #fa755a;
	}

	.StripeElement--webkit-autofill {
	  background-color: #fefde5 !important;
	}
	div#card-element {
		border: 1px solid #ced4da;
	    width: 452px !important;
	    border-radius: 20px;
	    height: 50px;
	    padding-left: 25px;
	    font-size: 15px;
	    margin: 45px -139px;
	}
</style>

@endsection

@section('main_content')

	<section class="page-top-section set-bg" data-setbg="{{ asset('frontend/img/page-top-bg.jpg') }}">
		<div class="container text-white">
			<h2>Booking</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Booking</span>
		</div>
	</div>

	<!-- Page -->
	<section class="page-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form id="payment-form" method="post" action="{{ route('booking',$id) }}">{{ csrf_field() }}
					  <div class="form-row">
					  	<div class="form-group col-md-12">
					      <label for="inputName4">Name</label>
					      <input name="name" type="text" class="form-control" id="inputName4" placeholder="Enter your Name" required>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-12">
					      <label for="inputPhone4">Phone No.</label>
					      <input name="phone" type="text" class="form-control" id="inputPhone4" placeholder="Enter Phone No." required>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-12">
					      <label for="input4">Email</label>
					      <input name="email" type="text" class="form-control" id="input4" placeholder="Enter Email" required>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="input4">CheckIn Date</label>
					      <input name="book_from" type="text" class="form-control" id="book_from" placeholder="Select Date" autocomplete="off" required>
					    </div>
					    <div class="form-group col-md-6">
					      <label for="input4">Checkout Date</label>
					      <input name="book_to" type="text" class="form-control" id="book_to" placeholder="Select Date" autocomplete="off" required>
					    </div>
					  </div>

					  <input type="hidden" name="price" value="{{ $property->price }}">

					  <div class="form-row">
					    <label for="card-element">
					      Credit or debit card
					    </label>
					    <div id="card-element">
					      <!-- A Stripe Element will be inserted here. -->
					    </div>

					    <!-- Used to display form errors. -->
					    <div id="card-errors" role="alert"></div>
					  </div>
					  
					  <button class="btn btn-primary">Book Now</button>
					</form>
				</div>
				<!-- <div class="col-md-2"></div> -->
				<div class="col-md-6">
					<div class="related-properties">
						<h2>Property Details</h2>
						
						<div class="rp-item">
							<div class="rp-pic set-bg" data-setbg="{{ asset('frontend/img/feature/1.jpg') }}" style="margin-top:-31px;">
								<div class="sale-notic">{{ $property->property_type }}</div>
							</div>
							<div class="rp-info">
								<h5>{{ $property['city']['name'] }}</h5>
								<p><i class="fa fa-map-marker"></i>{{ $property->address }}</p>
							</div>
							<a href="#" class="rp-price">$ {{ $property->price }}</a>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Page end -->


	{{-- <form action="{{ route('booking',$id) }}" method="post" id="payment-form">
		@csrf
	  <div class="form-row">
	    <label for="card-element">
	      Credit or debit card
	    </label>
	    <div id="card-element">
	      <!-- A Stripe Element will be inserted here. -->
	    </div>

	    <!-- Used to display form errors. -->
	    <div id="card-errors" role="alert"></div>
	  </div>

	  <button>Submit Payment</button>
	</form> --}}

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



	<script src="https://js.stripe.com/v3/"></script>

	<script type="text/javascript">
		// Create a Stripe client.
		var stripe = Stripe('pk_test_qOWfxyyeM92j3v76r3QBceWd');

		// Create an instance of Elements.
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
		  base: {
		    color: '#32325d',
		    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
		    fontSmoothing: 'antialiased',
		    fontSize: '16px',
		    '::placeholder': {
		      color: '#aab7c4'
		    }
		  },
		  invalid: {
		    color: '#fa755a',
		    iconColor: '#fa755a'
		  }
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {style: style});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.addEventListener('change', function(event) {
		  var displayError = document.getElementById('card-errors');
		  if (event.error) {
		    displayError.textContent = event.error.message;
		  } else {
		    displayError.textContent = '';
		  }
		});

		// Handle form submission.
		var form = document.getElementById('payment-form');
		form.addEventListener('submit', function(event) {
		  event.preventDefault();

		  stripe.createToken(card).then(function(result) {
		    if (result.error) {
		      // Inform the user if there was an error.
		      var errorElement = document.getElementById('card-errors');
		      errorElement.textContent = result.error.message;
		    } else {
		      // Send the token to your server.
		      stripeTokenHandler(result.token);
		    }
		  });
		});

		// Submit the form with the token ID.
		function stripeTokenHandler(token) {
		  // Insert the token ID into the form so it gets submitted to the server
		  var form = document.getElementById('payment-form');
		  var hiddenInput = document.createElement('input');
		  hiddenInput.setAttribute('type', 'hidden');
		  hiddenInput.setAttribute('name', 'stripeToken');
		  hiddenInput.setAttribute('value', token.id);
		  form.appendChild(hiddenInput);

		  // Submit the form
		  form.submit();
		}
	</script>

@endsection