<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Report</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

        <!-- select2 css -->
        <link href="{{asset('libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="{{asset('libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

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
                               
                                <a href="{{url('/admin')}}" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/logo-light.svg')}}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="19">
                                    </span>
                                </a>
                            </div>
                        <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">                               
                            </button>                           
                        </div>
                    </div>

                </div>
            </header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-store"></i>
                    <span key="t-ecommerce">Ecommerce</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('viewSales')}}" key="t-add-product">Sales</a></li>
                                        <li><a href="{{route('viewProducts')}}" key="t-add-product">Products</a></li>
                                        <li><a href="{{route('viewSizes')}}" key="t-add-product">Sizes</a></li>
                                        <li><a href="{{route('viewWeights')}}" key="t-add-product">Weights</a></li>
                                        <li><a href="{{route('viewCustomers')}}" key="t-add-product">Customers</a></li>
                                        <li><a href="{{route('viewDailyExpense')}}" key="t-add-product">Daily Expense</a></li>

                                        <!-- <li><a href="{{route('purchase')}}" key="t-orders">Purchasing</a></li> -->
                                        <li><a href="{{route('viewReport')}}" key="t-add-product">Report</a></li>
                                        <!-- <li><a href="{{route('products')}}" key="t-products">Products</a></li> -->
                                        <!-- <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li> -->
                                       
                                    </ul>
            </li>

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
                                    <h4 class="mb-0 font-size-18">Report</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Report</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
           
                        <div class="row">
                                <!-- <div class="col-xl-4">
                            
                                    
                                </div> -->
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">No. of Products Sold</p>
                                                            <h4 class="mb-0">{{$totalQty}}</h4>
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
                                        <div class="col-md-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">Total Amount</p>
                                                            <h4 class="mb-0">{{$total_amount}} PKR/-</h4>
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
                                        <div class="col-md-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">Amount Recieved</p>
                                                            <h4 class="mb-0">{{$total_amount_recieved }} PKR/-</h4>
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
                                        <div class="col-md-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">Amount Credit</p>
                                                            <h4 class="mb-0">{{$amount_credit}} PKR/-</h4>
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
                            @foreach($allSales as $sale)
                            
                            <hr>
                            <div class="row">
                            
                                <div class="col-md-4">
                                <p> sale id: {{$sale->id}}</p>
                                </div>
                                <div class="col-md-4">
                                <p>date & time : <b>{{$sale->created_at}}</b></p>
                                </div>
                                <div class="col-md-4">
                                @php
                                $customer = DB::table('customers')->where('id', $sale->user_id)->get()
                                @endphp
                                <p> customer : <b>{{$customer->first()->name}}</b></p>
                                </div>
                                

                            </div> <!--end row-->
                            <hr>

                            <div class="row">
                            
                                <div class="col-md-4">
                                @foreach($sale->products as $product)
                                <p>{{$product->title}}</p>
                                
                                @endforeach
                                </div>
                                <div class="col-md-4">
                                @foreach($sale->products as $product)
                                
                                <p>Price: <b>{{$product->sale_price}}</b></p>
                                @endforeach
                                </div>
                                <div class="col-md-4">
                                @php
                                   $pivotData = DB::table('product_sale')->where('sale_id', $sale->id)->get()
                                @endphp
                                @foreach($pivotData as $p)
                                    <p>Qty : <b>{{$p->quantity_sold}}</b></p> 
                                @endforeach
                                </div>
                            </div> <!--end row-->
                            <div class="row">
                                <div class="col-md-3">
                                <p>subtotal : <b>{{$sale->subtotal}} pkr/-</b></p>
                                <p>discount : <b>{{$sale->discount}} pkr/-</b></p>
                                <p>total : <b>{{$sale->total}} pkr/-</b></p>
                                <p>remaining : <b>{{$sale->remaning}} pkr/-</b></p>
                                </div>
                                <div class="col-md-3">
                                
                                </div>
                                <div class="col-md-3">
                                
                                </div>
                                <div class="col-md-3">

                                </div>

                            </div> <!--end row-->
                                


                               
                                
                                


                                
                                
                                
                                



                                
                                <hr>    

                            @endforeach

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->               
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        </div>
        <!-- /Right-bar -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- select 2 plugin -->
        <script src="assets/libs/select2/js/select2.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/ecommerce-select2.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/pages/dashboard.init.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script>
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        </script>

    </body>

</html>
