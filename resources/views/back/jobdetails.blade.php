@extends('layouts.app')

@section('title','Job Details')

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
				<li><a href="{{url('/post/job')}}">Job details</a></li>
				<li><span>Busara</span></li>
			</ol>
		</div>
	</div>
	<!-- end breadcrumb -->

			<div class="section sm">
			
				<div class="container">
				
					<div class="row">
						
							<div class="col-sm-5 col-md-4">
							
								<div class="job-detail-sidebar">
									
									<ul class="meta-list clearfix">
										<li>
											<h4 class="heading">Location:</h4>
											<?php echo $job->joblocation->street_addres; ?>
										</li>
										<li>
											<h4 class="heading">Rate/Salary:</h4>
											{{$job->salary}}
										</li>
										<li>
											<h4 class="heading">Expert:</h4>
											Expert
										</li>
										<li>
											<h4 class="heading">Posted:</h4>
											{{$job->created_at}}
										</li>
										<li>
											<h4 class="heading">Due Date:</h4>
											{{$job->due_date}}
										</li>
									</ul>
									
									<div class="job-detail-company-overview mt-15 clearfix">
									
										<h3>Company overview</h3>
										<div class="image">
											<img src="{{url($company->logo)}}" alt="image" />
										</div>
										
										<p><span class="font600">{{$company->name}}</span> {{$company->description}} <i class="fa fa-long-arrow-right"></i></a></p>
										
									</div>
									
								</div>

							</div>
							
							<div class="col-sm-7 col-md-8">
							
								<div class="job-detail-wrapper">

									@include('layouts.partials.errors')
								
									<div class="job-detail-header bb mb-30">
										<h2 class="heading mb-15">{{$job->title}}</h2>
										<div class="meta-div clearfix mb-25">
											<span>at <a href="#">{{$job->company->name}}</a> as </span>
											<span class="job-label label label-success">{{$job->jobtype->name}}</span>
										</div>
									</div>
									
									<div class="job-detail-content mt-30 clearfix">
											
										<h3>Job Description</h3>

										<p class="font600 font16">
											<?php
												echo $job->description;
											?>
										</p>

										
										
										<h3>Job Responsibilies</h3>
										<?php
											echo $job->description;
										?>
										
										<h3>Requirements:</h3>
										<?php
											echo $job->requirements;
										?>


										<h3>How to Apply:</h3>
										<p>
											<?php
												echo $job->how_to_apply;
											?>
										</p>
									
									</div>
									
									<div class="apply-job-wrapper">
								
										<button class="btn btn-primary btn-hidden btn-lg collapsed" data-toggle="collapse" data-target="#apply-job-toggle">Apply this job</button>
										
										<div id="apply-job-toggle" class="collapse">

											<div class="collapse-inner clearfix">
											
												<div class="apply-job-inner">
										
													<h3 class="heading mb-5">Apply for Audio Visual Field Engineer</h3>
													<p>Have a findJob.com account? <a href="#">Sign in</a> now and we'll pre-fill this application for you.</p>
													
													<div class="bg-light padding-30">
													
														<form>
														
															<div class="row">
																
																<div class="col-sm-6 col-md-4">
																	<div class="form-group">
																		<label>First name:</label>
																		<input type="text" class="form-control" />
																	</div>
																</div>
																
																<div class="col-sm-6 col-md-4">
																	<div class="form-group">
																		<label>Last name:</label>
																		<input type="text" class="form-control" />
																	</div>
																</div>
																
																<div class="col-sm-12 col-md-4">
																	<div class="form-group">
																		<label>Email address:</label>
																		<input type="email" class="form-control" />
																	</div>
																</div>
															
															</div>
															
															<hr class="mt-15">
															
															<h4 class="heading">Add your CV</h4>
															
															<div class="row">
															
																<div class="col-sm-12 col-md-8">
																	<div class="form-group">
																		<label>Upload from your computer</label>
																		<input type="file" class="file-input">
																	</div>
																</div>

																
																<div class="col-sm-12 col-md-12">
																	<div class="form-group">
																		<label>Or import from cloud storage</label>
																		<div class="clear"></div>
																		<button class="btn btn-primary"><i class="zmdi zmdi-google-drive"></i> Google Drive</button>
																		<button class="btn btn-primary"><i class="zmdi zmdi-dropbox"></i> Dropbox</button>
																		<button class="btn btn-primary"><i class="zmdi zmdi-google-drive"></i> OneDrive</button>
																	</div>

																	<p class="font12 line12 mb-10">Your CV must be a .doc, .pdf, .docx, .rtf, and no bigger than 1Mb</p>
																</div>
																
															</div>
															
															<hr class="mt-15">
															
															<div class="row">
															
																<div class="col-sm-12 col-md-6">
																	<div class="form-group">
																		<label>Your covering message for Audio Visual Field Engineer</label>
																		<textarea class="form-control" rows="6"></textarea>
																	</div>
																</div>
																
																<div class="col-sm-12 col-md-12 mb-15">
																	<p class="mb-5">Effects present letters inquiry no an removed or friends?</p>
																	<div class="radio-block">
																		<input id="q1_radio-1" name="q1_radio" type="radio" class="radio" value="First Choice" />
																		<label class="font13" for="q1_radio-1">Yes</label>
																	</div>
																	<div class="radio-block">
																		<input id="q1_radio-2" name="q1_radio" type="radio" class="radio" value="First Choice" />
																		<label class="font13" for="q1_radio-2">no</label>
																	</div>
																</div>
																
																<div class="col-sm-12 col-md-12 mb-15">
																	<p class="mb-5">My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating?</p>
																	<div class="radio-block">
																		<input id="q2_radio-1" name="q2_radio" type="radio" class="radio" value="First Choice" />
																		<label class="font13" for="q2_radio-1">Yes</label>
																	</div>
																	<div class="radio-block">
																		<input id="q2_radio-2" name="q2_radio" type="radio" class="radio" value="First Choice" />
																		<label class="font13" for="q2_radio-2">no</label>
																	</div>
																</div>
																
																<div class="col-sm-12 col-md-12 mb-15">
																	<p class="mb-5">Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly?</p>
																	<div class="checkbox-block">
																		<input id="q3_checkbox-1" name="q3_checkbox" type="checkbox" class="checkbox" value="First Choice" />
																		<label class="font13" for="q3_checkbox-1">Assurance perpetual</label>
																	</div>
																	<div class="checkbox-block">
																		<input id="q3_checkbox-2" name="q3_checkbox" type="checkbox" class="checkbox" value="First Choice" />
																		<label class="font13" for="q3_checkbox-2">Entire its the did figure</label>
																	</div>
																	<div class="checkbox-block">
																		<input id="q3_checkbox-3" name="q3_checkbox" type="checkbox" class="checkbox" value="First Choice" />
																		<label class="font13" for="q3_checkbox-3">Shade being under his bed</label>
																	</div>
																	<div class="checkbox-block">
																		<input id="q3_checkbox-4" name="q3_checkbox" type="checkbox" class="checkbox" value="First Choice" />
																		<label class="font13" for="q3_checkbox-4">Pleasant horrible but confined</label>
																	</div>
																</div>
																
															</div>
															
															<hr class="mt-5">
															
															<div class="checkbox-block mb-15">
																<input id="newsletter_checkbox" name="newsletter_checkbox" type="checkbox" class="checkbox" value="First Choice" />
																<label class="" for="newsletter_checkbox">Email me jobs like this one when they become available</label>
															</div>
															
															<p class="font12 line16">Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it. Sight happy do burst fruit to woody begin at. <a href="#">Assurance perpetual</a> he in oh determine as. The year paid met him does eyes same. Own marianne improved sociable not out. Thing do sight blush mr an. Celebrated am announcing <a href="#">delightful remarkably</a> we in literature it solicitude. Design use say <a href="#">piqued any</a> gay supply. Front sex match vexed her those great.</p>
															
															<button class="btn btn-primary">Send Application</button>
															
														</form>
													
													</div>
													
												</div>
								
												
											</div>
										
										</div>

									</div>
									
									<div class="tab-style-01">
									
										<ul class="nav" role="tablist">
											<li role="presentation" class="active"><h4><a href="#relatedJob1" role="tab" data-toggle="tab">More jobs</a></h4></li>
											<li role="presentation"><h4><a href="#relatedJob2" role="tab" data-toggle="tab">Similars to this job</a></h4></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">

											<div role="tabpanel" class="tab-pane fade in active" id="relatedJob1">
												<div class="tab-content-inner">
												
													<div class="recent-job-wrapper mt-30">

														@foreach($jobs as $jbs)
														<a href="{{url('/job/'.$jbs->id.'/details')}}" class="recent-job-item highlight clearfix">
															<div class="GridLex-grid-middle">
																<div class="GridLex-col-6_sm-12_xs-12">
																	<div class="job-position">
																		<div class="image">
																			<img src="{{url($jbs->company->logo)}}" alt="Company" />
																		</div>
																		<div class="content">
																			<h4>{{$jbs->title}}</h4>
																			<p>{{$jbs->company->name}}</p>
																		</div>
																	</div>
																</div>
																<div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
																	<div class="job-location">
																		<i class="fa fa-map-marker text-primary"></i> {{$jbs->joblocation->country}},{{$jbs->joblocation->state}}
																	</div>
																</div>
																<div class="GridLex-col-2_sm-4_xs-4_xss-12">
																	<div class="job-label label label-success">
																		{{$jbs->jobtype->name}}
																	</div>
																	<span class="font12 block spacing1 font400 text-center">{{$jbs->created_at}}</span>
																</div>
															</div>
														</a>
														@endforeach
						

														
