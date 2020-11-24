<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 06:55:47 GMT -->
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
/* table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
} */
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
                                    <h4 class="mb-0 font-size-18">Orders</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Orders</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                <center><h3><b>Products</b></h3></center>
                                    
               
                
                <!-- <a href="{{route('product.shoppingCart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Shopping cart
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : "" }}</span>
                </a> -->
                    <div class="table-responsive">
                                            <table class="table table-centered table-nowrap">
                                                <thead class="thead-light">
                                                    <tr>
                                                       
                                                        <th>Product ID</th>
                                                        <th>Product Name</th>
                                                        <th>Product Weight</th>
                                                        <th>Product Size</th>
                                                        <th>Product Price</th>
                                                        <th>Action</th>
                                                        <!-- <th>Quantity</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               @foreach($products as $product)
                                               <form action="{{route('product.addtocart',['id'=>$product->id])}}" method="post">
                @csrf
                                                    <tr>
                                                       
                                                        <td>{{$product->id}}</td>
                                                        <td>{{$product->title}}</td>
                                                        <td> 
                                                        
                                                        {{$product->weight->total_weight}}{{$product->weight->unit}}
                                                       
                                                        </td>
                                                        <td>
                                                       
                                                        <span style="color:green">size:<b>{{$product->size->title}}</b> </span> <b>|</b> <span style="color:orange">length:<b>{{$product->size->length}}</b> </span>
                                                           <b>|</b> <span style="color:blue">width:<b>{{$product->size->width}}</b> </span>                                                           
                                                       
                                                        </td>
                                                        <td>{{$product->sale_price}}</td>
                                                        <td><button type="submit" name="productid" class="btn btn-success" value="{{$product->id}}">Add to cart</button></td>
                                                        <!-- <td>
                                                            <a href="{{route('product.addtocart',['id'=>$product->id])}}" class="btn btn-success" role="button">Add To Cart</a>
                                                        </td> -->
                                                   
                                                    </tr>
                                                    </form>
                                               @endforeach
                                                </tbody>
                                            </table>
                                           
                    </div>

                
                                        
                                       
                                    </div>
                                </div>
                            </div> <!--end col-md-8-->
                            <div class="col-md-12">
                                <div class="card">
                                <center><h3><b>Shopping Cart</b></h3></center>
                                @if(Session::has('cart'))
                               
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart->items as $item)
                                                <tr>
                                                   <td>{{$item['item']['title']}}</td>
                                                   <td>{{$item['qty']}}</td>
                                                   <td>{{$item['price']}}</td>
                                                   <td>
                                                   <!-- <input type="hidden" > -->
                                                   @php
                                                        $itemId = $item['item']['id'];
                                                   @endphp
                                                   <a href="{{route('products.remove',['id' => $itemId])}}">remove 1</a>
                                                  
                                                   </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                       
                                    </table>
                                   <form action="{{route('products.total')}}" method= "post">
                                   @csrf
                                   <div class="form-group">
                                   <label for="" style="color:red">Select Customer</label>
                                        <select name="cid" class="selectpicker form-control" data-style="btn-success"> 
                                            @foreach($customers as $customer)
                                            <option name="cid" value="{{$customer->id}}">{{$customer->name}}</option> 
                                            @endforeach
                                        </select> 
                                                        <label for="productname">Sub Total</label> :
                                                        <input id="productname" name="subtotal" type="text" class="form-control" value="{{$cart->totalPrice}}" readonly placeholder="{{ Session::has('cart') ? Session::get('cart')->totalPrice : "" }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="discount">Enter Discount</label>
                                                        <input id="discount" name="discount" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label for="discount">Total</label> -->
                                                        <!-- <input id="discount" name="totalamount" type="number"  value="{{$total}}" readonly> -->
                                                        <button name="total" type="submit" value="1" class="form-control btn btn-primary">Pay Bill</button>

                                                    </div>
                                                    
                                                    <!-- <div class="form-group">
                                                    </div>
                                                    <div class="form-group">
                                                        <button name="checkout" type="submit" value="2" class="form-control btn btn-success">pay amount</button>
                                                    </div> -->
                                                    
                                   </form>
                                    
                                    
                                </div> <!--end table-responsive-->

                                @else
                                Cart is empty
                                @endif
                                
                                </div> <!--end card-->


                            </div> <!--end col-md-4-->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>  <!-- End Page-content -->
               

                <!-- Modal -->
                

                
               
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

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 06:55:47 GMT -->
</html>
