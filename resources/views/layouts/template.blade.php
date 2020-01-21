<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin</title>
    <script src="https://kit.fontawesome.com/a79caf36ea.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" href="{{ asset('admins/asset/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="admins/asset/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/vendors/css/charts/morris.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/app-assets/css/pages/timeline.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/asset/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ asset('admins/asset/html/ltr/template/index.html')}}"><img class="brand-logo" alt="stack admin logo" src="{{asset('admins/asset/app-assets/images/logo/stack-logo-light.png')}}">
                            <h2 class="brand-text">Admin</h2>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Stack...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="{{asset('admins/asset/app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span><span class="user-name">Admin</span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{asset('admins/html/ltr/template/user-profile.html')}}"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="{{asset('admins/html/ltr/template/app-email.html')}}"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="{{asset('admins/html/ltr/template/user-cards.html')}}"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{asset('admins/html/ltr/template/login-with-bg-image.html')}}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
            </li>
            <li class=" nav-item {{ Request::path() ==  'admin' ? 'active' : '' }} "><a href="{{@url('/admin')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a></li>
            <li class=" navigation-header"><span>Content</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Apps"></i>
            </li>
            <li class=" nav-item {{ Request::path() ==  'admin/createcontent' ? 'active' : '' }}"><a href="{{url('/admin/createcontent')}}"><i class="ft-check-square"></i><span class="menu-title" data-i18n="">Tambah Content</span></a></li>
            <li class=" nav-item {{ Request::path() ==  'admin/editcontent' ? 'active' : '' }}"><a href="{{url('/admin/editcontent')}}"><i class="ft-share"></i><span class="menu-title" data-i18n="">Update Content</span></a></li>
            <li class=" nav-item {{ Request::path() ==  'admin/deletecontent' ? 'active' : '' }}"><a href="{{url('/admin/deletecontent')}}"><i class="ft-slash"></i><span class="menu-title" data-i18n="">Delete Content</span></a></li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->


@yield('content')



<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('admins/asset/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('admins/asset/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
<script src="{{asset('admins/asset/app-assets/vendors/js/charts/morris.min.js')}}"></script>
<script src="{{asset('admins/asset/app-assets/vendors/js/extensions/unslider-min.js')}}"></script>
<script src="{{asset('admins/asset/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('admins/asset/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('admins/asset/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('admins/asset/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>