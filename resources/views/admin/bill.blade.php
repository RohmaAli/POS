<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Bill details</title>
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
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo.svg" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-light.svg" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="19">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

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
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-store"></i>
                    <span key="t-ecommerce">Ecommerce</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('viewProducts')}}" key="t-add-product">Add Product</a></li>
                    <li><a href="{{route('purchase')}}" key="t-orders">Purchasing</a></li>
                    <li><a href="{{route('viewSale')}}" key="t-add-product">Sales</a></li>
                    <li><a href="/views/vertical/ecommerce-products.blade.php" key="t-products">Products</a></li>
                    <li><a href="ecommerce-product-detail.html" key="t-product-detail">Product Detail</a></li>
                    <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li>
                    <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                    <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                    <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-receipt"></i>
                    <span key="t-invoices">Invoices</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                    <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                </ul>
            </li>


            <li class="menu-title" key="t-pages">Pages</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-user-circle"></i>
                    <span key="t-authentication">Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="auth-login.html" key="t-login">Login</a></li>
                    <li><a href="auth-register.html" key="t-register">Register</a></li>
                    <li><a href="auth-recoverpw.html" key="t-recover-password">Recover Password</a></li>
                    <li><a href="auth-lock-screen.html" key="t-lock-screen">Lock Screen</a></li>
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
                                    <h4 class="mb-0 font-size-18">Bill Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Add Product</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
           
            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Customer Information</h4>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control" readonly value={{$customer->name}}>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input id="phone" type="number" class="form-control" readonly value={{$customer->phone}}>
                                        </div>
                                        <div class="form-group">
                                            <label for="cnic">Cnic</label>
                                            <input id="cnic" type="number" class="form-control" readonly value={{$customer->cnic}}>
                                        </div>
        
                                        <!-- <form action="{{route('store')}}" method="post"> -->
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                <div class="table-responsive">
                                            <table class="table table-centered table-nowrap">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            Product ID
                                                        </th>
                                                        <th>Product Name</th>
                                                        <th>Product Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{$product->id}}</td>
                                                        <td>{{$product->title}}</td>
                                                        <td>{{$product->sale_price}}</td>
                                                    </tr>

                                                @endforeach    
                                                </tbody>
                                            </table>
                                        </div>
                                        <form action="{{route('payBill')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="customerID" value={{$customer->id}}>
                                        <div class="form-group">
                                                        <label for="productname">Sub Total</label>
                                                        <input id="productname" name="subtotal" type="text" class="form-control" placeholder={{$subTotal}} readonly value="{{$subTotal}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="discount">Discount</label>
                                                        <input id="discount" name="discount" type="text" class="form-control" placeholder={{$discount}} readonly value={{$discount}}>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="total">Total</label>
                                                        <input id="total" name="total" type="text" class="form-control" placeholder={{$total}} readonly value={{$total}}>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Payment recieved</label>
                                                        <input id="price" name="recieve" type="number" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        @foreach($products as $product)
                                                       <input type="hidden" name="products[]" value="{{$product->id}}">
                                                       @endforeach
                                                        <button type="submit" name="pay" class="form-control btn btn-success">Pay</button>
                                                        <!-- <input  name="pay" type="button" class="form-control btn btn-success"  > -->
                                                    </div>

                                        </form>
                                                    
                                                </div>
        
                                        
                                            </div>
        
                                        <!-- </form> -->
        
                                    </div>
                                </div>

                                <!-- <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Product Images</h4>

                                        <form action="https://themesbrand.com/" method="post" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
            
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                </div>
                                                
                                                <h4>Drop files here or click to upload.</h4>
                                            </div>
                                        </form>
                                    </div>

                                </div>  -->
                                <!-- end card-->
        
                            </div>
                        </div>
                        <!-- end row -->

        
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

        <!-- Right bar overlay-->
        <!-- <div class="rightbar-overlay"></div> -->

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

        <script>
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        </script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 06:55:50 GMT -->
</html>
