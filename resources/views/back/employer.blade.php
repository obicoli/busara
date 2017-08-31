


@extends('layouts.app')

@section('title','Employer')

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
				<li><a href="{{url('/employer')}}">Employer</a></li>
				<li><span>Busara</span></li>
			</ol>
		</div>
	</div>
	<!-- end breadcrumb -->

	<div class="section sm">
	
		<div class="container">
		
			<div class="row">
				
					<div class="col-sm-5 col-md-4">
					

						@if($company)
							<div class="company-detail-sidebar">

								@if($company->logo != '')
									<div class="image">
										<img src="{{url($company->logo)}}" alt="LOGO" />
									</div>
								@else
									<div class="image">
										<img src="{{url($company->logo)}}" alt="No logo" />
									</div>

									<a href="{{url('/setup/company')}}" class="btn btn-primary btn-sm">Upload Logo</a>
								@endif
								
								<h2 class="heading mb-15">{{$company->name}}</h2>
							
								<p class="location"><i class="fa fa-map-marker"></i> {{$company->address}} <span class="block"><i class="fa fa-phone"></i>{{$company->phone}}</span></p>

								<div class="admin-user-action text-center">
									@if($company)
										@if($company->profile_completion < 85)
											<a onclick="alertProfile('Please complete company profile to post a Job');" class="btn btn-primary btn-sm">Post Job</a>
										@else
											<a href="{{url('/post/job')}}" class="btn btn-primary btn-sm">Post Job</a>
										@endif
									@else
										<a onclick="alertProfile('Please complete company profile to post a Job');" class="btn btn-primary btn-sm">Post Job</a>
									@endif
									<a href="{{url('/create/resume')}}" class="btn btn-primary btn-sm btn-inverse">Create Resume</a>
									
								</div>
								
								<ul class="meta-list clearfix">
									<li>
										<h4 class="heading">Established In:</h4>
										{{$company->established_on}}
									</li>
									<li>
										<h4 class="heading">Type:</h4>
										@if($company->deals_id != '')
											{{$company->deals->name}}
										@endif
									</li>
									<li>
										<h4 class="heading">People:</h4>
										{{$company->total_people}}
									</li>
									<li>
										<h4 class="heading">Website: </h4>
										{{$company->website}}
									</li>
									<li>
										<h4 class="heading">Company profile </h4>
										{{$company->profile_completion}}% Complete
									</li>
								</ul>
								
							</div>
						@else
							<div class="company-detail-sidebar">
									
								<div class="image">
									<img src="{{url('images/brands/company.png')}}" alt="image" />
								</div>
								
								<h2 class="heading mb-15">Anonymous</h2>
								<a href="{{url('/setup/company/profile')}}" class="btn btn-primary btn-sm">Setup profile</a>
								
								<ul class="meta-list clearfix">
									<li>
										<h4 class="heading">Company profile </h4>
										0% Complete
									</li>
								</ul>
								
							</div>
						@endif
			
			
					</div>
					
					<div class="col-sm-7 col-md-8">
					
						<div class="company-detail-wrapper">

							<div class="company-detail-company-overview mt-0 clearfix">
								@if($company)
									<h3>Company background</h3>
									<?php
										echo $company->description;
									?>
									<a href="{{url('/setup/company')}}" class="btn btn-primary btn-xs">Edit</a>
									
									<h3>Services</h3>
									<?php
										echo $company->services;
									?>
									<a href="{{url('/setup/company')}}" class="btn btn-primary btn-xs">Edit</a>
									
									<h3>Expertise</h3>
									<?php
										echo $company->expertise;
									?>
									<a href="{{url('/setup/company')}}" class="btn btn-primary btn-xs">Edit</a>
								@else

									<h3>Company background</h3>
									
									<p><span class="font600"></span></p>
									<a href="{{url('/setup/company')}}" class="btn btn-primary btn-sm">Setup profile</a>
									
									<h3>Services</h3>
									
									<p></p>
									<a href="{{url('/setup/company')}}" class="btn btn-primary btn-sm">Setup profile</a>
									
									<h3>Expertise</h3>
									
									<p></p>
									<a href="{{url('/setup/company')}}" class="btn btn-primary btn-sm">Setup profile</a>

								@endif
							
								
								
							</div>
							
							<div class="newsletter-wrapper-02">
							
								<div class="GridLex-gap-10-wrappper">
								
									<div class="GridLex-grid-middle">
									
										<div class="GridLex-col-6_sm-6_xs-12">
											<h5 class="">Get new jobs for <span class="text-capitalize">Expedia</span> by email</h5>
											<p class="font-italic font13">*** Don't worry, we wont spam you!</p>
										</div>
										
										<div class="GridLex-col-6_sm-6_xs-12">
											
											<div class="newsletter-02">
									
												<div class="form-group">
													<input class="form-control" placeholder="enter your email " />
													<button class="btn btn-primary">subsribe</button>
												</div>
												
											</div>
											
										</div>
										
									</div>
									
								</div>

							</div>
							
							<div class="section-title mb-40">
				
								<h2 class="text-left">5 jobs offered</h2>
								
							</div>

							<div class="result-list-wrapper">
							
								<div class="job-item-list featured">
								
									<div class="featured-label"><span>featured</span></div>
									
									<div class="image">
										<img src="images/brands/06.png" alt="image" />
									</div>
									
									<div class="content">
										<div class="job-item-list-info">
										
											<div class="row">
											
												<div class="col-sm-7 col-md-8">
												
													<h4 class="heading">Packaging Engineer</h4>
													<div class="meta-div clearfix mb-25">
														<span>at <a href="#">Expedia</a></span>
														<span class="job-label label label-success">Freelance</span>
													</div>
													
													<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
												</div>
												
												<div class="col-sm-5 col-md-4">
													<ul class="meta-list">
														<li>
															<span>Location:</span>
															Paris, France
														</li>
														<li>
															<span>Rate/Salary:</span>
															Negotiable
														</li>
														<li>
															<span>Experience</span>
															Expert
														</li>
														<li>
															<span>Posted: </span>
															32 minutes ago
														</li>
													</ul>
												</div>
												
											</div>
										
										</div>
									
										<div class="job-item-list-bottom">
										
											<div class="row">
											
												<div class="col-sm-7 col-md-8">
													<div class="sub-category">
														<a href="#">Engineer</a>
														<a href="#">Packaging</a>
														<a href="#">Package</a>
														<a href="#">Manufacturing</a>
													</div>
												</div>
												
												<div class="col-sm-5 col-md-4">
													<a href="#" class="btn btn-primary">Apply for Job</a>
												</div>
												
											</div>
										
										</div>
									
									
									</div>
								
								</div>
								
								<div class="job-item-list">
								
									<div class="image">
										<img src="images/brands/06.png" alt="image" />
									</div>
									
									<div class="content">
										<div class="job-item-list-info">
										
											<div class="row">
											
												<div class="col-sm-7 col-md-8">
												
													<h4 class="heading">Mechanical Engineer - Medical Devices - Medical Equipment</h4>
													<div class="meta-div clearfix mb-25">
														<span>at <a href="#">GoDaddy</a></span>
														<span class="job-label label label-danger">Part-time</span>
													</div>
													
													<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
												</div>
												
												<div class="col-sm-5 col-md-4">
													<ul class="meta-list">
														<li>
															<span>Location:</span>
															Paris, France
														</li>
														<li>
															<span>Rate/Salary:</span>
															Negotiable
														</li>
														<li>
															<span>Experience</span>
															Expert
														</li>
														<li>
															<span>Posted: </span>
															32 minutes ago
														</li>
													</ul>
												</div>
												
											</div>
										
										</div>
									
										<div class="job-item-list-bottom">
										
											<div class="row">
											
												<div class="col-sm-7 col-md-8">
													<div class="sub-category">
														<a href="#">Engineer</a>
														<a href="#">Packaging</a>
														<a href="#">Package</a>
														<a href="#">Manufacturing</a>
													</div>
												</div>
												
												<div class="col-sm-5 col-md-4">
													<a href="#" class="btn btn-primary">Apply for Job</a>
												</div>
												
											</div>
										
										</div>
									
									
									</div>
								
								</div>
								
								<div class="job-item-list">
								
									<div class="image">
										<img src="images/brands/06.png" alt="image" />
									</div>
									
									<div class="content">
										<div class="job-item-list-info">
										
											<div class="row">
											
												<div class="col-sm-7 col-md-8">
												
													<h4 class="heading">Audio Visual Field Engineer</h4>
													<div class="meta-div clearfix mb-25">
														<span>at <a href="#">Wottif</a></span>
														<span class="job-label label label-danger">Part-time</span>
													</div>
													
													<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
												</div>
												
												<div class="col-sm-5 col-md-4">
													<ul class="meta-list">
														<li>
															<span>Location:</span>
															Paris, France
														</li>
														<li>
															<span>Rate/Salary:</span>
															Negotiable
														</li>
														<li>
															<span>Experience</span>
															Expert
														</li>
														<li>
															<span>Posted: </span>
															32 minutes ago
														</li>
													</ul>
												</div>
												
											</div>
										
										</div>
									
										<div class="job-item-list-bottom">
										
											<div class="row">
											
												<div class="col-sm-7 col-md-8">
													<div class="sub-category">
														<a href="#">Engineer</a>
														<a href="#">Packaging</a>
														<a href="#">Package</a>
														<a href="#">Manufacturing</a>
													</div>
												</div>
												
												<div class="col-sm-5 col-md-4">
													<a href="#" class="btn btn-primary">Apply for Job</a>
												</div>
												
											</div>
										
										</div>
									
									
									</div>
								
								</div>
								
								<div class="job-item-list">
								
									<div class="image">
										<img src="images/brands/06.png" alt="image" />
									</div>
									
									<div class="content">
										<div class="job-item-list-info">
										
											<div class="row">
											
												<div class="col-sm-7 col-md-8">
												
													<h4 class="heading">Solution Architect</h4>
													<div class="meta-div clearfix mb-25">
														<span>at <a href="#">Ebay</a></span>
														<span class="job-label label label-warning">Fulltime</span>
													</div>
													
													<p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
												</div>
												
												<div class="col-sm-5 col-md-4">
													<ul class="meta-list">
														<li>
															<span>Location:</span>
															Paris, France
														</li>
														<li>
															<span>Rate/Salary:</span>
															Negotiable
														</li>
														<li>
															<span>Experience</span>
															Expert
														</li>
														<li>
															<span>Posted: </span>
															32 minutes ago
														</li>
													</ul>
												</div>
												
											</div>
										
										</div>
									
										<div class="job-item-list-bottom">
										
											<div class="row">
											
												<div class="col-sm-7 col-md-8">
													<div class="sub-category">
														<a href="#">Engineer</a>
														<a href="#">Packaging</a>
														<a href="#">Package</a>
														<a href="#">Manufacturing</a>
													</div>
												</div>
												
												<div class="col-sm-5 col-md-4">
													<a href="#" class="btn btn-primary">Apply for Job</a>
												</div>
												
											</div>
										
										</div>
									
									</div>
								
								</div>
							
							</div>
							
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