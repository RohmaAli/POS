<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Add Product</title>
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
                    <li><a href="{{route('viewProducts')}}" key="t-add-product">Products</a></li>
                    <li><a href="{{route('purchase')}}" key="t-orders">Purchasing</a></li>
                    <li><a href="{{route('customerDetail')}}" key="t-add-product">Customer Detail</a></li>
                    <li><a href="{{route('products')}}" key="t-products">Products</a></li>
                    <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li>
                   
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
                                    <h4 class="mb-0 font-size-18">Add Product</h4>

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
        
                                        <h4 class="card-title">Basic Information</h4>
                                        <p class="card-title-desc">Fill all information below</p>
        
                                        <form action="{{route('actions')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="productname">Product Name</label>
                                                        <input id="productname" name="ProductTitle" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Price</label>
                                                        <input id="price" name="price" type="text" class="form-control">
                                                    </div>
                                                    <!-- <div class="form-group">
                                                    <label for="size"> <b>Enter Size Detail</b> </label><br>
                                                    <label id="size" for="size-title">Title </label><br>
                                                    <input id="size-title" name="sizeTitle" type="text" class="form-control" placeholder="e.g(small/medium/large..)">
                                                    <br>   
                                                    <label id="size" for="width">Width</label><br>
                                                    <input id="width" name="width" type="text" class="form-control" placeholder="">
                                                    <br>  
                                                    <label id="size" for="length">Length</label><br>
                                                    <input id="length" name="length" type="text" class="form-control" placeholder="">
                                                    <br>  
                                                    </div> -->

                                                    <!-- <div class="form-group">
                                                    <label for="weight"> <b>Enter Weight Detail</b> </label><br>
                                                    <label id="weight" for="weight-unit">Unit </label><br>
                                                    <input id="weight-unit" name="unit" type="text" class="form-control" placeholder="e.g(kg/g/mg..)">
                                                    <br>   
                                                    <label for="total-weight">Net weight</label><br>
                                                    <input id="total-weight" name="totalWeight" type="text" class="form-control" placeholder="">
                                                  
                                                    </div> -->
                                                    <div class="form-group">
                                                    <label for="size">Select size:</label>
                                                    <select name="size" id="size">
                                                    @foreach($sizes as $size)
                                                        <option value="{{$size->id}}">{{$size->title}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="weight">Select Weight:</label>
                                                    <select name="weight" id="weight">
                                                    @foreach($weights as $weight)
                                                        <option value="{{$weight->id}}">{{$weight->total_weight}}{{$weight->unit}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>

                                                    
                                                </div>
        
                                             
                                            </div>
        
                                            <button type="submit" name="addProduct" class="btn btn-primary mr-1 waves-effect waves-light"><i class="fa fa-plus"></i> Add Product</button>
                                        <br>
                                       
                    </form>
        
                                    </div>
                                </div>
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

