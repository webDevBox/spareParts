@extends('admin.layout.app')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
    <div class="row match-height">
    <!-- Medal Card -->
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card earnings-card">
            <div class="card-body">
            <div class="row">
                <div class="col-6" style="text-align: center;">
                    <h4 class="card-title mb-1">Earnings</h4>
                    <div class="font-small-2">This Month</div>
                    <h5 class="mb-1">$5</h5>
                    <p class="card-text text-muted font-small-2">
                        <span class="font-weight-bolder">7</span>
                    </p>
                </div>
                <div class="col-6">
                    <div id="earnings-chart"></div>
                    <input type="text" id="percent" value="9" style="display: none;">
                </div>
            </div>
            </div>
            </div>
    <!-- <div class="card card-congratulation-medal">
    <div class="card-body">
    <h5>Congratulations 🎉 John!</h5>
    <p class="card-text font-small-3">You have won gold medal</p>
    <h3 class="mb-75 mt-2 pt-50">
    <a href="javascript:void(0);">$48.9k</a>
    </h3>
    <button type="button" class="btn btn-primary">View Sales</button>
    <img src="app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" />
    </div>
    </div> -->
    </div>
    <!--/ Medal Card -->
    
    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
    <div class="card card-statistics">
    <div class="card-header">
    <h4 class="card-title">Statistics</h4>
    <div class="d-flex align-items-center">
    </div>
    </div>
    <div class="card-body statistics-body">
    <div class="row">
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
    <div class="media">
        <div class="avatar bg-light-primary mr-2">
            <div class="avatar-content">
                <i data-feather="trending-up" class="avatar-icon"></i>
            </div>
        </div>
        <div class="media-body my-auto">
            <h4 class="font-weight-bolder mb-0">9</h4>
            <p class="card-text font-small-3 mb-0">Sales</p>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
    <div class="media">
        <div class="avatar bg-light-info mr-2">
            <div class="avatar-content">
                <i data-feather="user" class="avatar-icon"></i>
            </div>
        </div>
        <div class="media-body my-auto">
            <h4 class="font-weight-bolder mb-0">9</h4>
            <p class="card-text font-small-3 mb-0">Customers</p>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
    <div class="media">
        <div class="avatar bg-light-danger mr-2">
            <div class="avatar-content">
                <i data-feather="box" class="avatar-icon"></i>
            </div>
        </div>
        <div class="media-body my-auto">
            <h4 class="font-weight-bolder mb-0">5</h4>
            <p class="card-text font-small-3 mb-0">Products</p>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
    <div class="media">
        <div class="avatar bg-light-success mr-2">
            <div class="avatar-content">
                <i data-feather="dollar-sign" class="avatar-icon"></i>
            </div>
        </div>
        <div class="media-body my-auto">
            <h4 class="font-weight-bolder mb-0">$5</h4>
            <p class="card-text font-small-3 mb-0">Revenue</p>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--/ Statistics Card -->
    </div>
    
    <div class="row match-height">
    <div class="col-lg-4 col-12">
    <div class="row match-height">
    <!-- Bar Chart - Orders -->
    <div class="col-lg-6 col-md-3 col-6">
    <a href="#">     
    <div class="card  text-center " > 
    <div class="card-body pb-50">
    <p style="margin-top: 20px;" >This Month’s Order</p> 
    <h2 class="font-weight-bolder mb-1" style="margin-top: 30px; color:#7367F0; color:#7367F0; color:#7367F0;" > 9 </h2>
    <!-- <div id="statistics-order-chart"></div> -->
    </div>
    </div>
    </a>
    </div>
    <!--/ Bar Chart - Orders -->
    
    <!-- Line Chart - Profit -->
    <div class="col-lg-6 col-md-3 col-6">
        <a href="#">
        <div class="card  text-center " >
        <div class="card-body pb-50">
        <p style="margin-top: 20px;" >Last Month’s Order</p> 
        <h2 class="font-weight-bolder mb-1" style="margin-top: 30px; color:#7367F0; color:#7367F0;" > 6 </h2>
        <!-- <div id="statistics-order-chart"></div> -->
        </div>
        </div>
        </a>
        </div>
    <!--/ Line Chart - Profit -->
    
    <!-- Earnings Card -->
    <div class="col-lg-6 col-md-3 col-6">
    <a href="#">    
    <div class="card earnings-card">
    <div class="card-body" >
    <div class="row">
        <div class="col-12 " style="text-align: center;">
            <p style="margin-top: px;">This Week's Orders</p>
            <h2 class="font-weight-bolder mb-1" style="margin-top: 20px; color:#7367F0;"> 9</h2>
        </div>
    </div>
    </div>
    </div>
    </a>
    </div>
    
    
    <div class="col-lg-6 col-md-3 col-6">
    <a href="#">    
    <div class="card earnings-card">
    <div class="card-body" >
    <div class="row">
        <div class="col-12 " style="text-align: center;">
            <p style="margin-top: px;">Today’s Orders</p>
            <h2 class="font-weight-bolder mb-1" style="margin-top: 20px; color:#7367F0;">54</h2>
        </div>
    </div>
    </div>
    </div>
    </a>
    </div>
  
    <!--/ Earnings Card -->
    </div>
    </div>
    
    <!-- Revenue Report Card -->
    <div class="col-lg-8 col-12">
    <div class="card card-revenue-budget">
    <div class="row mx-0">
    <div class="col-md-7 col-12 revenue-report-wrapper">
    <div class="d-sm-flex justify-content-between align-items-center mb-3">
    <h4 class="card-title mb-50 mb-sm-0">Graphical Statistics</h4>
    </div>
    <div id="revenue-report-chart"></div>
    <input type="text" id="order" value="3" style="display: none;">
    <input type="text" id="product" value="7" style="display: none;">
    <input type="text" id="visit" value="9" style="display: none;">
    <input type="text" id="customer" value="2" style="display: none;">
  
  
    <input type="text" id="this_year" value="9" style="display: none;">
    <input type="text" id="last_year" value="44" style="display: none;">
    <input type="text" id="previous_year" value="23" style="display: none;">
    </div>
    <span style="background: #F1F2F2; height:350px; width:10px;"></span>
    <div class="col-md-4 col-12 budget-wrapper">
      <div class="d-sm-flex justify-content-between align-items-center mb-3">
          <h4 class="card-title mb-50 mb-sm-0">Yearly Revenue</h4>
          </div>
    <div class="btn-group" style="zoom: 1.2;">
    <select  onchange="myFunction()" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown" id="yearer">
        <option class="dropdown-item" value="this" selected>  76 </option>
        <option class="dropdown-item" value="last"> 55 </option>
        <option class="dropdown-item" value="previous">9 </option>
    </select>
  
    </div>
    <h2 style="margin-top: 50px;" id="result">5</h2>
    </div>
  
  
    </div>
    </div>
    </div>
    <!--/ Revenue Report Card -->
    </div>
    

    </section>
    <!-- Dashboard Ecommerce ends -->
    
    </div>
    </div>
    </div>
  
 
@endsection