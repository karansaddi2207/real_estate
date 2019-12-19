@extends('user.layouts.master')

@section('custom_css')

<style type="text/css">
	#booking_form input{
		border-radius: 20px;
		height: 50px;
		padding-left: 25px;
		font-size: 15px;
	}
	#booking_form input:focus{
		border:1px solid gray;
		box-shadow: none;
	}
	#booking_form label{
		margin-left: 20px;
		font-size: 15px;
		color: gray;
	}
	#booking_form button{
		
		background:#800080;
		color: #fff;
		width: 100%;
		height: 50px;
		border-radius: 50px;
		border:none;
	}
	#booking_form button:hover{
		background:#400040;
		color:#fff;
	}

	#booking_form .error{
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
					<form id="booking_form" method="post" action="{{ route('booking',$id) }}">{{ csrf_field() }}
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
					  
					  <button type="submit" class="btn btn-primary">Book Now</button>
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