@extends('layouts.app')

@section('title','Browse Jobs')

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

    <script type="text/javascript">
    	function alertProfile(message){
    		alert(message);
    	}
    </script>

@stop

@section('body_open')
<body class="not-transparent-header">
@stop

@section('header')
    @include('layouts.partials.header2')
@stop

@section('content')

	<div class="second-search-result-wrapper">
	
		<div class="container">
		
			<form>
			
				<div class="second-search-result-inner">
					<span class="labeling">Search a job</span>
					<div class="row">
					
						<div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
							<div class="form-group form-lg">
								<input type="text" class="form-control" placeholder="Job title. Ex: Engineering" />
							</div>
						</div>
						
						<div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
							<div class="form-group form-lg">
								<input type="text" class="form-control" placeholder="Location. Ex: London" />
							</div>
						</div>
						
						<div class="col-xss-12 col-xs-6 col-sm-4 col-md-2">
							<button class="btn btn-block">Search</button>
						</div>
					
					</div>
				</div>
			
			</form>
			
			<ul class="quick-search-keyword">
			
				<li><span>Quick Searches: </span></li>
				<li><a href="#">Graduate jobs</a></li>
				<li><a href="#">$50k+ jobs</a></li>
				<li><a href="#">Work at home</a></li>
				<li><a href="#">Immediate start</a></li>
				<li><a href="#">IT &amp; Telecom</a></li>
				
			</ul>

		</div>
	
	</div>
	<!-- start breadcrumb -->
	<div class="breadcrumb-wrapper">
		<div class="container">
			<ol class="breadcrumb-list booking-step">
				<li><a href="{{url('/post/job')}}">Job details</a></li>
				<li><span>Busara</span></li>
			</ol>
		</div>
	</div>
	<!-- end breadcrumb -->
	<div class="section sm">
	
		<div class="container">
		
			<div class="sorting-wrappper alt">
	
				<div class="GridLex-grid-middle">
				
					<div class="GridLex-col-3_sm-12_xs-12">
					
						<div class="sorting-header">
							<h3 class="sorting-title">Browse Jobs</h3>
						</div>
						
					</div>
					
					<div class="GridLex-col-5_sm-6_xs-6_xss-12">
					
						<div class="sorting-content">
						
							<div class="form-group GridLex-gap-10-wrappper">
								
								<div class="GridLex-grid-middle">
								
									<div class="GridLex-col-5_sm-6_xs-12">
										<label>Sort by:</label>
									</div>
									
									<div class="GridLex-col-7_sm-6_xs-12">
										<select class="selectpicker form-control" data-show-subtext="true">
											<option value="0">Relavent</option>
											<option value="1" data-subtext="(newest to oldest)">Date Posted</option>
											<option value="2" data-subtext="(oldest to newest)">Date Posted</option>
										</select>
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					
					<div class="GridLex-col-4_sm-6_xs-6_xss-12">
					
						<div class="sorting-content">
						
							<div class="form-group GridLex-gap-10-wrappper">
								
								<div class="GridLex-grid-middle">
								
									<div class="GridLex-col-3_sm-6_xs-12">
										<label>Filter by:</label>
									</div>
									
									<div class="GridLex-col-9_sm-6_xs-12">
										<select class="selectpicker form-control" data-show-subtext="true">
											<option value="0">All</option>
											<option value="1">Asia</option>
											<option value="2">Africa</option>
											<option value="3">Europe</option>
											<option value="4">America</option>
											<option value="5">Oceana</option>
										</select>
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>

			</div>
			
			<div class="location-grid-wrapper">

				<div class="GridLex-gap-15-wrappper">

					@if($jobs->count() > 0)
				
					<div class="GridLex-grid-noGutter-equalHeight">

						@foreach($jobs as $jbs)
						
						<div class="GridLex-col-3_sm-4_xs-6_xss-12">
						
							<div class="location-grid-item">
								<a href="{{url('/job/'.$jbs->id.'/details')}}">
								
									<div class="image">
										<img src="{{url($jbs->company->logo)}}" alt="Company" />
									</div>
									
									<div class="content">
										<h4 class="heading">{{$jbs->joblocation->country}},{{$jbs->joblocation->state}}</h4>
										<p class="clearfix font400">3213 position available <i class="fa fa-long-arrow-right"></i></p>
									</div>
								
								</a>
								
							</div>
							
						</div>
						@endforeach
					

						
<!-- 						<div class="GridLex-col-3_sm-4_xs-6_xss-12">
						
							<div class="location-grid-item">
								<a href="#">
								
									<div class="image">
										<img src="images/locations/02.jpg" alt="image" />
									</div>
									
									<div class="content">
										<h4 class="heading">Rome, Italy</h4>
										<p class="clearfix font400">2125 position available <i class="fa fa-long-arrow-right"></i></p>
									</div>
								
								</a>
								
							</div>
							
						</div> -->
						
						
						
						
					</div>
					@else
						<p style="color: red; text-align: center;">No Jobs Found</p>
					@endif
				
				</div>

			</div>
			
			<div class="pager-wrapper">
						
				<ul class="pager-list">
					<li class="paging-nav"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
					<li class="paging-nav"><a href="#"><i class="fa fa-angle-left"></i></a></li>
					<li class="number">
						<span class="mr-5"><span class="font600">page</span></span>
					</li>
					<li class="form">
						<form>
							<input type="text" value="0" class="form-control"> 
						</form>
					</li>
					<li class="number">
						<span class="mr-5">/</span> <span class="font600">0</span>
					</li>
					<li class="paging-nav"><a href="#">go</a></li>
					<li class="paging-nav"><a href="#"><i class="fa fa-angle-right"></i></a></li>
					<li class="paging-nav"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
				</ul>	
			
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