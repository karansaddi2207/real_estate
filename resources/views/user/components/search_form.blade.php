	<div class="filter-search">
		<div class="container">
			<form class="filter-form" method="post" action="{{ route('user.search') }}" id="check_in">{{ csrf_field() }}
				<input type="text" pplaceholder="Enter your address"
                onFocus="geolocate()" name="name" id="autocomplete">
				<input type="text" placeholder="Select Date" autocomplete="off" name="from" style="width:17%;" id="date_from">
				<input type="text" placeholder="Select Date" autocomplete="off"  name="to" style="width:17%;" id="date_to">
				<button type="submit" class="site-btn fs-submit">SEARCH</button>
			</form>
		</div>
	</div>