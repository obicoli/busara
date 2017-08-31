<!-- start Header -->
<header id="header">

    <!-- start Navbar (Header) -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

        <div class="container">
            
            <div class="logo-wrapper">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="images/logos.png" alt="Busara" /></a>
                </div>
            </div>
            
            <div id="navbar" class="navbar-nav-wrapper navbar-arrow">
            
                <ul class="nav navbar-nav" id="responsive-menu">
                
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>
                        <a href="employee.html">About</a>
<!--                         <ul>
                            <li><a href="employee-detail.html">Employee Detail</a></li>
                            <li><a href="employee-detail-02.html">Employee Detail 02</a></li>
                            <li><a href="employee-create-resume.html">Create a resume</a></li>
                            <li><a href="employee-edit.html">Edit Profile</a></li>
                        </ul> -->
                    </li>
                    <li><a href="{{url('/services')}}">Services</a></li>
                    

                    @if($user->role->role_name == 'Employer')
                    <li>
                        <a href="#">Jobs</a>
                        <ul>
                            <li><a href="{{url('/my-jobs')}}">My Jobs</a></li>
                            <li><a href="{{url('/jobs/applied')}}">Applied</a></li>
                            <li><a href="{{url('/job/applicants')}}">Applicants</a></li>
                            @if($company)
                            <li><a href="{{url('/post/job')}}">Post a Job</a></li>
                            @else
                            <li><a onclick="alert('Create company profile to post your job');">Post a Job</a></li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a href="#">Employee</a>
                        <!-- <ul>
                            <li><a href="employer-detail.html">Employer Detail</a></li>
                            <li><a href="employer-detail-02.html">Employer Detail 02</a></li>
                            <li><a href="employer-detail-03.html">Employer Detail 03</a></li>
                            <li><a href="employer-post-job.html">Post a Job</a></li>
                            <li><a href="employer-edit.html">Edit Profile</a></li>
                        </ul> -->
                    </li>
                    @elseif($user->role->role_name == 'Employee')
                    <li>
                        <a href="employer.html">Jobs</a>
                        <ul>
                            <li><a href="{{url('/find-jobs')}}">Browse Jobs</a></li>
                        </ul>
                    </li>
                    @else
                    <li>
                        <a href="{{url('/jobs')}}">Jobs</a>
                    </li>
                    @endif
                    
                    <li>
                        <a href="employer.html">Services</a>
