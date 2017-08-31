@extends('layouts.app')

@section('title','Setup Company')

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
	<!-- start breadcrumb -->
	<div class="breadcrumb-wrapper">
		<div class="container">
			<ol class="breadcrumb-list booking-step">
				<li><a href="{{url('/employer')}}">Company profile</a></li>
				<li><span>Busara</span></li>
			</ol>
		</div>
	</div>
	<!-- end breadcrumb -->

	<div class="admin-container-wrapper">

		<div class="container">
		
			<div class="GridLex-gap-15-wrappper">
			
				<div class="GridLex-grid-noGutter-equalHeight">
				
					<div class="GridLex-col-3_sm-4_xs-12">
					
						<div class="admin-sidebar">
								
							@if($company)
							<div class="admin-user-item for-employer">
								<div class="image">
									<img src="{{url($company->logo)}}" alt="No logo" class="img-circle" />
								</div>
								<h4>{{$company->name}}</h4>
								<input type="hidden" name="" id="logourl" value="{{$company->logo}}">
							</div>
							@else
							<div class="admin-user-item for-employer">
								<div class="image">
									<img src="images/brands/06.png" alt="image" class="img-circle" />
								</div>
								<h4>New Company</h4>
							</div>
							@endif
							
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
							
							<ul class="admin-user-menu clearfix">
								<li>
									<a href="#"><i class="fa fa-tachometer"></i> Dashboard</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-user"></i> Profile</a>
								</li>
								<li class="active">
									<a href="#"><i class="fa fa-key"></i> Change Password</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bell"></i> My Alert</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bookmark"></i> Saved Jobs</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pencil"></i> Resume Lists</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-sign-out"></i> Logout</a>
								</li>
							</ul>
							
						</div>

					</div>
					
					<div class="GridLex-col-9_sm-8_xs-12">
					
						<div class="admin-content-wrapper">

							<div class="admin-section-title">
								<h2>Company Profile</h2>
								<p>Profile completion</p>
								<div class="progress">
									@if($company)
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$company->profile_completion}}%;">
																	{{$company->profile_completion}}%
										</div>
									@else
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color: #000;">
																	0% complete
										</div>
									@endif
								</div>
							</div>

							<form method="post" action="{{url('/setup/company')}}" class="post-form-wrapper" enctype="multipart/form-data">

								{{csrf_field()}}
						
								<div class="row gap-20">
							
									<div class="col-sm-6 col-md-4">
										<div class="form-group bootstrap-fileinput-style-01">
											<label for="form-register-photo-2">Photo</label>
											<input type="file" name="form-register-photo-2" id="form-register-photo-2" required="required" accept="image">
											<span class="font12 font-italic">** photo must not bigger than 250kb</span>
										</div>
									</div>
									
									<div class="clear"></div>
									<input type="hidden" name="action" value="logo">
									@if($company)
										<input type="hidden" name="id" value="{{$company->id}}">
									@else
										<input type="hidden" name="id" value="0">
									@endif

									<div class="col-sm-12 mt-10">
										<button type="submit" class="btn btn-primary btn-sm">Upload</button>
										<button type="button" class="btn btn-warning btn-sm">Cancel</button>
										<!-- <a href="#" class="btn btn-primary">Save image</a> -->
										<!-- <a href="#" class="btn btn-warning">Cancel</a> -->
									</div>

								</div>		
							</form>

							<br><br>
							<div class="clear"></div>

							@if($company)
							
							<form class="post-form-wrapper" method="post" action="{{url('/setup/company')}}" >

								{{csrf_field()}}
						
								<div class="row gap-20">
									
									<div class="col-sm-12 col-md-8">
										<div class="form-group">
											<label>Company Name:</label>
											<input type="text" class="form-control" required="required" name="name" value="{{$company->name}}">
										</div>
									</div>

									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Established In:</label>
											<select class="selectpicker form-control" data-live-search="false" required="required" name="established_on">
												<option value="">Year</option>
												<?php
													$today = date('Y');
													for($i=0; $i < 100; $i++){
														?>
														@if( $company->established_on == ($today-$i) )
														<option value="{{$today-$i}}" selected="selected">{{$today-$i}}</option>
														@else
														<option value="{{$today-$i}}">{{$today-$i}}</option>
														@endif
														
														<?php
													}
												?>
											</select>
										</div>
										
									</div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Type:</label>
											<select class="selectpicker form-control" data-live-search="false" required="required" name="type">
												@foreach($types as $type)
													@if( $company->deals_in == ($type->id) )
													<option value="{{$type->id}}" selected="selected">{{$type->name}}</option>
													@else
													<option value="{{$type->id}}">{{$type->name}}</option>
													@endif
												@endforeach
											</select>
										</div>
									</div>
									
									<div class="clear"></div>

									<div class="form-group">
										<div class="col-sm-6 col-md-4">
											<label>People:</label>
											<select class="selectpicker show-tick form-control mb-15" data-live-search="false" name="people" required="required">
												<option value="{{$company->total_people}}">{{$company->total_people}}</option>
												<option value="1-10">1-10</option>
												<option value="11-100">11-100</option>
												<option value="200" selected>200+</option>
												<option value="300+">300+</option>
												<option value="1000+">1000+ </option>
											</select>
										</div>

										<div class="col-sm-6 col-md-4">
											<label>Website:</label>
											<input type="text" class="form-control" name="website" required="required" value="{{$company->website}}">
										</div>
									</div>

									<input type="hidden" name="action" value="details">
									@if($company)
										<input type="hidden" name="id" value="{{$company->id}}">
									@endif
									
									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control" name="address" required="required" value="{{$company->address}}">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>City/town</label>
											<input type="text" class="form-control" name="city" required="required" value="{{$company->city}}">
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Province/State</label>
											<input type="text" class="form-control" name="state" required="required" value="{{$company->state}}">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Street</label>
											<input type="text" class="form-control" name="street" required="required" value="{{$company->street}}">
										</div>
									</div>

									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Zip Code</label>
											<input type="text" class="form-control" required="required" name="zip" value="{{$company->zip}}">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Country</label>
											<select class="selectpicker show-tick form-control" data-live-search="false" name="country" required="required">
												<option value="{{$company->country}}">{{$company->country}}</option>
												<option value="Thailand">Thailand</option>
												<option value="France">France</option>
												<option value="China">China</option>
												<option value="Malaysia">Malaysia </option>
												<option value="Italy">Italy</option>
												<option value="Kenya">Kenya</option>
											</select>
										</div>
									</div>

									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" class="form-control" required="required" name="phone" value="{{$company->phone}}">
										</div>
									</div>

									<div class="clear"></div>

									<div class="clear"></div>

									<div class="col-sm-12 mt-10">
										<!-- <a href="#" class="btn btn-primary">Save</a>
										<a href="#" class="btn btn-warning">Cancel</a> -->
										@if($company)
											@if($company->logo == '')
												<button type="button" class="btn btn-primary btn-sm" onclick="alertProfile();">Save</button>
											@else
												<button type="submit" class="btn btn-primary btn-sm">Save</button>
											@endif
										@else
											<button type="button" class="btn btn-primary btn-sm" onclick="alertProfile();">Save</button>
										@endif
										<button type="button" class="btn btn-warning btn-sm">Cancel</button>
									</div>

								</div>
									
							</form>

							@else

							<form class="post-form-wrapper" method="post" action="{{url('/setup/company')}}" >

								{{csrf_field()}}
						
								<div class="row gap-20">
									
									<div class="col-sm-12 col-md-8">
										<div class="form-group">
											<label>Company Name:</label>
											<input type="text" class="form-control" required="required" name="name">
										</div>
									</div>

									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Established In:</label>
											<select class="selectpicker form-control" data-live-search="false" required="required" name="established_on">
												<option value="">Year</option>
												<?php
													$today = date('Y');
													for($i=0; $i < 100; $i++){
														?>
														<option value="{{$today-$i}}">{{$today-$i}}</option>
														<?php
													}
												?>
											</select>
										</div>
										
									</div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Type:</label>
											<select class="selectpicker form-control" data-live-search="false" required="required" name="type">
												<option value="">Select</option>
												@foreach($types as $type)
													<option value="{{$type->id}}">{{$type->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
									
									<div class="clear"></div>

									<div class="form-group">
										<div class="col-sm-6 col-md-4">
											<label>People:</label>
											<select class="selectpicker show-tick form-control mb-15" data-live-search="false" name="people" required="required">
												<option value="">Select</option>
												<option value="1-10">1-10</option>
												<option value="11-100">11-100</option>
												<option value="200" selected>200+</option>
												<option value="300+">300+</option>
												<option value="1000+">1000+ </option>
											</select>
										</div>

										<div class="col-sm-6 col-md-4">
											<label>Website:</label>
											<input type="text" class="form-control" name="website" required="required">
										</div>
									</div>

									<input type="hidden" name="action" value="details">
									@if($company)
										<input type="hidden" name="id" value="{{$company->id}}">
									@endif
									
									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control" name="address" required="required">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>City/town</label>
											<input type="text" class="form-control" name="city" required="required">
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Province/State</label>
											<input type="text" class="form-control" name="state" required="required">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Street</label>
											<input type="text" class="form-control" name="street" required="required">
										</div>
									</div>

									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Zip Code</label>
											<input type="text" class="form-control" required="required" name="zip">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Country</label>
											<select class="selectpicker show-tick form-control" data-live-search="false" name="country" required="required">
												<option value="0">Select</option>
												<option value="Thailand">Thailand</option>
												<option value="France" selected>France</option>
												<option value="China">China</option>
												<option value="Malaysia">Malaysia </option>
												<option value="Italy">Italy</option>
												<option value="Kenya">Kenya</option>
											</select>
										</div>
									</div>

									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" class="form-control" required="required" name="phone">
										</div>
									</div>

									<div class="clear"></div>

									<div class="clear"></div>

									<div class="col-sm-12 mt-10">
										<!-- <a href="#" class="btn btn-primary">Save</a>
										<a href="#" class="btn btn-warning">Cancel</a> -->
										@if($company)
											@if($company->logo == '')
												<button type="button" class="btn btn-primary btn-sm" onclick="alertProfile('Please upload your logo to continue');">Save</button>
											@else
												<button type="submit" class="btn btn-primary btn-sm">Save</button>
											@endif
										@else
											<button type="button" class="btn btn-primary btn-sm" onclick="alertProfile('Please upload your logo to continue');">Save</button>
										@endif
										<button type="button" class="btn btn-warning btn-sm">Cancel</button>
									</div>

								</div>
									
							</form>
							@endif



							<br><br>
							<div class="clear"></div>

							@if($company)
							<form class="post-form-wrapper" method="post" action="{{url('/setup/company')}}">
								{{csrf_field()}}
								<div class="row gap-20">

									<div class="col-sm-12 col-md-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Company background</label>
											<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="background">{{$company->description}}</textarea>
										</div>
										
									</div>
									
									<div class="clear"></div>

									<input type="hidden" name="action" value="details">
									
									<div class="col-sm-12 col-md-12">
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Services</label>
											<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="services">{{$company->services}}</textarea>
										</div>
									</div>

									<!-- <input type="hidden" name="action" value="details"> -->
									@if($company)
										<input type="hidden" name="id" value="{{$company->id}}">
									@endif
									<input type="hidden" name="action" value="details2">
									
									<div class="clear"></div>
									
									<div class="col-sm-12 col-md-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Expertise</label>
											<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="expertice">{{$company->expertise}}</textarea>
										</div>
										
									</div>
									
									<div class="clear"></div>

									<div class="col-sm-12 mt-10">
										<!-- <a href="#" class="btn btn-primary">Save</a>
										<a href="#" class="btn btn-warning">Cancel</a> -->
									<button type="submit" class="btn btn-primary btn-sm">Save</button>
									<button type="button" class="btn btn-warning btn-sm">Cancel</button>
									</div>

								</div>	
							</form>
							@else
							<form class="post-form-wrapper" method="post" action="{{url('/setup/company')}}">

								{{csrf_field()}}
								<div class="row gap-20">

									<div class="col-sm-12 col-md-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Company background</label>
											<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="background" required="required"></textarea>
										</div>
										
									</div>
									
									<div class="clear"></div>
									
									<div class="col-sm-12 col-md-12">
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Services</label>
											<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="services" required="required"></textarea>
										</div>
									</div>

									@if($company)
										<input type="hidden" name="id" value="{{$company->id}}">
									@endif
									<input type="hidden" name="action" value="details2">
									
									<div class="clear"></div>
									
									<div class="col-sm-12 col-md-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>Expertise</label>
											<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="expertice" required="required"></textarea>
										</div>
										
									</div>
									
									<div class="clear"></div>

									<div class="col-sm-12 mt-10">
										@if($company)
											@if($company->profile_completion < 65)
												<button type="button" class="btn btn-primary btn-sm" onclick="alertProfile('Please upload your logo to continue');">Save</button>
											@else
												<button type="submit" class="btn btn-primary btn-sm">Save</button>
											@endif
										@else
											<button type="button" class="btn btn-primary btn-sm" onclick="alertProfile('Please upload your logo to continue');">Save</button>
										@endif
										<button type="button" class="btn btn-warning btn-sm">Cancel</button>
									</div>

								</div>	
							</form>
							@endif
							
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

<script type="text/javascript" src="{{url('js/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/customs-fileinput.js')}}"></script>

<script type="text/javascript" src="{{url('js/jquery.sheepItPlugin.js')}}"></script>
<script type="text/javascript" src="{{url('js/customs-sheepItPlugin.js')}}"></script>
@stop

@section('body_close')
</body>
@stop