<title>LERAMIZ - Landing Page Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{ asset('frontend/img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}"/>

	<style type="text/css">
	
	.ui-widget {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    height: 300px;
    overflow-y: scroll !important;
    overflow-x: hidden !important;
    /*display: inline !important;*/
    list-style-type: : url('https://banner2.kisspng.com/20180319/fyq/kisspng-computer-icons-house-home-gallery-homepage-icon-png-5ab05717ba69a0.7696116915215060717636.jpg');
}
/*element.style{
	display: inline !important;
	    
}*/

.ui-menu-item-wrapper:hover{
	background: black !important;
	color:white;
	border:color:black;

}

/* width */
.ui-widget::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.ui-widget::-webkit-scrollbar-track {
  background: #f1f1f1; 
}

/* Handle */
.ui-widget::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.ui-widget::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

#address_name-error{
	
	position: absolute;
	margin-top: 50px;
	margin-left: -450px;
}

#date_from-error, #date_to-error{
	
	position: absolute;
	margin-top: 50px;
	margin-left: -170px;
}

@media(max-width:991px)
{
	#address_name-error,#date_from-error, #date_to-error{
		display: none;
		color: black;
	}
}


	</style>

@section('custom_css')
@show
