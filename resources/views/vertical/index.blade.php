<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>   
    <body data-sidebar="dark">
        
            <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
            <div id="layout-wrapper">           
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                               
                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-light.svg" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="19">
                                    </span>
                                </a>
                            </div>
                            <!-- App Search-->              
                        </div>                       
                    </div>
                </header>

<!-- ========== Left Sidebar Start ========== -->
                <div class="vertical-menu">

                    <div data-simplebar class="h-100">

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            <!-- Left Menu Start -->
                            <ul class="metismenu list-unstyled" >
            <li class="menu-title" key="t-menu">Menu</li>


            <li>
                <a>
                    <i class="bx bx-store"></i>
                    <span >Ecommerce</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('viewSales')}}" key="t-add-product">Sales</a></li>
                    <li><a href="{{route('viewProducts')}}" key="t-add-product">Products</a></li>
                    <li><a href="{{route('viewSizes')}}" key="t-add-product">Sizes</a></li>
                    <li><a href="{{route('viewWeights')}}" key="t-add-product">Weights</a></li>
                    <li><a href="{{route('viewCustomers')}}" key="t-add-product">Customers</a></li>
                    <li><a href="{{route('viewDailyExpense')}}" key="t-add-product">Daily Expense</a></li>

                    <!-- <li><a href="{{route('purchase')}}" key="t-orders">Purchasing</a></li> -->
                    <!-- <li><a href="{{route('customerDetail')}}" key="t-add-product">Customer Detail</a></li> -->
                    <!-- <li><a href="{{route('products')}}" key="t-products">Products</a></li> -->
                    <!-- <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li> -->
                   
                </ul>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
                <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-flex align-items-center justify-content-between">
                                        <h4 class="mb-0 font-size-18">Dashboard</h4>

                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->

                            <div class="row">
                                <!-- <div class="col-xl-4">
                            
                                    
                                </div> -->
                                <div class="col-xl-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">Total Sales</p>
                                                            <h4 class="mb-0" style="color:green">{{$totalSales}} pkr/-</h4>
                                                        </div>

                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-copy-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">Amount Recieved</p>
                                                            <h4 class="mb-0" style="color:green">{{$amountRecieved}} pkr/-</h4>
                                                        </div>

                                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">Amount Credit</p>
                                                            <h4 class="mb-0" style="color:green">{{$amountCredit}} pkr/-</h4>
                                                        </div>

                                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div>
                            <!-- end row -->
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Latest Transaction</h4>
                                            <div class="table-responsive">
                                                <table class="table table-centered table-nowrap mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            
                                                            <th>Sale ID</th>
                                                            <th>Date</th>
                                                            <th>Subtotal(PKR)</th>
                                                            
                                                            <th>Discount(PKR)</th>
                                                            <th>Total(PKR)</th>
                                                            <th>Recieved(PKR)</th>
                                                            <th>Credit(PKR)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if($sale)
                                                        <tr>
                                                            <td>{{$sale->id}}</a> </td>
                                                            <td>{{$sale->created_at}}</td>
                                                            <td>{{$sale->subtotal}}</td>
                                                            <td>
                                                                {{$sale->discount}}
                                                                <!-- <span class="badge badge-pill badge-soft-success font-size-12">Paid</span> -->
                                                            </td>
                                                            <td>    
                                                                {{$sale->total}}
                                                            </td>
                                                            
                                                            <td>
                                                            {{$sale->paid_amount}}
                                                                <!-- <i class="fab fa-cc-mastercard mr-1"></i> Mastercard -->
                                                            </td>
                                                            <td>
                                                            {{$sale->remaning}}
                                                            </td>
                                                            
                                                        </tr> 
                                                    @endif                                            
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- container-fluid -->
                    </div>
                    <!-- End Page-content -->

                   
                    
                </div>
<!-- end main content-->

            </div>
<!-- END layout-wrapper -->
       
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- <script src="assets/js/pages/dashboard.init.js"></script> -->

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>


</html>

