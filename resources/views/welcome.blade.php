@extends('layouts.app')

@section('title','Welcome')

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
    <link rel="stylesheet" href="{{url('build/css/intlTelInput.css')}}">

@stop

@section('body_open')
<body class="home">
@stop

@section('header')
    @if (Auth::guest())
        @include('layouts.partials.header')
    @else
        @include('layouts.partials.header2')
    @endif

@stop

@section('content')
<!-- start hero-header -->
<div class="hero" style="background-image:url('images/hero-header/slide3.png');">
    <div class="container">

        @include('layouts.partials.errors')

        <h1>Are you Jobless? Don't Worry</h1>
        <p>Finding your next job or career more 1000+ availabilities</p>
        <div class="main-search-form-wrapper">
            <form>
                <div class="form-holder">
                    <div class="row gap-0">
                    
                        <div class="col-xss-6 col-xs-6 col-sm-6">
                            <input class="form-control" placeholder="Looking for job" />
                        </div>
                        
                        <div class="col-xss-6 col-xs-6 col-sm-6">
                            <input class="form-control" placeholder="Place to work" />
                        </div>
                        
                    </div>
                </div>
                <div class="btn-holder">
                    <button class="btn"><i class="ion-android-search"></i></button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<!-- end hero-header -->
<div class="post-hero bg-light">

    <div class="container">

        <div class="featured-sm-wrapper mt-15">
            
            <div class="row">
            
                <div class="col-sm-4 mb-20-xs">
                    
                    <div class="featured-sm-item clearfix">
                        
                        <div class="icon">
                            <i class="flaticon-thick-big-winners-cup"></i>
                        </div>
                        
                        <div class="content">
                            We are working with the best companies for your best career oppunities
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="col-sm-4 mb-20-xs">
                
                    <div class="featured-sm-item clearfix">
                        
                        <div class="icon">
                            <i class="flaticon-thick-shaking-hands"></i>
                        </div>
                        
                        <div class="content">
                            Many candidates and companies use HaNgan for their business
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="col-sm-4 mb-30-xs">
                    
                    <div class="featured-sm-item clearfix">
                        
                        <div class="icon">
                            <i class="flaticon-thick-big-cogwheel"></i>
                        </div>
                        
                        <div class="content">
                            Our process is very easy to use and to match your criteria
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        
        </div>
    
    </div>

</div>
@stop

@section('job_by')
    @include('layouts.partials.search_jobs_by')
@stop

@section('destinations')
    @include('layouts.partials.top_destination')
@stop

@section('trendings')
    @include('layouts.partials.trending_jobs')
@stop

@section('summary')
    @include('layouts.partials.system_job_summary')
@stop

@section('companies')
    @include('layouts.partials.companies_employed')
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

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="{{url('build/js/intlTelInput.js')}}"></script>
<script type="text/javascript">
    //$("#demo").intlTelInput();
    $("#demo").intlTelInput({
          initialCountry: "auto",
          geoIpLookup: function(callback) {
            $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "";
              callback(countryCode);
            });
          },
          utilsScript: "../flags/build/js/utils.js" // just for formatting/placeholders etc
        });

        $.getJSON('//freegeoip.net/json/?callback=?', function(data) {
          console.log(JSON.stringify(data, null, 2));
          var country = JSON.stringify(data, null, 2);
          $('#country_code').val(data.country_code);
          $('#country_names').val(data.country_name);
        });
</script>
@stop

@section('body_close')
</body>
@stop

