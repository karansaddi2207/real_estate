<!DOCTYPE html>
<html>
<head>
	@include('admin.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
	<div class="wrapper">
		@include('admin.layouts.header')

		@include('admin.layouts.sidebar')

	@section('main_content')
  @show

		@include('admin.layouts.footer')
	</div>

</body>
</html>