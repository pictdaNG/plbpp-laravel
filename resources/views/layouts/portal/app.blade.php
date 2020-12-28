<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>PLBPP OCDS</title>
        <link rel="icon" href="{{ URL::asset('assets/images/favicon.ico')}}" type="image/x-icon"/>
        <link href="{{ URL::asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/css/icons.css' )}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('assets/css/app-style.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('assets/css/skins.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('assets/plugins/jquery.steps/css/jquery.steps.css')}}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/plugins/notifications/css/lobibox.min.css')}}"/>
        <link href="{{ URL::asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
        @toastr_css
    </head>
    <body>
        <div id="pageloader-overlay" class="visible incoming">
            <div class="loader-wrapper-outer">
                <div class="loader-wrapper-inner">
                    <div class="loader">
                    </div>
                </div>
            </div>
        </div> <!-- end loader -->
        <div id="wrapper"><!-- Start wrapper-->
            <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
                <div class="brand-logo">
                    <a href="">
                        <img src="{{ URL::asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                        <h5 class="logo-text">PLBPP OCDS</h5>
                    </a>
                </div>
                <?php $profile = Sentinel::getUser(); ?>
                <div class="user-details">
                    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
                        <div class="avatar">
                            <img class="mr-3 side-user-img" src="https://via.placeholder.com/110x110" alt="user avatar">
                        </div>
                        <div class="media-body">
                            <h6 class="side-user-name">Welcome {{ $profile->first_name }}</h6>
                        </div>
                    </div>
                    <div id="user-dropdown" class="collapse">
                        <ul class="user-setting-menu">
                            <!-- <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li> -->
                            <!-- <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li> -->
                            <li><a href=""><i class="icon-power"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li class="sidebar-header">
                        MAIN NAVIGATION
                    </li>

                    <li class="@yield('contractors')">
                      <a href="javaScript:void();"   class="waves-effect">
                        <i class="zmdi zmdi-widgets"></i>
                          <span>Contractors</span>
                        <i class="fa fa-angle-left float-right"></i>
                      </a>
                      <ul class="sidebar-submenu">
                        <li><a href="{{ route('admin.contractor.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Create</a></li>
                        <li><a href="{{ route('admin.contractor.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>View</a></li>

                      </ul>
                    </li>

                    <li class="@yield('documents')">
                      <a href="javaScript:void();"  class="waves-effect">
                        <i class="zmdi zmdi-view-dashboard"></i>
                        <span>Documents</span>
                         <i class="fa fa-angle-left float-right"></i>
                      </a>
                      <ul class="sidebar-submenu">
                        <li><a href="{{ route('admin.document.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Create</a></li>
                        <li><a href="{{ route('admin.document.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>View</a></li>

                      </ul>
                    </li>

                    <li class="@yield('mdas')">
                      <a href="javaScript:void();"   class="waves-effect">
                        <i class="zmdi zmdi-widgets"></i>
                          <span>MDAS</span>
                        <i class="fa fa-angle-left float-right"></i>
                      </a>
                      <ul class="sidebar-submenu">
                        <li><a href="{{ route('admin.mda.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Create</a></li>
                        <li><a href="{{ route('admin.mda.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>View</a></li>

                      </ul>
                    </li>

                    <li class="@yield('news')">
                      <a href="{{ route('admin.news.index') }}"  class="waves-effect">
                        <i class="zmdi zmdi-chart-donut"></i>
                          <span>News</span>
                        <i class=""></i>
                      </a>
                    </li>
                    <li class="@yield('ocds')">
                      <a href="javaScript:void();"   class="waves-effect">
                        <i class="zmdi zmdi-lock"></i>
                          <span>OCDS</span>
                        <i class="fa fa-angle-left float-right"></i>
                      </a>
                      <ul class="sidebar-submenu">
                        <li><a href="{{ route('admin.tender.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Create</a></li>
                        <li><a href="{{ route('admin.tender.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>View</a></li>

                      </ul>
                    </li>
                    <li>
                      <a href="" class="waves-effect">
                      <i class="zmdi ti-power-off"></i>
                      <span>Logout</span>
                      <!-- <small class="badge float-right badge-warning">12</small> -->
                      </a>
                    </li>
                </ul>
            </div><!--End sidebar-wrapper-->
            <!--Start topbar header-->
            <header class="topbar-nav">
                <nav id="header-setting" class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                    </a>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">

                    <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                        <div class="media">
                            <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                            <div class="media-body">
                            <h6 class="mt-2 user-title">{{ $profile->first_name }}</h6>
                            <p class="user-subtitle">{{$profile->last_name}}</p>
                            </div>
                        </div>
                        </a>
                        </li>
                        <a href="">
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i>Logout</li>
                        </a>
                    </ul>
                    </li>
                </ul>
                </nav>
            </header>
            <div class="clearfix"></div>
            <div class="content-wrapper">
                <div class="container-fluid">
                 @yield('content')
                </div>
            </div>
            <!-- <footer class="footer">
                <div class="container">
                    <div class="text-center">
                        Copyright © {{date('Y')}} Tymebrokers.com
                    </div>
                </div>
            </footer> -->
        </div><!--End wrapper-->

        <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
        <script src="{{ URL::asset('assets/js/sidebar-menu.js')}}"></script>
        <script src="{{ URL::asset('assets/js/jquery.loading-indicator.js')}}"></script>
        <script src="{{ URL::asset('assets/js/app-script.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery.steps/js/jquery.steps.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery.steps/js/jquery.wizard-init.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/notifications/js/notifications.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>


        <script>
            $(document).ready(function() {
                $('#default-datatable').DataTable();
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                })
            });
            $().ready(function() {
                $("#change-password").validate();
                // $("#transferForm").validate();

                // validate signup form on keyup and submit
                $("#signupForm").validate({
                    rules: {
                        surname: "required",
                        other_names: "required",
                        username: {
                            required: true,
                            minlength: 2
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        confirm_password: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        phone_number: {
                            required: true,
                            minlength: 10
                        },
                        address: {
                            required: true,
                            minlength: 10
                        },

                        bank_name: {
                            required: true

                        },
                        account_name: {
                            required: true
                        },
                        swift_code: {
                            required: true
                        },
                        routing_number: {
                            required:true
                        },
                        account_number: {
                            required: true,
                            minlength: 10
                        },

                    },
                    messages: {
                        surnname: "Please enter your surname",
                        other_names: "Please enter your othername",
                        username: {
                            required: "Please enter a username",
                            minlength: "Your username must consist of at least 2 characters"
                        },
                        password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long"
                        },
                        confirm_password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long",
                            equalTo: "Please enter the same password as above"
                        },
                        email: "Please enter a valid email address",
                        phone_number: "Please enter your valid digit number",
                        // agree: "Please accept our policy",
                        // topic: "Please select at least 2 topics"
                    }
                });

                $("#transferForm").validate({
                    rules: {
                        bank_name: {
                            required: true,
                        },
                        beneficiary_name: {
                            required: true,
                        },
                        beneficiary_account_number: {
                            required: true,
                        },
                        swift_code: {
                            required: true,
                        },
                        routing_number: {
                            required: true,
                        },
                        adress: {
                            required: true,
                        },
                        amount: {
                            required: true,
                        },
                        otp: {
                            required: true,
                            minlength: 4,
                        },
                    },
                    messages: {
                        bank_name: {
                            required: "This Field is required",
                        },
                        beneficiary_name: {
                            required: "This Field is required",
                        },
                        beneficiary_account_number: {
                            required: "This Field is required",
                            minlength: "minimum of 9 digits"
                        },
                        swift_code: {
                            required: "This Field is required",
                        },
                        routing_number: {
                            required: "This Field is required",
                        },
                        address: {
                            required: "This Field is required",
                        },
                        amount: {
                            required: "This Field is required",
                        },
                        otp: {
                            required: "Please enter an amount",
                        },
                    }
                });

                $('#otpBtn').click(function(e){

                    e.preventDefault();
                    var host = '{{URL::to('/')}}';
                    $.ajax({
                        type: "POST",
                        url : host + '/user/otp/request',
                        beforeSend: function(){
                            $('#otpBtn').html('Requesting...');
                            $('#otpBtn').attr('disabled', 'disabled');
                        },
                        success:function(response){
                            $('#otpBtn').html('Mail Sent with OTP');
                            $('#res_message').html(response.success);
                            $('#msg_div').show();
                            setTimeout(function(){
                               // $('#res_message').hide();
                               // $('#msg_div').hide();
                                $('#otpBtn').removeAttr('disabled');
                                $('#otpBtn').html('Request Again?');
                            },3000);
                        },
                    });
                })
            });
        </script>
        <script src="{{ URL::asset('assets/js/index.js')}}"></script>
    </body>
    @toastr_js
    @toastr_render
</html>
