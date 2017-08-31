@extends('layouts.app')

@section('title','Post a Job')

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
				<li><a href="{{url('/post/job')}}">Post a Job</a></li>
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
									@if($company->profile_completion == 85)
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
								<li>
									<h4 class="heading">Company background: </h4>
									<span class="font600">Expedia</span> 
									{{$company->description}}<a href="employer-detail.html">read full information</a>
								</li>
							</ul>
							
						</div>

					</div>
					
							<div class="col-sm-7 col-md-8">
							
								<div class="company-detail-wrapper">


									@if($job)
									<div class="job-detail-header bb mb-30">
										<h2 class="heading mb-15">{{$job->title}}</h2>
										<div class="meta-div clearfix mb-25">
											<span>at <a href="#">{{$job->company->name}}</a> as </span>
											<span class="{{url('/read-more')}}">{{$job->jobtype->name}}</span>
										</div>
									</div>
									@endif

									<div class="company-detail-company-overview  mt-0 clearfix">

										@if($job)
										<div class="section-title-02">
											<p>Progress</p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$job->post_status}}%;">
																				{{$job->	post_status}}% complete
												</div>
											</div>
										</div>
										@else
										<div class="section-title-02">
											<h3 class="text-left">Post a Job</h3>
											<p>Progress</p>
											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color: #000;">
																				0%
												</div>
											</div>
										</div>
										@endif

										@include('layouts.partials.errors')


										@if($job)

											@include('back.partials.postjob2')


											@if($job->post_status == 30)
												<h3>Job Description</h3>
												<?php echo $job->description ?>
												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>
											@elseif($job->post_status == 55)
												<h3>Job Description</h3>
												<?php echo $job->description ?>
												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>

												<h3>Job Location</h3>
												<p><strong>Street Address:</strong> <?php echo $job->joblocation->street_addres; ?><br>
												<strong>State:</strong> {{$job->joblocation->state }}
												<br>
												<strong>City:</strong> {{$job->joblocation->city }}
												<br>
												<strong>Country:</strong> {{$job->joblocation->country }}
												<br>
												<strong>Zip:</strong> {{$job->joblocation->zip }}
												<br>
												</p>

												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>
											@elseif($job->post_status == 70)
												<h3>Job Description</h3>
												<?php echo $job->description ?>
												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>

												<h3>Job Location</h3>
												<p><strong>Street Address:</strong> <?php echo $job->joblocation->street_addres; ?><br>
												<strong>State:</strong> {{$job->joblocation->state }}
												<br>
												<strong>City:</strong> {{$job->joblocation->city }}
												<br>
												<strong>Country:</strong> {{$job->joblocation->country }}
												<br>
												<strong>Zip:</strong> {{$job->joblocation->zip }}
												<br>
												</p>
												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>

												<h3>Job Requirement&Responsibilities</h3>
												<p><h4>Requirements</h4>
												<?php echo $job->requirements; ?>
												<h4>Responsibilities</h4>
												<?php echo $job->responsibility; ?></p>
												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>

											@elseif($job->post_status == 85)
												<h3>Job Description</h3>
												<?php echo $job->description ?>
												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>

												<h3>Job Location</h3>
												<p><strong>Street Address:</strong> <?php echo $job->joblocation->street_addres; ?><br>
												<strong>State:</strong> {{$job->joblocation->state }}
												<br>
												<strong>City:</strong> {{$job->joblocation->city }}
												<br>
												<strong>Country:</strong> {{$job->joblocation->country }}
												<br>
												<strong>Zip:</strong> {{$job->joblocation->zip }}
												<br>
												</p>
												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>

												<h3>Job Requirement&Responsibilities</h3>
												<p><h4>Requirements</h4>
												<?php echo $job->requirements; ?>
												<h4>Responsibilities</h4>
												<?php echo $job->responsibility; ?></p>
												<a href="" class="btn-sm btn-primary "><i class="fa fa-pencil"></i> Edit</a>

												<h3>Skill Requirement</h3>
												<p><h5></h5>

											@endif

											

										@else
											@include('back.partials.postjob1')
										@endif
										
									</div>
									
									<div class="mt-50 mb-30 bb"></div>
									
									<!-- <div class="section-title-02">
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
										
									</ul> -->

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