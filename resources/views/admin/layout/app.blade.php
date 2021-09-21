<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>{{config('app.name')}}</title>
<link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.png ')}}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
<!-- END: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-chat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-chat-list.css')}}">
<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
<!-- END: Page CSS-->
<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.20/JsBarcode.all.min.js"></script>

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
<!-- END: Custom CSS-->
<script src="https://use.fontawesome.com/d4bd60efc3.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .fake{
        opacity: 0;
    }
</style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
<div class="navbar-container d-flex content">
<div class="bookmark-wrapper d-flex align-items-center">
    <ul  class="nav navbar-nav align-items-center ml-auto">
    <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="user-nav d-sm-flex d-none"><span class="avatar"><img class="round" 
            @if(Auth::user()->logo != null) src="{{ asset('images/'.Auth::user()->logo)}}" @else src="{{ asset('images/logos/abc.png') }}" @endif
              alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></div>
        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span><span class="user-status">Admin</span></div>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="#"><i class="fa fa-user-o mr-50" aria-hidden="true"></i>Profile</a>
        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-power-off mr-50" aria-hidden="true"></i> Logout</a>
        </div>
        </li>
    </ul>
</div>
<ul class="nav navbar-nav align-items-center ml-auto">
 

{{-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="fa fa-search" aria-hidden="true"></i></a>
<div class="search-input">
<div class="search-input-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
<form action="#" method="post" class="search_form">
    @csrf
<input class="form-control input" name="data" type="text" placeholder="Explore Masal..." tabindex="-1" data-search="search">
</form>
<div class="search-input-close"><i class="fa fa-times" aria-hidden="true"></i></div>
</div>
</li> --}}

<li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"> <i class="fa fa-bell" style="color: #7367F0;" aria-hidden="true"></i>
<span class="badge badge-pill badge-danger badge-up">5</span> </a>
<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">

<li class="dropdown-menu-header">
<div class="dropdown-header d-flex">
<h4 class="notification-title mb-0 mr-auto">Chats</h4>
<div class="badge badge-pill badge-light-primary">6 New</div>
</div>
</li>
<li class="scrollable-container media-list">
<a class="d-flex" href="#">
<div class="media d-flex align-items-start">
<div class="media-left">
<div class=""><img src="{{ asset('app-assets/images/portrait/small/chat.png')}}" alt="avatar" width="32" height="32"></div>
</div>
<div class="media-body">
<p class="media-heading"><span class="font-weight-bolder">Chat Modals</span>
</div>
</div>
</a>
</li>
</ul>
</li>




</ul>
</div>
</nav>

<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
<div class="navbar-header">
<ul class="nav navbar-nav flex-row">
<li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('adminDashboard') }}">
  
     <span class="brand-logo">
        <img src="{{ asset('app-assets/images/logo/logo.png')}}" >      
    </span> 
<h2 class="brand-text">{{config('app.name')}}</h2>
</a></li>
<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
</ul>
</div>
<div class="shadow-bottom"></div>
<div class="main-menu-content">
<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('adminDashboard') }}"><i class="fa fa-home" style="color: #8c4fec;" aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a></li>
<li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span>
</li>



<li class=" nav-item"><a class="d-flex align-items-center" href="/product"><i class="fa fa-flag" style="color: #8c4fec;" aria-hidden="true"></i>
    <span class="menu-title text-truncate" data-i18n="Calendar">Categories</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="/product"><i class="fa fa-flag-checkered" style="color: #8c4fec;" aria-hidden="true"></i>
    <span class="menu-title text-truncate" data-i18n="Calendar">Sub Categories</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="/product"><i class="fa fa-th-large" style="color: #8c4fec;" aria-hidden="true"></i>
    <span class="menu-title text-truncate" data-i18n="Calendar">Products</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="/product"><i class="fa fa-car" style="color: #8c4fec;" aria-hidden="true"></i>
    <span class="menu-title text-truncate" data-i18n="Calendar">Cars</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="/product"><i class="fa fa-industry" style="color: #8c4fec;" aria-hidden="true"></i>
    <span class="menu-title text-truncate" data-i18n="Calendar">Companies</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="/product"><i class="fa fa-modx" style="color: #8c4fec;" aria-hidden="true"></i>
    <span class="menu-title text-truncate" data-i18n="Calendar">Models</span></a>
</li>

{{-- <li  class=" dropdown nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-th" style="color: #8c4fec;" aria-hidden="true"></i>
    <span class="menu-title text-truncate" data-i18n="eCommerce">Product Assets</span></a>
    <ul class="menu-content dropdown-content">
    <li><a class="d-flex align-items-center" href="#"><i class="fa fa-plus" style="color: #8c4fec;" aria-hidden="true"></i>
        <span class="menu-item" data-i18n="Shop">Add New Product</span></a>
    </li>
    <li><a class="d-flex align-items-center" href="#"><i class="fa fa-circle-thin" style="color: #8c4fec;" aria-hidden="true"></i>
        <span class="menu-item" data-i18n="Details">Manage Sizes</span></a>
    </li>
    </ul>
    </li> --}}
</ul>

<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="margin-top:100%;">

    <li style="display: none;" id="last_nav"><a class="d-flex align-items-center" target="_blank" id="prev_page" href="#"><i class="fa fa-bandcamp" style="color: #8c4fec;" aria-hidden="true"></i><span class="menu-item" data-i18n="Checkout">Preview Page</span></a>
    </li>

</ul>

</div>
</div>
<!-- END: Main Menu-->

@yield('content')


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
<p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{ Carbon\Carbon::now()->year }}<span class="d-none d-sm-inline-block">, All rights Reserved</span></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('js/helpers/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ asset('app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->

<script src="{{ asset('app-assets/js/scripts/pages/app-chat.js') }}"></script>
<!-- END: Page JS-->


<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

{{-- <script>
        var len = $('.input').val().length;
        $(document).on('keypress',function(e) {
    if(e.which == 13 && len > 1) {
        $(".search_form").submit();
    }
});
       
</script> --}}


</body>
<!-- END: Body-->

</html>