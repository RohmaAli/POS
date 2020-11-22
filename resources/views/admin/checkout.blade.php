<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Sales Products</title>
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
    <style>
    option { 
    background-color: color; 
    border-radius: value; 
    font-size: value 
}
    </style>

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
                    <li><a href="{{route('customerDetail')}}" key="t-add-product">Customer Detail</a></li>
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
            <div class="row">
                
            </div>
            <div class="main-content">
                
                <div class="page-content">
                    <div class="container-fluid">
                    

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">checkout</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">checkout</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                        <div class="table-responsive">
<table class="table table-centered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart->items as $item)
                                                <tr>
                                                   <td>{{$item['item']['title']}}</td>
                                                   <td>{{$item['qty']}}</td>
                                                   <td>{{$item['price']}}</td>
                                                   </tr>
                                            @endforeach
                                        </tbody>

                                        </table>
</div>
                                        <form action="{{route('amountRecieved')}}" method= "post">
                                   @csrf
                                   <div class="form-group">
                                                        <label for="productname">Sub Total</label> :
                                                        <input id="productname" name="subtotal" type="text" class="form-control" value="{{$subtotal}}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="productname">Discount</label> :
                                                        <input id="productname" name="discount" type="text" class="form-control" value="{{$discount}}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="productname">Total</label> :
                                                        <input id="productname" name="total" type="text" class="form-control" value="{{$total}}" readonly>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="discount">payment Recived</label>
                                                        <input id="discount" name="payment" type="number" class="form-control" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button name="checkout" type="submit" value="2" class="form-control btn btn-success">checkout</button>
                                                    </div>

                                                    <input type="hidden" name="cid" value="{{$customerID}}">
                                                    
                                   </form>
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>  <!-- End Page-content -->
            
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
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
