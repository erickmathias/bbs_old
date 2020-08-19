<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bar Bending Schedule</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>BBS</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {{ Auth::user()->name }}
                                        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    InfyOm Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

<script type="text/javascript">
    //main member js
    $(document).ready(function () {

/*        $("#std_code").change(function () {
            var stdcode = $(this).val();
            //alert(stdcode);
            if(stdcode == 4){
                $('#mproperty_div').removeAttr('hidden');
            }else{
                $('#mproperty_div').attr('hidden',true);
            }
        });*/
//end multiple member options

        //var counter = $("#counter").val();
        // start loop around new field
            $("#shape_code").change(function () {
                var option = parseInt($(this).val());
                //alert(option);
                //
                    <?php
                    if(isset($scodes)){
                    foreach ($scodes as $value){
                    ?>
                var scode = <?php echo $value->id; ?>;

                if(scode == option){
                    $("#shape-<?php echo $value->id; ?>").removeAttr('hidden');
                    $("#shape-<?php echo $value->id; ?>").hide();
                    $("#shape-<?php echo $value->id; ?>").show(2000);
                }else{
                    $("#shape-<?php echo $value->id; ?>").attr('hidden',true);
                }
                <?php }
                    }?>


                if([2,3,4,5,31,32,33,34,61,1,21,30,50,59,60,89].includes(option)){
                    //alert only box for length 'a'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_a").attr('hidden');
                    $("#length_b").attr('hidden',true);
                    $("#length_c").attr('hidden',true);
                    $("#length_d").attr('hidden',true);
                    $("#length_e_r").attr('hidden',true);
                    $("#length_f").attr('hidden',true);*/
                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    //$("#length_a").attr('hidden');
                    $("#length_b").prop('disabled',true);
                    $("#length_b").removeAttr('required');
                    $("#length_c").prop('disabled',true);
                    $("#length_c").removeAttr('required');
                    $("#length_d").prop('disabled',true);
                    $("#length_d").removeAttr('required');
                    $("#length_e").prop('disabled',true);
                    $("#length_e").removeAttr('required');
                    $("#length_r").prop('disabled',true);
                    $("#length_r").removeAttr('required');
                    $("#length_f").prop('disabled',true);
                    $("#length_f").removeAttr('required');
                }else if([64,65,91].includes(option)){
                    //alert only box for length 'a and c'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_c").removeAttr('hidden');
                    $("#length_b").attr('hidden',true);
                    $("#length_d").attr('hidden',true);
                    $("#length_e_r").attr('hidden',true);
                    $("#length_f").attr('hidden',true);*/

                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    $("#length_c").prop('disabled',false);
                    $("#length_c").attr('required','required');
                    $("#length_b").prop('disabled',true);
                    $("#length_b").removeAttr('required');
                    $("#length_d").prop('disabled',true);
                    $("#length_d").removeAttr('required');
                    $("#length_e").prop('disabled',true);
                    $("#length_e").removeAttr('required');
                    $("#length_r").prop('disabled',true);
                    $("#length_r").removeAttr('required');
                    $("#length_f").prop('disabled',true);
                    $("#length_f").removeAttr('required');
                }else if([6,22,35,51,70,14,43,62,20,49,24,25,53,54,90,19,48].includes(option)){
                    //alert only box for length 'a and b'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_b").removeAttr('hidden');
                    $("#length_c").attr('hidden',true);
                    $("#length_d").attr('hidden',true);
                    $("#length_e_r").attr('hidden',true);
                    $("#length_f").attr('hidden',true);*/
                    alert("contains a and b only");
                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    $("#length_b").prop('disabled',false);
                    $("#length_b").attr('required','required');
                    $("#length_c").prop('disabled',true);
                    $("#length_c").removeAttr('required');
                    $("#length_d").prop('disabled',true);
                    $("#length_d").removeAttr('required');
                    $("#length_e").prop('disabled',true);
                    $("#length_e").removeAttr('required');
                    $("#length_r").prop('disabled',true);
                    $("#length_r").removeAttr('required');
                    $("#length_f").prop('disabled',true);
                    $("#length_f").removeAttr('required');
                }else if([7,8,12,17,36,37,41,46,66,68,72,73,74,10,39,9,13,38,42,69,71,63,23,52,77,28,57].includes(option)){
                    //alert only box for length 'a and b and c'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_b").removeAttr('hidden');
                    $("#length_c").removeAttr('hidden');
                    $("#length_d").attr('hidden',true);
                    $("#length_e_r").attr('hidden',true);
                    $("#length_f").attr('hidden',true);*/

                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    $("#length_b").prop('disabled',false);
                    $("#length_b").attr('required','required');
                    $("#length_c").prop('disabled',false);
                    $("#length_c").attr('required','required');
                    $("#length_d").prop('hidden',true);
                    $("#length_d").removeAttr('required');
                    $("#length_e").prop('hidden',true);
                    $("#length_e").removeAttr('required');
                    $("#length_r").prop('hidden',true);
                    $("#length_r").removeAttr('required');
                    $("#length_f").prop('hidden',true);
                    $("#length_f").removeAttr('required');
                }else if([78,79,11,40,83].includes(option)){
                    //alert only box for length 'a and b and c and e'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_b").removeAttr('hidden');
                    $("#length_c").removeAttr('hidden');
                    $("#length_e_r").removeAttr('hidden');
                    $("#length_d").attr('hidden',true);
                    $("#length_f").attr('hidden',true);*/

                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    $("#length_b").prop('disabled',false);
                    $("#length_b").attr('required','required');
                    $("#length_c").prop('disabled',false);
                    $("#length_c").attr('required','required');
                    $("#length_e").prop('disabled',false);
                    $("#length_e").attr('required','required');
                    $("#length_r").prop('disabled',true);
                    $("#length_r").removeAttr('required');
                    $("#length_d").prop('hidden',true);
                    $("#length_d").removeAttr('required');
                    $("#length_f").prop('hidden',true);
                    $("#length_f").removeAttr('required');
                }else if([15,16,44,45,67,75,76,80,26,55,27,56,92,84,87,85].includes(option)){
                    //alert only box for length 'a and b and c and d'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_b").removeAttr('hidden');
                    $("#length_c").removeAttr('hidden');
                    $("#length_d").removeAttr('hidden');
                    $("#length_e_r").attr('hidden',true);
                    $("#length_f").attr('hidden',true);*/

                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    $("#length_b").prop('disabled',false);
                    $("#length_b").attr('required','required');
                    $("#length_c").prop('disabled',false);
                    $("#length_c").attr('required','required');
                    $("#length_d").prop('disabled',false);
                    $("#length_d").attr('required','required');
                    $("#length_r").prop('hidden',false);
                    $("#length_r").attr('required','required');
                    $("#length_e").prop('hidden',true);
                    $("#length_e").removeAttr('required');
                    $("#length_f").prop('hidden',true);
                    $("#length_f").removeAttr('required');
                }else if([18,47,81,82,86].includes(option)){
                    //alert only box for length 'a and b and c and d and e'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_b").removeAttr('hidden');
                    $("#length_c").removeAttr('hidden');
                    $("#length_d").removeAttr('hidden');
                    $("#length_e_r").removeAttr('hidden');
                    $("#length_f").attr('hidden',true);*/

                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    $("#length_b").prop('disabled',false);
                    $("#length_b").attr('required','required');
                    $("#length_c").prop('disabled',false);
                    $("#length_c").attr('required','required');
                    $("#length_d").prop('disabled',false);
                    $("#length_d").attr('required','required');
                    $("#length_e").prop('disabled',false);
                    $("#length_e").attr('required','required');
                    $("#length_r").prop('disabled',false);
                    $("#length_r").attr('required','required');
                    $("#length_f").prop('hidden',true);
                    $("#length_f").removeAttr('required');
                }else if([29,58,93].includes(option)){
                    //alert only box for length 'a and b and c and d and e'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_b").removeAttr('hidden');
                    $("#length_c").removeAttr('hidden');
                    $("#length_d").removeAttr('hidden');
                    $("#length_e_r").removeAttr('hidden');
                    $("#length_f").attr('hidden',true);*/

                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    $("#length_b").prop('disabled',false);
                    $("#length_b").attr('required','required');
                    $("#length_c").prop('disabled',false)
                    $("#length_c").attr('required','required');
                    $("#length_d").prop('disabled',false);
                    $("#length_d").attr('required','required');
                    $("#length_e").prop('disabled',false);
                    $("#length_e").attr('required','required');
                    $("#length_r").prop('disabled',true);
                    $("#length_r").removeAttr('required');
                    $("#length_f").prop('hidden',true);
                    $("#length_f").removeAttr('required');
                }else if([88].includes(option)){
                    //alert only box for length 'a and b and c and d and e and f'
                    /*$("#length_a").removeAttr('hidden');
                    $("#length_b").removeAttr('hidden');
                    $("#length_c").removeAttr('hidden');
                    $("#length_d").removeAttr('hidden');
                    $("#length_e_r").removeAttr('hidden');
                    $("#length_f").removeAttr('hidden');*/

                    $("#length_a").prop('disabled',false);
                    $("#length_a").attr('required','required');
                    $("#length_b").prop('disabled',false);
                    $("#length_b").attr('required','required');
                    $("#length_c").prop('disabled',false);
                    $("#length_c").attr('required','required');
                    $("#length_d").prop('disabled',false);
                    $("#length_d").attr('required','required');
                    $("#length_e").prop('disabled',false);
                    $("#length_e").attr('required','required');
                    $("#length_r").prop('disabled',false);
                    $("#length_r").attr('required','required');
                    $("#length_f").prop('disabled',false);
                    $("#length_f").attr('required','required');
                }else{
                    //hide all boxex
                    /*$("#length_a").attr('hidden',true);
                    $("#length_b").attr('hidden',true);
                    $("#length_c").attr('hidden',true);
                    $("#length_d").attr('hidden',true);
                    $("#length_e_r").attr('hidden',true);
                    $("#length_f").attr('hidden',true);*/

                    $("#length_a").prop('disabled',true);
                    $("#length_a").removeAttr('required');
                    $("#length_b").prop('disabled',true);
                    $("#length_b").removeAttr('required');
                    $("#length_c").prop('disabled',true);
                    $("#length_c").removeAttr('required');
                    $("#length_d").prop('disabled',true);
                    $("#length_d").removeAttr('required');
                    $("#length_e").prop('disabled',true);
                    $("#length_e").removeAttr('required');
                    $("#length_r").prop('disabled',true);
                    $("#length_r").removeAttr('required');
                    $("#length_f").prop('disabled',true);
                    $("#length_f").removeAttr('required');
                }
            });



        $("#newelement").click(function () {
            $("#elementslist").attr('hidden',true);
            $("#elementslistheader").attr('hidden',true);
            $("#newelement").attr('hidden',true);
            $("#elementform").removeAttr('hidden');
            $("#elementform").hide(true);
            $("#elementform").show(100);
        });

        $("#cancelelementform").click(function () {
            $("#elementslist").removeAttr('hidden');
            $("#elementslistheader").removeAttr('hidden');
            $("#newelement").removeAttr('hidden');
            $("#elementform").attr('hidden',true);
           return false;
        });

        $("#savemember").click(function () {
            //alert("confirm?");
            var conf = confirm("Confirm Save Member!");
            if(conf){
                return true;
            };
            return false;
        });


    });

    //end of main member js
</script>

    @stack('scripts')
</body>
</html>
