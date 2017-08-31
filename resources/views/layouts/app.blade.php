
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>@yield('title') - Busara Online Job Portal</title>
    <meta name="description" content="HTML Responsive Landing Page Template for Job Portal Based on Twitter Bootstrap 3.x.x" />
    <meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
    <meta name="author" content="crenoveative">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Fav and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{url('images/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{url('images/ico/favicon.png')}}">

    @yield('styles')
    
</head>


@yield('body_open')


    <div id="introLoader" class="introLoading"></div>
    
    <!-- start Container Wrapper -->
    <div class="container-wrapper">

        @yield('header')

        <!-- start Main Wrapper -->
        <div class="main-wrapper">
            
            @yield('content')

            @yield('job_by')

            @yield('destinations')

            @yield('trendings')

            @yield('summary')

            @yield('companies')

            @include('layouts.partials.footer')
            
        </div>
        <!-- end Main Wrapper -->

    </div> <!-- / .wrapper -->
    <!-- end Container Wrapper -->

<!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<!-- end Back To Top -->

@yield('scripts')

@yield('body_close')


</html>