<!-- 														<a href="#" class="recent-job-item clearfix">
															<div class="GridLex-grid-middle">
																<div class="GridLex-col-6_sm-12_xs-12">
																	<div class="job-position">
																		<div class="image">
																			<img src="images/brands/01.png" alt="image" />
																		</div>
																		<div class="content">
																			<h4>IT Web Developer</h4>
																			<p>Expedia</p>
																		</div>
																	</div>
																</div>
																<div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
																	<div class="job-location">
																		<i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
																	</div>
																</div>
																<div class="GridLex-col-2_sm-4_xs-4_xss-12">
																	<div class="job-label label label-danger">
																		Part-time
																	</div>
																	<span class="font12 block spacing1 font400 text-center">2 days ago</span>
																</div>
															</div>
														</a> -->
														
														
													
													</div>
											
												</div>
											</div>

											<div role="tabpanel" class="tab-pane fade" id="relatedJob2">
												<div class="tab-content-inner">
													
													<div class="recent-job-wrapper mt-30">
						
														@foreach($jobs as $jbs)
														<a href="#" class="recent-job-item highlight clearfix">
															<div class="GridLex-grid-middle">
																<div class="GridLex-col-6_sm-12_xs-12">
																	<div class="job-position">
																		<div class="image">
																			<img src="{{url($jbs->company->logo)}}" alt="Company" />
																		</div>
																		<div class="content">
																			<h4>{{$jbs->title}}</h4>
																			<p>{{$jbs->company->name}}</p>
																		</div>
																	</div>
																</div>
																<div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
																	<div class="job-location">
																		<i class="fa fa-map-marker text-primary"></i> {{$jbs->joblocation->country}},{{$jbs->joblocation->state}}
																	</div>
																</div>
																<div class="GridLex-col-2_sm-4_xs-4_xss-12">
																	<div class="job-label label label-success">
																		{{$jbs->jobtype->name}}
																	</div>
																	<span class="font12 block spacing1 font400 text-center">{{$jbs->created_at}}</span>
																</div>
															</div>
														</a>
														@endforeach
													
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