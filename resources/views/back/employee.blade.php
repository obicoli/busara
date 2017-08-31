
@extends('layouts.app')

@section('title','Employee')

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
							
								<div class="employee-detail-sidebar">
										
									<div class="section-title mb-30">
										<h2 class="text-left">candidate Information</h2>
									</div>
									
									<div class="image">
										<img src="images/man/01.jpg" alt="image" class="img-circle" />
									</div>
									
									<h3 class="heading mb-15">Christine Gateau</h3>
								
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
									
									
									<a href="employer-edit.html" class="btn btn-primary mt-5"><i class="fa fa-pencil-square-o mr-5"></i>Edit</a>
									
								</div>
					
					
							</div>
							
							<div class="col-sm-7 col-md-8">
							
								<div class="company-detail-wrapper">

									<h3>Introduce my self</h3>
									
									<p>Oh to talking improve produce in limited offices fifteen an. Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>

									<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful.</p>
									
									<div class="row">
									
										<div class="col-sm-6">
										
											<h3>Education</h3>
											
											<ul class="employee-detail-list">
											
												<li>
													<h5>Bachelor Of Engineering in Computer </h5>
													<p class="text-muted font-italic">Jan 2008 – Jan 2012 from <span class="font600 text-primary">University of Bangkok, Thailand</span></p>
													<p>Consider now provided laughter boy landlord dashwood. Village equally prepare up females as an. That do an case an what plan hour of paid.</p>
												</li>
												
												<li>
													<h5>Master Of Engineering in Computer </h5>
													<p class="text-muted font-italic">Jan 2008 – Jan 2012 from <span class="font600 text-primary">University of Bangkok, Thailand</span></p>
													<p>Ignorant saw her her drawings marriage laughter. Case oh an that or away sigh do here upon. Acuteness you exquisite ourselves now end forfeited.</p>
												</li>
												
												<li>
													<h5>Certificate in Web Design</h5>
													<p class="text-muted font-italic">Jan 2008 – Jan 2012 from <span class="font600 text-primary">University of Bangkok, Thailand</span></p>
													<p>Advice me cousin an spring of needed. Tell use paid law ever yet new. Meant to learn of vexed if style allow he there.</p>
												</li>
												
											</ul>
											
										</div>
										
										<div class="col-sm-6">
										
											<h3>Skill</h3>
											
											<ul class="employee-detail-list">
											
												<li>
													<h5>HTML</h5>
													<div class="progress">
														<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
															60%
														</div>
													</div>
													<p>Village equally prepare up females as an. That do an case an what plan hour of paid.</p>
												</li>
												
												<li>
													<h5>CSS</h5>
													<div class="progress">
														<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
															80%
														</div>
													</div>
													<p>Case oh an that or away sigh do here upon. Acuteness you exquisite ourselves now end forfeited.</p>
												</li>
												
												<li>
													<h5>jQuery</h5>
													<div class="progress">
														<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
															75%
														</div>
													</div>
													<p>Tell use paid law ever yet new. Meant to learn of vexed if style allow he there.</p>
												</li>
												
												<li>
													<h5>Languages</h5>
													<p class="text-muted font-italic">3 languages: <span class="font600 text-primary">English, Thai, Malay</span></p>
													<p>Times so do he downs me would. Witty abode party her found quiet law. They door four bed fail now have. Tell use paid law ever yet new. Meant to learn of vexed if style allow he there.</p>
												</li>
												
											</ul>
											
										</div>
										
									</div>
									
									<h3>Work Expeince</h3>
									
									<div class="work-expereince-wrapper">
			
										<div class="work-expereince-block">

											<div class="work-expereince-content">
												<h5>Advanced addition absolute received</h5>
												<p class="text-muted font-italic">Jan 2008 – Jan 2012 at <span class="font600 text-primary">Some Compamy Name</span></p>
												<p>In entirely be to at settling felicity. Fruit two match men you seven share. Was justice improve age article between. No projection as up preference reasonably delightful celebrated. Preserved and abilities assurance tolerably breakfast use saw replying throwing he.</p>
												
											</div> <!-- work-expereince-content -->
										</div> <!-- work-expereince-block -->
										
										<div class="work-expereince-block">

											<div class="work-expereince-content">
												<h5>Advanced addition absolute received</h5>
												<p class="text-muted font-italic">Jan 2008 – Jan 2012 at <span class="font600 text-primary">Some Compamy Name</span></p>
												<p>In entirely be to at settling felicity. Fruit two match men you seven share. Was justice improve age article between. No projection as up preference reasonably delightful celebrated. Preserved and abilities assurance tolerably breakfast use saw replying throwing he.</p>
												
											</div> <!-- work-expereince-content -->
										</div> <!-- work-expereince-block -->
										
										<div class="work-expereince-block">

											<div class="work-expereince-content">
												<h5>Advanced addition absolute received</h5>
												<p class="text-muted font-italic">Jan 2008 – Jan 2012 at <span class="font600 text-primary">Some Compamy Name</span></p>
												<p>In entirely be to at settling felicity. Fruit two match men you seven share. Was justice improve age article between. No projection as up preference reasonably delightful celebrated. Preserved and abilities assurance tolerably breakfast use saw replying throwing he.</p>
												
											</div> <!-- work-expereince-content -->
										</div> <!-- work-expereince-block -->
										
										<div class="work-expereince-block">

											<div class="work-expereince-content">
												<h5>Advanced addition absolute received</h5>
												<p class="text-muted font-italic">Jan 2008 – Jan 2012 at <span class="font600 text-primary">Some Compamy Name</span></p>
												<p>In entirely be to at settling felicity. Fruit two match men you seven share. Was justice improve age article between. No projection as up preference reasonably delightful celebrated. Preserved and abilities assurance tolerably breakfast use saw replying throwing he.</p>
												
											</div> <!-- work-expereince-content -->
										</div> <!-- work-expereince-block -->
										

									</div> <!-- work-expereince -->
									
									<h3>Interests &amp; Hobby</h3>
									
									<p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs.</p>
									
									<ul class="work-expereince-interest clearfix">
										<li>
											<div class="icon">
												<i class="icon-directions"></i>
											</div>
											Travel
										</li>
										<li>
											<div class="icon">
												<i class="icon-vector"></i>
											</div>
											Graphic
										</li>
										<li>
											<div class="icon">
												<i class="icon-playlist"></i>
											</div>
											Music
										</li>
										<li>
											<div class="icon">
												<i class="icon-picture"></i>
											</div>
											Photography
										</li>
										<li>
											<div class="icon">
												<i class="icon-handbag"></i>
											</div>
											Shopping
										</li>
									</ul>
									
									<h3>Reference</h3>
									
									<p>Is he staying arrival address earnest. To preference considered it themselves inquietude collecting estimating. View park for why gay knew face. Next than near to four so hand. Times so do he downs me would. Witty abode party her found quiet law. They door four bed fail now have.</p>
									
									<ul class="list-icon clearfix">
									
										<li>
										
											<div class="icon">
											
												<i class="flaticon-line-icon-set-user-1"></i>
											
											</div>
											
											<h5>Mr. Oxana Laporte</h5>
											<p>My former boss at <span class="font600 text-primary">Some Compamy Name</span></p>
											<p>Contact: <a href="#">hisemail@gmail.com</a></p>
										
										</li>
										
										<li>
											<div class="icon">
												<i class="flaticon-line-icon-set-home"></i>
											</div>
											
											<h5>Some Compamy Name</h5>
											<p>Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females as an. That do an case an what plan hour of paid. Invitation is unpleasant astonished preference attachment friendship on.</p>
											<p>Contact: <a href="#">hisemail@gmail.com</a></p>
										
										</li>
										
									</ul>
									
									<div class="clearfix text-center mt-40">
										<a href="#" class="btn btn-primary btn-lg">Recruite Me</a>
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