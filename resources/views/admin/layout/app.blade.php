<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/bordered-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/admin.css')}}">
    <!-- END: Custom CSS-->


    <title>{{config('app.name')}}</title>
</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul  class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                    <span class="avatar"><img class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">John Doe</span><span class="user-status">Admin</span></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="mr-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="mr-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="mr-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="mr-50" data-feather="message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings.html"><i class="mr-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="mr-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="mr-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="page-auth-login-v2.html"><i class="mr-50" data-feather="power"></i> Logout</a>
                </div>
            </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
         
        
        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
        <div class="search-input">
        <div class="search-input-icon"><i data-feather="search"></i></div>
        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
        <div class="search-input-close"><i data-feather="x"></i></div>
        <ul class="search-list search-list-main"></ul>
        </div>
        </li>
        <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
        <li class="dropdown-menu-header">
        <div class="dropdown-header d-flex">
        <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
        <div class="badge badge-pill badge-light-primary">6 New</div>
        </div>
        </li>
        <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
        <div class="media d-flex align-items-start">
        <div class="media-left">
        <div class="avatar"><img src="app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
        </div>
        <div class="media-body">
        <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
        </div>
        </div>
        </a><a class="d-flex" href="javascript:void(0)">
        <div class="media d-flex align-items-start">
        <div class="media-left">
        <div class="avatar"><img src="app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
        </div>
        <div class="media-body">
        <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
        </div>
        </div>
        </a><a class="d-flex" href="javascript:void(0)">
        <div class="media d-flex align-items-start">
        <div class="media-left">
        <div class="avatar bg-light-danger">
        <div class="avatar-content">MD</div>
        </div>
        </div>
        <div class="media-body">
        <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
        </div>
        </div>
        </a>
        <div class="media d-flex align-items-center">
        <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
        <div class="custom-control custom-control-primary custom-switch">
        <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
        <label class="custom-control-label" for="systemNotification"></label>
        </div>
        </div><a class="d-flex" href="javascript:void(0)">
        <div class="media d-flex align-items-start">
        <div class="media-left">
        <div class="avatar bg-light-danger">
        <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
        </div>
        </div>
        <div class="media-body">
        <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
        </div>
        </div>
        </a><a class="d-flex" href="javascript:void(0)">
        <div class="media d-flex align-items-start">
        <div class="media-left">
        <div class="avatar bg-light-success">
        <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
        </div>
        </div>
        <div class="media-body">
        <p class="media-heading"><span class="font-weight-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
        </div>
        </div>
        </a><a class="d-flex" href="javascript:void(0)">
        <div class="media d-flex align-items-start">
        <div class="media-left">
        <div class="avatar bg-light-warning">
        <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
        </div>
        </div>
        <div class="media-body">
        <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
        </div>
        </div>
        </a>
        </li>
        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
        </ul>
        </li>
        
        </ul>
        </div>
        </nav>



        
    
        <!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
      
         <span class="brand-logo">
            <img src="Asset 1.png" >
    </span> 
    <h2 class="brand-text">Masal</h2>
    </a></li>
    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
    </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a></li>
    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="order.html"><i data-feather="mail" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="Email">Orders</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i data-feather="message-square" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="Chat">Chat</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="stockist-request.html"><i data-feather="check-square" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="Todo">Retailer Request</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="stockist.html"><i data-feather="calendar" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="Calendar">Manage Retailer</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="product.html"><i data-feather="grid" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="Calendar">Product</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="save" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="eCommerce">Edit Main Page</span></a>
    <ul class="menu-content">
    <li><a class="d-flex align-items-center" href="app-ecommerce-shop.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop"> Home Page</span></a>
    </li>
    <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Details">Footer</span></a>
    </li>
    <li><a class="d-flex align-items-center" href="manage-realbride.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Wish List">Real Bride Page</span></a>
    </li>
    <li><a class="d-flex align-items-center" href="manage-email-temp.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Checkout">Email Templates</span></a>
    </li>
    <li><a class="d-flex align-items-center" href="manage-sales-tags.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Checkout">Sales Tag</span></a>
    </li>
    <li><a class="d-flex align-items-center" href="real-request-list.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Checkout">Real Bride Requests </span></a>
    </li>
    <li><a class="d-flex align-items-center" href="menu.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Checkout">Menu Items</span></a>
    </li>
    <li><a class="d-flex align-items-center" href="custompage.html"><i data-feather="circle"></i><span class="menu-item" data-i18n="Checkout">Custom Page</span></a>
    </li>
    
    </ul>
    </li>
    <li  class=" dropdown nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="eCommerce">Product Assets</span></a>
        <ul class="menu-content dropdown-content">
        <li><a class="d-flex align-items-center" href="add-product.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Shop">Add New Product</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="size.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Details">Manage Sizes</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="additional-changes.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Additional Changes</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="color-swatches.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Manage Swatches</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="manage-category.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Manage Category </span></a>
        </li>
        <li><a class="d-flex align-items-center" href="manage-Silhouette.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Manage silhouette</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="manage-neckline.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Manage Neckline</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="manage-fabric.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Manage Fabric</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="manage-sleeve.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Manage Sleeve</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="outofstock.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Out of Stock</span></a>
        </li>
        <li><a class="d-flex align-items-center" href="top-sells.html"><i data-feather="circle" style="color: #6610F2;"></i><span class="menu-item" data-i18n="Wish List">Top Sells</span></a>
        </li>
    
        </ul>
        </li>
    
    <li class=" nav-item"><a class="d-flex align-items-center" href="contact-request.html"><i data-feather="file-text" style="color:  #6610F2;"></i><span class="menu-title text-truncate" data-i18n="Pages">Contact Request</span></a>
    
    </li>
    
    
    
    
    </ul>
    </div>
    </div>
    <!-- END: Main Menu-->

    @yield('content')
</body>
</html>