<!--                         <ul>
                            <li><a href="employer-detail.html">Employer Detail</a></li>
                            <li><a href="employer-detail-02.html">Employer Detail 02</a></li>
                            <li><a href="employer-detail-03.html">Employer Detail 03</a></li>
                            <li><a href="employer-post-job.html">Post a Job</a></li>
                            <li><a href="employer-edit.html">Edit Profile</a></li>
                        </ul> -->
                    </li>

                    <li><a href="{{url('/blogs')}}">Blog</a></li>

                    <li>
                        <a href="#" class="btn btn-primary btn-xs">{{Auth::user()->name}}</a>
                        <ul>
                            <li><a href="{{url('/'.Auth::user()->role->role_name.'/'.Auth::user()->id.'/profile')}}"><i class="fa fa-user"></i> Profile({{Auth::user()->role->role_name}})</a></li>
                            <li><a data-toggle="modal" href="#switchModal"><i class="fa fa-refresh"></i> Switch account</a></li>
                            @if($user->role->role_name == 'Employer')
                            <li><a href="{{url('/company/owned/')}}"><i class="fa fa-file-pdf-o"></i> Company</a></li>
                            @if($company)
                            <li><a href="{{url('/post/job')}}"><i class="fa fa-file-pdf-o"></i> Post a job</a></li>
                            @endif

                            @endif
                            <li><a href="{{url('/create/resume')}}"><i class="fa fa-newspaper-o"></i> Create a resume</a></li>
                            <li>
                                <form method="post" action="{{url('/logout')}}">
                                    {{csrf_field()}}
                                    <button style="background-color: transparent; border: 0px solid transparent;"> <i class="fa fa-sign-out"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->

        </div>
        
        <div id="slicknav-mobile"></div>
        
    </nav>
    <!-- end Navbar (Header) -->

    <!-- start Sign-in Modal -->
    <div id="switchModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

        <form action="{{url('/switch/account',Auth::user()->id)}}" method="POST">

            {{csrf_field()}}
    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Switch account</h4>
            </div>
            
            <div class="modal-body">
                <div class="row gap-20">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group"> 
                            <label>Switch to</label>
                            <select class="form-control" name="switch_to" required="required">
                                <option> --Select option-- </option>
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="modal-footer text-center">
                <button type="submit" class="btn btn-primary">Switch</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
            </div>

        </form>
    </div>
    <!-- end Sign-in Modal -->

    <!-- start Sign-in Modal -->
    <div id="loginModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

        <form action="{{url('/login')}}" method="POST">

            {{csrf_field()}}
    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Sign-in into your account</h4>
            </div>
            
            <div class="modal-body">
                <div class="row gap-20">

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group"> 
                            <label>Email/Phone number</label>
                            <input class="form-control" placeholder="Email or Phone number" type="email" name="email" required="required" autofocus="autofocus" value="{{ old('email') }}"> 
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group"> 
                            <label>Password</label>
                            <input class="form-control" placeholder="" type="password" name="password" required="required"> 
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="login-modal-or">
                            <div><span>or</span></div>
                        </div>
                    </div>
                
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-facebook btn-block mb-5-xs">Log-in with Facebook</button>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-google-plus btn-block">Log-in with Google+</button>
                    </div><br>
                    
                    
                    <div class="col-sm-6 col-md-6">
                        <div class="checkbox-block"> 
                            <input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
                            <label class="" for="remember_me_checkbox">Remember me</label>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6">
                        <div class="login-box-link-action">
                            <a data-toggle="modal" href="#forgotPasswordModal">Forgot password?</a> 
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="login-box-box-action">
                            No account? <a data-toggle="modal" href="#registerModal">Register</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="modal-footer text-center">
                <button type="submit" class="btn btn-primary">Log-in</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
            </div>

        </form>
    </div>
    <!-- end Sign-in Modal -->
    
    <!-- start Register Modal -->
    <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">

        <form method="post" action="{{url('/register')}}">

            {{csrf_field()}}
    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Create your account for free</h4>
            </div>
            
            <div class="modal-body">
            
                <div class="row gap-20">

                    <div class="col-sm-4 col-md-4">
                        <div class="form-group"> 
                            <label>Name</label> 
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" type="text" name="name" required="required"> 
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-md-4">
                        <div class="form-group"> 
                            <label>Email Address</label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter your email address" type="email" required="required" name="email"> 
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="form-group"> 
                            <label>Phone number</label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="" type="tel" id="demo" name="phone" required="required">
                        </div>
                    </div>

                    <input type="hidden" name="country_code" id="country_code">
                    <input type="hidden" name="country_names" id="country_names">
                    
                    <div class="col-sm-4 col-md-4">
                        <div class="form-group"> 
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="Min 8 and Max 20 characters" type="password" name="password" required="required"> 
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-md-4">
                        <div class="form-group"> 
                            <label>Confirm password</label> 
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <div class="form-group">
                            <input class="form-control" placeholder="Re-type password again" type="password" name="password_confirmation"> 
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="login-modal-or">
                            <div><span>or</span></div>
                        </div>
                    </div>
                
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-facebook btn-block mb-5-xs">Register with Facebook</button>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-google-plus btn-block">Register with Google+</button>
                    </div>
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="checkbox-block"> 
                            <input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
                            <label class="" for="register_accept_checkbox">By register, I read &amp; accept <a href="#">the terms</a></label>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="login-box-box-action">
                            Already have account? <a data-toggle="modal" href="#loginModal">Log-in</a>
                        </div>
                    </div>
                    
                </div>
            
            </div>
            
            <div class="modal-footer text-center">
                <button type="submit" class="btn btn-primary">Register</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
            </div>

        </form>
        
    </div>
    <!-- end Register Modal -->

    <!-- start Forget Password Modal -->
    <div id="forgotPasswordModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
    
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center">Restore your forgotten password</h4>
        </div>
        
        <div class="modal-body">
            <div class="row gap-20">
                
                <div class="col-sm-12 col-md-12">
                    <p class="mb-20">Maids table how learn drift but purse stand yet set. Music me house could among oh as their. Piqued our sister shy nature almost his wicket. Hand dear so we hour to.</p>
                </div>
                
                <div class="col-sm-12 col-md-12">
        
                    <div class="form-group"> 
                        <label>Email Address</label>
                        <input class="form-control" placeholder="Enter your email address" type="text"> 
                    </div>
                
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="checkbox-block"> 
                        <input id="forgot_password_checkbox" name="forgot_password_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
                        <label class="" for="forgot_password_checkbox">Generate new password</label>
                    </div>
                </div>
                
                <div class="col-sm-12 col-md-12">
                    <div class="login-box-box-action">
                        Return to <a data-toggle="modal" href="#loginModal">Log-in</a>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="modal-footer text-center">
            <button type="button" class="btn btn-primary">Restore</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
        </div>
        
    </div>
    <!-- end Forget Password Modal -->
    
</header>