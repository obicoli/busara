@extends('layouts.app')

@section('title','My profile')

@section('styles')
    <!-- CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/css/bootstrap.min.css')}}" media="screen">  
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
    <link href="{{url('css/main.css')}}" rel="stylesheet">
    <link href="{{url('css/component.css')}}" rel="stylesheet">
    <!-- CSS Font Icons -->
    <link rel="stylesheet" href="{{url('icons/linearicons/style.css')}}">
    <!-- <link rel="stylesheet" href="{{url('icons/font-awesome/css/font-awesome.min.css')}}"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('icons/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{url('icons/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{url('icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{url('icons/rivolicons/style.css')}}">
    <link rel="stylesheet" href="{{url('icons/flaticon-line-icon-set/flaticon-line-icon-set.css')}}">
    <link rel="stylesheet" href="{{url('icons/flaticon-streamline-outline/flaticon-streamline-outline.css')}}">
    <link rel="stylesheet" href="{{url('icons/flaticon-thick-icons/flaticon-thick.css')}}">
    <link rel="stylesheet" href="{{url('icons/flaticon-ventures/flaticon-ventures.css')}}">
    <!-- CSS Custom -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">

@stop

@section('body_open')
<body class="not-transparent-header">
@stop

@section('header')
    @include('layouts.partials.header2')
@stop

@section('content')
	<!-- start breadcrumb -->
	<div class="breadcrumb-wrapper">
		<div class="container">
			<ol class="breadcrumb-list booking-step">
				<li><a href="">Profile</a></li>
				<li><span>Busara</span></li>
			</ol>
		</div>
	</div>
	<!-- end breadcrumb -->

	<div class="section sm">
	
		<div class="container">
		
			<div class="row">
				
				<div class="col-md-10 col-md-offset-1">
				
					<div class="employee-detail-wrapper">
					
						<div class="employee-detail-header text-center">
							
							<div class="image">
								@if($user->profile_photo == '')
									<img src="{{url('images/man/user2.png')}}" class="img-circle" />
								@else
									<img src="{{url('/'.$user->profile_photo)}}" alt="image" class="img-circle" />
								@endif
							</div>
							
							<h2 class="heading mb-15">{{$user->name}}</h2>
						
							<p class="location"><i class="fa fa-map-marker"></i> 254, Somewhere Street, Paris, 32541, France <span class="mh-5">|</span> <i class="fa fa-phone"></i> +66-575-8755</p>
							
							<div class="clearfix">
								<a href="#" class="btn btn-primary">Recruite Me</a>
							</div>
							
							<ul class="meta-list clearfix">
								<li>
									<h4 class="heading">Birth Day:</h4>
									12/01/1991
								</li>
								<li>
									<h4 class="heading">Age:</h4>
									23-year-old
								</li>
								<li>
									<h4 class="heading">Education:</h4>
									B.Eng in Computer
								</li>
								<li>
									<h4 class="heading">Email: </h4>
									myemail@gmail.com
								</li>
							</ul>
							
						</div>

						<!-- here -->

					</div>
					
					<div class="clearfix text-center mt-40">
						<a href="#" class="btn btn-primary btn-lg">Recruite Me</a>
					</div>

				</div>
			
			</div>
			
		</div>
	
	</div>
@stop


@section('scripts')
<!-- JS -->
<script type="text/javascript" src="{{url('js/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap-modalmanager.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap-modal.js')}}"></script>
<script type="text/javascript" src="{{url('js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{{url('js/jquery.easing.1.3.js')}}}"></script>
<script type="text/javascript" src="{{url('js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.slicknav.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.placeholder.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap-tokenfield.js')}}"></script>
<script type="text/javascript" src="{{url('js/typeahead.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap3-wysihtml5.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery-filestyle.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{url('js/ion.rangeSlider.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/handlebars.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.countimator.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.countimator.wheel.js')}}"></script>
<script type="text/javascript" src="{{url('js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/easy-ticker.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.introLoader.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.responsivegrid.js')}}"></script>
<script type="text/javascript" src="{{url('js/customs.js')}}"></script>
@stop

@section('body_close')
</body>
@stop