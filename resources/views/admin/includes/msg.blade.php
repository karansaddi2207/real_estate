@if(count($errors)>0)

	@foreach($errors->all() as $error)

		<p class="alert alert-danger">{{ $error }}</p>

	@endforeach

@endif


@if(session()->has('error'))
	<p class="alert alert-danger">
	  {{ session('error') }}
	</p>
@endif


@if(session()->has('msg'))

	<p class="alert alert-danger">
		{{ session('msg') }}
	</p>

@endif