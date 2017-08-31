@extends('layouts.app')

@section('title','Create your CV')

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
    	function showAlert(message){
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
				<li><a href="{{url('/post/job')}}">Post a Job</a></li>
				<li><span>Busara</span></li>
			</ol>
		</div>
	</div>
	<!-- end breadcrumb -->

	<div class="section sm">
	
		<div class="container">
		
			<div class="row">
				
					<div class="col-sm-5 col-md-4">
					
						<div class="employee-detail-sidebar">
								
							<div class="section-title mb-30">
								<h2 class="text-left">About me</h2>
							</div>
							
							<div class="image">
								
							</div>
							
							<h3 class="heading mb-15">{{$user->name}}</h3>
							@if($mycv)
							<p class="location"><i class="fa fa-map-marker"></i> 3150 139th Ave. SE Bellevue, WA 98005 USA <span class="block"><i class="fa fa-phone"></i> +66-5445-5420</span></p>
							<ul class="meta-list clearfix">
								<li>
									<h4 class="heading">Birth Day::</h4>
									
								</li>
								<li>
									<h4 class="heading">Age:</h4>
									23-year-old
								</li>
								<li>
									<h4 class="heading">People:</h4>
									2000+
								</li>
								<li>
									<h4 class="heading">Education:</h4>
									B.Eng in Computer
								</li>
								<li>
									<h4 class="heading">Email:</h4>
									myemail@gmail.com
								</li>
								<li>
									<h4 class="heading">Introduce myself:</h4>
									<span class="font600">Expedia</span> is repulsive questions contented him few extensive supported. Of remarkably thoroughly he appearance in. Supposing tolerably applauded or of be. Suffering unfeeling so objection agreeable allowance me of. Ask within entire season sex common far who family... <a href="employer-detail.html">read full information</a>
								</li>
							</ul>
							@else
							<p class="location"><i class="fa fa-map-marker"></i> 3150 139th Ave. SE Bellevue, WA 98005 USA <span class="block"><i class="fa fa-phone"></i> +66-5445-5420</span></p>
							
							<ul class="meta-list clearfix">
								<li>
									<h4 class="heading">Birth Day::</h4>
									12/01/1991
								</li>
								<li>
									<h4 class="heading">Age:</h4>
									23-year-old
								</li>
								<li>
									<h4 class="heading">People:</h4>
									2000+
								</li>
								<li>
									<h4 class="heading">Education:</h4>
									B.Eng in Computer
								</li>
								<li>
									<h4 class="heading">Email:</h4>
									myemail@gmail.com
								</li>
								<li>
									<h4 class="heading">Introduce myself:</h4>
									<span class="font600">Expedia</span> is repulsive questions contented him few extensive supported. Of remarkably thoroughly he appearance in. Supposing tolerably applauded or of be. Suffering unfeeling so objection agreeable allowance me of. Ask within entire season sex common far who family... <a href="employer-detail.html">read full information</a>
								</li>
							</ul>
							@endif
							<a href="employer-edit.html" class="btn btn-primary mt-5"><i class="fa fa-pencil-square-o mr-5"></i>Edit</a>
							
						</div>
			
					</div>
					
					<div class="col-sm-7 col-md-8">
					
						<div class="company-detail-wrapper">

							<div class="company-detail-company-overview mt-0 clearfix">
								
								<div class="section-title-02">
									<h3 class="text-left">Create a resume</h3>
								</div>

								<div class="post-form-wrapper">
									@include('layouts.partials.errors')
						
									<div class="row gap-20">

										@if($mycv)
										<div class="section-title-02">
											<p>Progress</p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$mycv->profile_completion}}%;">
																				{{$mycv->	profile_completion}}% complete
												</div>
											</div>
										</div>
										<div class="admin-user-item for-employer">
	
											<div class="image">
													<img src="{{url($mycv->profile_photo)}}" alt="No logo" class="img-circle" />
												</div>
												<h4>Profile Picture</h4>
										</div>

										@else
										<div class="admin-user-item for-employer">
											<form action="{{url('/create/cv')}}" method="post" enctype="multipart/form-data">
												<div class="image">
												<img src="{{url('images/man/user2.png')}}" alt="image" class="img-circle" />
												<input type="hidden" name="action" value="profile">
											</div>
											<h4>Profile Picture</h4>
												{{csrf_field()}}
												<input type="file" name="profile_photo" required="required">
												<button type="submit">Upload</button>
											</form>
										</div>
										@endif



										@if(($mycv) && ($mycv->profile_completion == 15))
										<h3>Bio Data</h3>
										<ul class="meta-list clearfix">
											<li>
												<h4 class="heading">First Name::</h4>
												{{$mycv->first_name}}
											</li>
											<li>
												<h4 class="heading">Last Name:</h4>
												{{$mycv->last_name}}
											</li>
											<li>
												<h4 class="heading">Middle Name:</h4>
												{{$mycv->sir_name}}
											</li>
											<li>
												<h4 class="heading">Gender:</h4>
												{{$mycv->gender}}
											</li>
											<li>
												<h4 class="heading">Address:</h4>
												{{$mycv->address}}
											</li>
											<li>
												<h4 class="heading">About Me:</h4>
												<span class="font600">{{$mycv->first_name}}</span> {{$mycv->more_about_you}}... <a href="employer-detail.html">read full information</a>
											</li>
										</ul>

										@else
										<form action="{{url('/create/cv')}}" method="post">

											<div class="col-sm-12 col-md-12 mt-15">
											
												<h4 class="heading font700 mb-10 text-primary">Bio Data</h4>
											
											</div>
											{{csrf_field()}}
											<div class="col-sm-4">
												<div class="form-group">
													<label>Sir Name</label>
													<input type="text" class="form-control" required="required" name="sir_name">
												</div>
											</div>

											
											@if($mycv)
											<input type="hidden" name="cv_id" value="{{$mycv->id}}">
											<input type="hidden" name="biodata" value="biodata">
											@endif
											
											<div class="col-sm-4">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="first_name" required="required" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-4">
												<div class="form-group">
													<label>Middle Name</label>
													<input type="text" name="last_name" required="required" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-4">
												<div class="form-group">
													<label>Gender</label>
													<select class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All" name="gender" required="required">
														<option value="" >Select</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
														<option value="Others">Others</option>
													</select>
												</div>
											</div>
											
											<div class="col-sm-4">
												<div class="form-group">
													<label>Phone</label>
													<input type="text" class="form-control" name="phone" required="required">
												</div>
											</div>
											
											<div class="col-sm-4">
												<div class="form-group">
													<label>Address</label>
													<input type="text" class="form-control" name="address">
												</div>
											</div>
											
											<div class="col-sm-12">
											
												<div class="form-group mb-20">
													<label>More About you:</label>
													<textarea class="form-control" rows="5" name="more_about_you" required="required"></textarea>
												</div>
												
											</div>

											<div class="col-sm-4">
												<div class="form-group">
													@if($mycv)
														<input type="submit" class="btn btn-primary mt-5" name="address" value="Save">
													@else
														<a onclick="showAlert('Please Upload profile photo to continue');" class="btn btn-primary mt-5">Save</a>
													@endif
													
												</div>
											</div>


										</form>
										@endif
								
										<div class="col-sm-12 col-md-12 mb-15">
											<h3 class="heading mb-10">Educations</h3>
											<p>Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
										</div>
										
										<div class="clear"></div>
										
										<!-- sheepIt Form -->
										<div id="dynamicAddForm" class="clearfix">
										 
											<!-- Form template-->
											<div id="dynamicAddForm_template">

												<div class="col-sm-12">
												
													<div class="dynamic-add-form-item">
													
														<div class="dynamic-add-form-inner">
														
															<h4 class="heading font700 mb-15 text-primary">Education <span id="dynamicAddForm_label"></span></h4>
															
															<div class="row gap-20">
															
																<div class="col-sm-5">
																	<div class="form-group">
																		<label for="dynamicAddForm_#index#_school">University/College </label>
																		<input id="dynamicAddForm_#index#_school" name="education[school][#index#][school]" type="text" class="form-control" />
																	</div>
																</div>

																<div class="col-sm-7">
																
																	<div class="row">
														
																		<div class="col-sm-6">
																			<div class="form-group mb-20">
																				<label for="dynamicAddForm_#index#_from1">From:</label>
																				<div class="row gap-10">
																					<div class="col-xs-6 col-sm-6">
																						<select id="dynamicAddForm_#index#_from1" name="education[from1][#index#][from1]" class="selectpicker form-control" data-live-search="false">
																							<option value="0" selected >month</option>
																							<option value="1">Jan</option>
																							<option value="2">Feb</option>
																							<option value="3">Mar</option>
																							<option value="4">Apr</option>
																							<option value="5">May</option>
																						</select>
																					</div>
																					<div class="col-xs-6 col-sm-6">
																						<select id="dynamicAddForm_#index#_from2" name="education[from2][#index#][from2]" class="selectpicker form-control" data-live-search="false">
																							<option value="0" selected >year</option>
																							<option value="1">2000</option>
																							<option value="2">2001</option>
																							<option value="3">2002</option>
																							<option value="4">2003</option>
																							<option value="5">2004</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																		
																		<div class="col-sm-6">
																			<div class="form-group mb-20">
																				<label for="dynamicAddForm_#index#_to1">To:</label>
																				<div class="row gap-10">
																					<div class="col-xs-6 col-sm-6">
																						<select id="dynamicAddForm_#index#_to1" name="education[to1][#index#][to1]" class="selectpicker form-control" data-live-search="false">
																							<option value="0" selected >Select</option>
																							<option value="1">Jan</option>
																							<option value="2">Feb</option>
																							<option value="3">Mar</option>
																							<option value="4">Apr</option>
																							<option value="5">May</option>
																						</select>
																					</div>
																					<div class="col-xs-6 col-sm-6">
																						<select id="dynamicAddForm_#index#_to2" name="education[to2][#index#][to2]" class="selectpicker form-control" data-live-search="false">
																							<option value="0" selected >Select</option>
																							<option value="1">2000</option>
																							<option value="2">2001</option>
																							<option value="3">2002</option>
																							<option value="4">2003</option>
																							<option value="5">2004</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																		
																	</div>
																
																</div>
																
																<div class="clear"></div>
																
																<div class="col-sm-6">
																
																	<div class="form-group mb-20">
																		<label for="dynamicAddForm_#index#_level">Level:</label>
																		<select id="dynamicAddForm_#index#_level" name="education[level][#index#][level]" class="selectpicker form-control" data-live-search="false">
																			<option value="0" selected >Select</option>
																			<option value="1">Diploma</option>
																			<option value="2">Bachelor</option>
																			<option value="3">Master</option>
																			<option value="4">Doctoral </option>
																			<option value="5">Certificate</option>
																		</select>
																	</div>
																	
																</div>
																
																<div class="col-sm-6">
																
																	<div class="form-group mb-20">
																		<label for="dynamicAddForm_#index#_program">Course Title:</label>
																		<input id="dynamicAddForm_#index#_program" name="education[program][#index#][program]" type="text" class="form-control" />
																	</div>
																	
																</div>
																
																<div class="clear"></div>
																
																<div class="col-sm-12">
																
																	<div class="form-group mb-20 bootstrap3-wysihtml5-wrapper">
																		<label for="dynamicAddForm_#index#_extraInfo">Addition Info:</label>
																		<textarea id="dynamicAddForm_#index#_extraInfo" name="education[extraInfo][#index#][extraInfo]" class="form-control" rows="5"></textarea>
							
																	</div>
																	
																</div>
																
															</div>
															
															
														
														</div>
														
														<span id="dynamicAddForm_remove_current" class="dynamic-add-form-close">
															<i class="fa fa-times" aria-hidden="true"></i>
														</span>
															
													</div>
												
												</div>
												
												<div class="clear"></div>

											</div>
											<!-- /Form template-->

											<!-- No forms template -->
											<div id="dynamicAddForm_noforms_template" class="dynamic-add-form-empty clearfix">
												<div class="alert alert-danger mb-0">No form, please click "Add education" button</div>
											</div>
											<!-- /No forms template-->
											 
											<!-- Controls -->
											<div id="dynamicAddForm_controls" class="dynamic-add-form-action">
												<div id="dynamicAddForm_add"><button class="btn btn-primary btn-sm"><span>Add Education</span></button></div>
												<div id="dynamicAddForm_remove_last"><button class="btn btn-danger btn-sm"><span>Remove</span></button></div>
												<div id="dynamicAddForm_remove_all"><button class="btn btn-danger btn-sm"><span>Remove all</span></button></div>
												<div id="dynamicAddForm_add_n">
													<div class="form-group">
														<input id="dynamicAddForm_add_n_input" type="text" class="form-control form-control-sm" placeholder="how many to add? ex: 3" />
													</div>
													<div id="dynamicAddForm_add_n_button"><button class="btn btn-primary btn-sm"><span>Add</span></button></div></div>
											</div>
											<!-- /Controls -->

										</div>
										<!-- /sheepIt Form -->
										
										<div class="clear mb-30"></div>
										
										<div class="col-sm-12 col-md-12 mb-15">
											<h3 class="heading mb-10">Skills</h3>
											<p>Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
										</div>
										
										<div id="dynamicAddForm3" class="clearfix">
 
											<!-- Form template-->
											<div id="dynamicAddForm3_template">

												<div class="col-sm-12">
												
													<div class="dynamic-add-form-item">
													
														<div class="dynamic-add-form-inner">

															<h4 class="heading font700 mb-10 text-primary">Skill <span id="dynamicAddForm3_label"></span></h4>
															
															<div class="row gap-20">
															
																<div class="col-sm-6">
																	<div class="form-group">
																		<label for="dynamicAddForm3_#index#_school">Type of Skill</label>
																		<input id="dynamicAddForm3_#index#_school" name="experience[school][#index#][school]" type="text" class="form-control" />
																	</div>
																</div>
																
																<div class="col-sm-6">
																
																	<div class="form-group mb-20">
																		<label for="dynamicAddForm3_#index#_program">Level of skill</label>
																		<div class="input-group">
																			<input id="dynamicAddForm3_#index#_program" name="experience[program][#index#][program]" type="text" class="form-control" />
																			<span class="input-group-addon">%</span>
																		</div>
																	</div>
																	
																</div>
																
																<div class="clear"></div>
																
																<div class="col-sm-6">
																
																	
																	
																</div>
																
																<div class="clear"></div>
																
																<div class="col-sm-12">
																
																	<div class="form-group mb-20">
																		<label for="dynamicAddForm3_#index#_extraInfo">Skill details:</label>
																		<textarea id="dynamicAddForm3_#index#_extraInfo" name="experience[extraInfo][#index#][extraInfo]" class="form-control" rows="5"></textarea>
																	</div>
																	
																</div>
																
															</div>
															
														</div>
														
														<span id="dynamicAddForm3_remove_current" class="dynamic-add-form-close">
															<i class="fa fa-times" aria-hidden="true"></i>
														</span>
															
													</div>
												
												</div>
												
												<div class="clear"></div>

											</div>
											<!-- /Form template-->
											 
											<!-- No forms template -->
											<div id="dynamicAddForm3_noforms_template" class="dynamic-add-form-empty">
												<div class="alert alert-danger mb-0">No form, please click "Add Skill</div>
											</div>
											<!-- /No forms template-->
											 
											<!-- Controls -->
											<div id="dynamicAddForm3_controls" class="dynamic-add-form-action">
												<div id="dynamicAddForm3_add"><button class="btn btn-primary btn-sm"><span>Add Skill</span></button></div>
												<div id="dynamicAddForm3_remove_last"><button class="btn btn-danger btn-sm"><span>Remove</span></button></div>
												<div id="dynamicAddForm3_remove_all"><button class="btn btn-danger btn-sm"><span>Remove all</span></button></div>
												<div id="dynamicAddForm3_add_n">
													<div class="form-group">
														<input id="dynamicAddForm3_add_n_input" type="text" class="form-control form-control-sm" placeholder="how many to add? ex: 3" />
													</div>
													<div id="dynamicAddForm3_add_n_button"><button class="btn btn-primary btn-sm"><span>Add</span></button></div></div>
											</div>
											<!-- /Controls -->
											 
										</div>
										
										<div class="col-sm-12 col-md-12 mt-15">
										
											<h4 class="heading font700 mb-10 text-primary">Langauage Skill</h4>
										
										</div>
										
										<div class="col-sm-4">
											<div class="form-group">
												<label>Langauage 1</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="form-group">
												<label>Langauage 2</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="form-group">
												<label>Langauage 3</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="form-group">
												<label>Langauage 4</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="form-group">
												<label>Langauage 5</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="form-group">
												<label>Langauage 6</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-sm-12">
										
											<div class="form-group mb-20">
												<label>Langauage details:</label>
												<textarea class="form-control" rows="5"></textarea>
											</div>
											
										</div>
										
										<div class="clear mb-30"></div>
										
										<div class="col-sm-12 col-md-12 mb-15">
											<h3 class="heading mb-15">Work Experiences</h3>
											<p>Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
										</div>
										
										<div id="dynamicAddForm2" class="clearfix">
 
											<!-- Form template-->
											<div id="dynamicAddForm2_template">

												<div class="col-sm-12">
												
													<div class="dynamic-add-form-item">
													
														<div class="dynamic-add-form-inner">

															<h4 class="heading font700 mb-10 text-primary">Work Experience <span id="dynamicAddForm2_label"></span></h4>
															
															<div class="row gap-20">
															
																<div class="col-sm-5">
																	<div class="form-group">
																		<label for="dynamicAddForm2_#index#_school">Job Position</label>
																		<input id="dynamicAddForm2_#index#_school" name="experience[school][#index#][school]" type="text" class="form-control" />
																	</div>
																</div>
																
																<div class="col-sm-7">
																
																	<div class="row">

																		<div class="col-sm-6">
																			<div class="form-group mb-20">
																				<label for="dynamicAddForm2_#index#_from1">From:</label>
																				<div class="row gap-10">
																					<div class="col-xs-6 col-sm-6">
																						<select id="dynamicAddForm2_#index#_from1" name="experience[from1][#index#][from1]" class="selectpicker form-control" data-live-search="false">
																							<option value="0" selected >Select</option>
																							<option value="1">Jan</option>
																							<option value="2">Feb</option>
																							<option value="3">Mar</option>
																							<option value="4">Apr</option>
																							<option value="5">May</option>
																						</select>
																					</div>
																					<div class="col-xs-6 col-sm-6">
																						<select id="dynamicAddForm2_#index#_from2" name="experience[from2][#index#][from2]" class="selectpicker form-control" data-live-search="false">
																							<option value="0" selected >Select</option>
																							<option value="1">2000</option>
																							<option value="2">2001</option>
																							<option value="3">2002</option>
																							<option value="4">2003</option>
																							<option value="5">2004</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																		
																		<div class="col-sm-6">
																			<div class="form-group mb-20">
																				<label for="dynamicAddForm2_#index#_to1">To:</label>
																				<div class="row gap-10">
																					<div class="col-xs-6 col-sm-6">
																						<select id="dynamicAddForm2_#index#_to1" name="experience[to1][#index#][to1]" class="selectpicker form-control" data-live-search="false">
																							<option value="0" selected >Select</option>
																							<option value="1">Jan</option>
																							<option value="2">Feb</option>
																							<option value="3">Mar</option>
																							<option value="4">Apr</option>
																							<option value="5">May</option>
																						</select>
																					</div>
																					<div class="col-xs-6 col-sm-6">
																						<select id="dynamicAddForm2_#index#_to2" name="experience[to2][#index#][to2]" class="selectpicker form-control" data-live-search="false">
																							<option value="0" selected >Select</option>
																							<option value="1">2000</option>
																							<option value="2">2001</option>
																							<option value="3">2002</option>
																							<option value="4">2003</option>
																							<option value="5">2004</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																		
																	</div>
																	
																</div>
																
																<div class="clear"></div>
																
																<div class="col-sm-6">
																
																	<div class="form-group mb-20">
																		<label for="dynamicAddForm2_#index#_program">Company:</label>
																		<input id="dynamicAddForm2_#index#_program" name="experience[program][#index#][program]" type="text" class="form-control" />
																	</div>
																	
																</div>
																
																<div class="clear"></div>
																
																<div class="col-sm-12">
																
																	<div class="form-group mb-20">
																		<label for="dynamicAddForm2_#index#_extraInfo">Addition Info:</label>
																		<textarea id="dynamicAddForm2_#index#_extraInfo" name="experience[extraInfo][#index#][extraInfo]" class="form-control" rows="5"></textarea>
																	</div>
																	
																</div>
																
															</div>
															
															
														
														</div>
														
														<span id="dynamicAddForm2_remove_current" class="dynamic-add-form-close">
															<i class="fa fa-times" aria-hidden="true"></i>
														</span>
															
													</div>
												
												</div>
												
												<div class="clear"></div>

											</div>
											<!-- /Form template-->
											 
											<!-- No forms template -->
											<div id="dynamicAddForm2_noforms_template" class="dynamic-add-form-empty">
												<div class="alert alert-danger mb-0">No form, please click "Add Work Experiences</div>
											</div>
											<!-- /No forms template-->
											 
											<!-- Controls -->
											<div id="dynamicAddForm2_controls" class="dynamic-add-form-action">
												<div id="dynamicAddForm2_add"><button class="btn btn-primary btn-sm"><span>Add Work Experiences</span></button></div>
												<div id="dynamicAddForm2_remove_last"><button class="btn btn-danger btn-sm"><span>Remove</span></button></div>
												<div id="dynamicAddForm2_remove_all"><button class="btn btn-danger btn-sm"><span>Remove all</span></button></div>
												<div id="dynamicAddForm2_add_n">
													<div class="form-group">
														<input id="dynamicAddForm2_add_n_input" type="text" class="form-control form-control-sm" placeholder="how many to add? ex: 3" />
													</div>
													<div id="dynamicAddForm2_add_n_button"><button class="btn btn-primary btn-sm"><span>Add</span></button></div></div>
											</div>
											<!-- /Controls -->
											 
										</div>
										
										<div class="clear mb-30"></div>
										
										<div class="col-sm-12 col-md-12 mb-15">
											<h3 class="heading mb-10">Interests &amp; Hobby</h3>
											<p>Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
										</div>
										
										<div class="col-sm-12">
																
											<div class="form-group bootstrap3-wysihtml5-wrapper mb-20">
												<label>Information:</label>
												<textarea class="bootstrap3-wysihtml5 form-control" style="height: 200px;"></textarea>
											</div>
											
										</div>
										
										<div class="col-sm-12">
											<label>Please select:</label>
											
											<div class="row gap-20">
											
												<div class="col-sm-4">
													<div class="checkbox-block">
														<input id="checkbox_option-1" name="checkbox_option" type="checkbox" class="checkbox"/>
														<label class="" for="checkbox_option-1">Travel</label>
													</div>
												</div>
												
												<div class="col-sm-4">
													<div class="checkbox-block">
														<input id="checkbox_option-2" name="checkbox_option" type="checkbox" class="checkbox"/>
														<label class="" for="checkbox_option-2">Graphic</label>
													</div>
												</div>
												
												<div class="col-sm-4">
													<div class="checkbox-block">
														<input id="checkbox_option-3" name="checkbox_option" type="checkbox" class="checkbox"/>
														<label class="" for="checkbox_option-3">Music</label>
													</div>
												</div>
												
												<div class="col-sm-4">
													<div class="checkbox-block">
														<input id="checkbox_option-4" name="checkbox_option" type="checkbox" class="checkbox"/>
														<label class="" for="checkbox_option-4">Photography</label>
													</div>
												</div>
												
												<div class="col-sm-4">
													<div class="checkbox-block">
														<input id="checkbox_option-5" name="checkbox_option" type="checkbox" class="checkbox"/>
														<label class="" for="checkbox_option-5">Travel</label>
													</div>
												</div>
												
												<div class="col-sm-4">
													<div class="checkbox-block">
														<input id="checkbox_option-6" name="checkbox_option" type="checkbox" class="checkbox"/>
														<label class="" for="checkbox_option-6">Graphic</label>
													</div>
												</div>
												
												<div class="col-sm-4">
													<div class="checkbox-block">
														<input id="checkbox_option-7" name="checkbox_option" type="checkbox" class="checkbox"/>
														<label class="" for="checkbox_option-7">Music</label>
													</div>
												</div>
												
												<div class="col-sm-4">
													<div class="checkbox-block">
														<input id="checkbox_option-8" name="checkbox_option" type="checkbox" class="checkbox"/>
														<label class="" for="checkbox_option-8">Photography</label>
													</div>
												</div>
												
											</div>
	
											
										</div>
										
										<div class="clear mb-30"></div>
										
										<div class="col-sm-12 col-md-12 mb-15">
											<h3 class="heading mb-10">Reference</h3>
											<p>Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>
										</div>

										<div id="dynamicAddForm4" class="clearfix">
 
											<!-- Form template-->
											<div id="dynamicAddForm4_template">

												<div class="col-sm-12">
												
													<div class="dynamic-add-form-item">
													
														<div class="dynamic-add-form-inner">

															<h4 class="heading font700 mb-10 text-primary">Reference <span id="dynamicAddForm4_label"></span></h4>
															
															<div class="row gap-20">
															
																<div class="col-sm-4">
																	<div class="form-group">
																		<label for="dynamicAddForm4_#index#_from1">Reference Type</label>
																		<select id="dynamicAddForm4_#index#_from1" name="experience[from1][#index#][from1]" class="selectpicker form-control" data-live-search="false">
																			<option value="0" selected >Select</option>
																			<option value="1">Person</option>
																			<option value="2">Company</option>
																			<option value="3">Institute</option>
																		</select>
																	</div>
																</div>
																
																<div class="col-sm-8">
																
																	<div class="form-group mb-20">
																		<label for="dynamicAddForm4_#index#_name">Name</label>
																		<input id="dynamicAddForm4_#index#_name" name="experience[name][#index#][name]" type="text" class="form-control" />
																	</div>
																	
																</div>
																
																<div class="clear"></div>
																
																<div class="col-sm-12">
																
																	<div class="form-group mb-20">
																		<label for="dynamicAddForm4_#index#_extraInfo">Addition Info:</label>
																		<textarea id="dynamicAddForm4_#index#_extraInfo" name="experience[extraInfo][#index#][extraInfo]" class="form-control" rows="5"></textarea>
																	</div>
																	
																</div>
																
															</div>

														</div>
														
														<span id="dynamicAddForm4_remove_current" class="dynamic-add-form-close">
															<i class="fa fa-times" aria-hidden="true"></i>
														</span>
															
													</div>
												
												</div>
												
												<div class="clear"></div>

											</div>
											<!-- /Form template-->
											 
											<!-- No forms template -->
											<div id="dynamicAddForm4_noforms_template" class="dynamic-add-form-empty">
												<div class="alert alert-danger mb-0">No form, please click "Add Reference</div>
											</div>
											<!-- /No forms template-->
											 
											<!-- Controls -->
											<div id="dynamicAddForm4_controls" class="dynamic-add-form-action">
												<div id="dynamicAddForm4_add"><button class="btn btn-primary btn-sm"><span>Add Reference</span></button></div>
												<div id="dynamicAddForm4_remove_last"><button class="btn btn-danger btn-sm"><span>Remove</span></button></div>
												<div id="dynamicAddForm4_remove_all"><button class="btn btn-danger btn-sm"><span>Remove all</span></button></div>
												<div id="dynamicAddForm4_add_n">
													<div class="form-group">
														<input id="dynamicAddForm4_add_n_input" type="text" class="form-control form-control-sm" placeholder="how many to add? ex: 3" />
													</div>
													<div id="dynamicAddForm4_add_n_button"><button class="btn btn-primary btn-sm"><span>Add</span></button></div></div>
											</div>
											<!-- /Controls -->
											 
										</div>
										
										<div class="clear"></div>
										
										<div class="col-sm-6 mt-30">
											<a href="#" class="btn btn-primary btn-lg">Create now</a>
										</div>

									</div>
									
								</div>
								
							</div>
							
							<div class="mt-40 mb-40 bb"></div>
							
							<div class="section-title-02">
								<h3 class="text-left">Terms</h3>
							</div>
							
							<p>Oh to talking improve produce in limited offices fifteen an. Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>

							<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful.</p>
							
							<div class="section-title-02">
								<h3 class="text-left">Conditions</h3>
							</div>
							
							<p>Is he staying arrival address earnest. To preference considered it themselves inquietude collecting estimating. View park for why gay knew face. Next than near to four so hand. Times so do he downs me would. Witty abode party her found quiet law. They door four bed fail now have.</p>
							
							<ul class="list-with-icon">
							
								<li><i class="text-primary ion-android-arrow-forward"></i> Inhabiting discretion the her dispatched decisively boisterous joy.</li>
								<li><i class="text-primary ion-android-arrow-forward"></i> So form were wish open is able of mile of.</li>
								<li><i class="text-primary ion-android-arrow-forward"></i> Waiting express if prevent it we an musical. Especially reasonable travelling she son.</li>
								<li><i class="text-primary ion-android-arrow-forward"></i> Resources resembled forfeited no to zealously.</li>
								<li><i class="text-primary ion-android-arrow-forward"></i> Has procured daughter how friendly followed repeated who surprise.</li>
								
							</ul>

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
<script type="text/javascript">
function loadSkillsetDetails(skill_id){
    $.ajax({
        url: '/skilldetails/'+skill_id,
        type: 'GET',
        data: null,
        success: function (data) {
            if(data.status == 'success'){
                //alert(data.message);

                var div = $('div#skillsetdatadiv');
                var timeDiv = '';

                for( var key in data.message){
                	//alert(data.message[key].name);
                	timeDiv = '<div class="checkbox-block">'+
                	'<input id="checkbox_option-'+data.message[key].id+'" name="checkbox_option[]" type="checkbox" class="checkbox" value="'+data.message[key].id+'"/>'+
                	'<label class="" for="checkbox_option-'+data.message[key].id+'">'+data.message[key].name+'</label>'+
                	'</div>';
                	div.append(timeDiv);
                }
                var content = document.getElementById("skillsetdatadiv");
                content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
            }else {
                alert(data.message);
            }
        },
        fail: function () {
            displayError("Unknown error occurred. Try again");
        }
    });
}
</script>
@stop

@section('body_close')
</body>
@stop