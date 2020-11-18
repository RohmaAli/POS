<?php

namespace App\Http\Controllers;
use App\Size;
use App\Weight;
use App\Product;
use App\Purchase;
use App\Sale;
use App\User;
use App\Customer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        $sales = Sale::all();
        $totalSales = $sales->count();
        $sale = $sales->last();
        $products = Product::all();
        $totalProducts = $products->count();
        
        return view('vertical.index', compact('sale', 'totalSales', 'totalProducts'));
    }

    public function checkCustomer(Request $request)
    {
        // return $request;
        if($request->existing != null)
        {
            return view('admin.existingCustomer');
        }
        elseif($request->new != null)
        {
            return view('admin.createCustomer');
        }
    }

    public function createNewCustomer(Request $request)
    {
        $customer = User::where('cnic', '=', $request->cnic)->get()->first();
        if($customer)
        {
            return "CNIC already exists, please click on 'existing
            customer' button or enter new CNIC";
        }
        else{
            $customer = new User();
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->cnic = $request->cnic;
            $customer->save();
            $products = Product::all();
            return view('admin.sales', compact('products', 'customer'));
        }
       
    }

    public function existingCustomer(Request $request)
    {
        $customer = User::where('cnic', '=', $request->cnic)->get()->first();
        if($customer)
        {
            $products = Product::all();
            return view('admin.sales', compact('products', 'customer'));
        }
        else
        {
            return redirect()->route('admin');
        }
    }

    public function viewProducts()
    {
        
        $sizes = Size::all();
        $products = Product::all();
        return view('vertical.products', compact('sizes','products'));

    }
    public function productActions(Request $request) //new
    {
        // return $request;
        if($request->addProduct != null)
        {
            return view('admin.addProducts');
        }
        elseif($request->edit != null)
        {
            $sizes = Size::all();
            $weights = Weight::all();
            $product = Product::find($request->edit);
            return view('admin.editProduct', compact('product', 'sizes', 'weights'));
        }
        elseif($request->delete != null)
        {
            $product = Product::find($request->edit);
            $product->delete();
            return redirect()->route('viewProducts');

        }

    }

    public function viewWeights() //new
    {
        $weights = Weight::all();
        return view('admin.viewWeights', compact('weights'));
    }

    public function storeWeights(Request $request)
    {
        $weight = new Weight();
        $weight->total_weight = $request->total_weight;
        $weight->unit = $request->unit;
        $weight->save();
        return redirect()->route('viewWeights');
    }
    public function weightActions(Request $request)  //new
    {
        if($request->addWeight != null)
        {
            return view('admin.addWeight');
        }
        elseif($request->edit != null)
        {
            $weight = Weight::find($request->edit);
            return view('admin.editWeight', compact('weight'));
        }
        elseif($request->delete != null)
        {
            $weight = Weight::find($request->delete);
            $weight->delete();
            return redirect()->route('viewWeights');

        }
    }
    public function editWeight(Request $request) //new
    {
       $weight = Weight::find($request->editWeight);
       $weight->total_weight = $request->total_weight;
       $weight->unit = $request->unit;
       $weight->save();
       return redirect()->route('viewWeights');

    }
    public function viewSizes() //new
    {
        $sizes = Size::all();
        return view('admin.viewSizes', compact('sizes'));
    }

    public function sizeActions(Request $request)  //new
    {
        if($request->addSize != null)
        {
            return view('admin.addSizes');
        }
        elseif($request->edit != null)
        {
            $size = Size::find($request->edit);
            return view('admin.editSize', compact('size'));
        }
        elseif($request->delete != null)
        {
            $size = Size::find($request->delete);
            $size->delete();
            return redirect()->route('viewSizes');

        }
    }
    public function editSizes(Request $request) //new
    {
       $size = Size::find($request->editSize);
       $size->title = $request->sizeTitle;
       $size->width = $request->width;
       $size->length = $request->length;
       $size->save();
       return redirect()->route('viewSizes');

    }

     public function storeSizes(Request $request) //new
     {
        $size = new Size();
        $size->title = $request->sizeTitle;
        $size->width = $request->width;
        $size->length = $request->length;
        $size->save();
        return redirect()->route('viewSizes');
     }

     public function viewCustomers() //new
     {
        $customers = Customer::all();
        return view('admin.viewCustomers',compact('customers'));
     }

     public function customerActions(Request $request)
     {
        if($request->addCustomer != null)
        {
            return view('admin.addCustomer');
        }
        elseif($request->edit != null)
        {
            $customer = Customer::find($request->edit);
            return view('admin.editCustomer', compact('customer'));
        }
        elseif($request->delete != null)
        {
            $customer = Customer::find($request->delete);
            $customer->delete();
            return redirect()->route('viewCustomers');

        }
        elseif($request->view != null)
        {
            $customer = Customer::find($request->delete);
            return view('admin.customerDetail', compact('customer'));

        }
     }
     public function storeCustomer(Request $request)
     {
         $customer = new Customer();
         $customer->name = $request->name;
         $customer->phone = $request->phone;
         $customer->save();
         return redirect()->route('viewCustomers');
     }
     public function editCustomer(Request $request)
     {
         $customer = Customer::find($request->editCustomer);
         $customer->name = $request->name;
         $customer->phone = $request->phone;
         $customer->save();
         return redirect()->route('viewCustomers');
     }

    
    // public function StoreProducts(Request $request)
    // {
    //     $product = new Product();
    //     $product->title = $request->ProductTitle;
    //     $product->sale_price = $request->price;
    //     $product->save();
    //      $size = new Size();
    //      $size->title = $request->sizeTitle;
    //      $size->width = $request->width;
    //      $size->length = $request->length;
    //      $size->product_id = $product->id;
    //      $size->save();

    //      $weight = new Weight();
    //      $weight->unit = $request->unit;
    //      $weight->total_weight = $request->totalWeight;
    //      $weight->product_id = $product->id;
    //      $weight->save();
    //     return redirect()->route('viewProducts');
        
        //    return $request;
            // $product = new Product();
            // $product->title = $request->title;
            // $product->sale_price = $request->price;
            // $product->save();
            // foreach($request->size as $size)
            // {
            //     $size = Size::find($size);
            //     $size->product_id = $product->id;
            //     $size->save();
            // }
            // return view('admin.addProducts');
        
       
    // }
    // public function editProducts(Request $request)
    // {
    //     $product = Product::find($request->edit);
    //     $product->title = $request->ProductTitle;
    //     $product->sale_price = $request->price;
    //     $product->save();
    //     $size = Size::find($request->size);
    //     $size->product_id = $product->id;
    //     $size->save();
    //     $weight = Weight::find($request->weight);
    //     $weight->product_id = $product->id;
    //     $weight->save();

        //  $size = new Size();
        //  $size->title = $request->sizeTitle;
        //  $size->width = $request->width;
        //  $size->length = $request->length;
        //  $size->product_id = $product->id;
        //  $size->save();

        //  $weight = new Weight();
        //  $weight->unit = $request->unit;
        //  $weight->total_weight = $request->totalWeight;
        //  $weight->product_id = $product->id;
        //  $weight->save();
        // return redirect()->route('viewProducts');
        
      
       
    // }

    public function viewPurchasing()
    {
       $products = Product::all();
       return view('admin.purchasing', compact('products'));
       
    }
    public function viewSale()
    {
        $products = Product::all();
        return view('admin.sales', compact('products'));
    }

    public function calculateBill(Request $request)
    {
        $subTotal = 0;
        $customer = User::find($request->customerId);
        $discount = $request->discount;
        foreach($request->productIds as $product)
        {
            $product = Product::find($product);
            $subTotal = $subTotal + $product->sale_price;
        }
        
        foreach($request->productIds as $product)
        {
            $products[] = Product::find($product);         
        }
        $total = $subTotal - $request->discount;
        return view('admin.bill', compact('total', 'subTotal', 'discount', 'products', 'customer'));
    }

    public function payBill(Request $request)
    {
        $sale = new Sale();
        $sale->save();
        foreach($request->products as $product)
        {
            $product = Product::find($product);
            $product->quantity_sold = $product->quantity_sold + 1;
            $product->save();
            $product->sales()->attach($sale);
        }
        $sale->discount = $request->discount;
        $sale->subtotal = $request->subtotal;
        $sale->total = $request->total;
        $sale->paid_amount = $request->recieve;
        $sale->remaning = $sale->total - $request->recieve;
        $sale->user_id = $request->customerID;
        $sale->save();
        $customer = User::find($request->customerID);
        $sales = $customer->sales;
        $unpaid = 0;
        foreach($sales as $sale)
        {
            $unpaid = $unpaid + $sale->remaning;
        }
        $customer->unpaid_balance = $unpaid;
        $customer->save();
        return redirect()->route('admin');

    }

    public function viewCustomerDetail()
    {
        return view('admin.viewCustomerDetails');
    }

    public function customerDetail(Request $request)
    {
        $customer = User::where('cnic', '=', $request->cnic)->get()->first();
        $sales = $customer->sales->sortBy('updated_at');
        $unpaid = $customer->unpaid_balance;
        return view('admin.customerDetails', compact('customer', 'sales', 'unpaid'));
    }
    public function payRemainingBalance(Request $request)
    {
        $customer = User::find($request->pay);
        if($request->payAmount >= $customer->unpaid_balance)
        {
        $customer->unpaid_balance = $customer->unpaid_balance - $request->payAmount;
        $customer->save();
        return redirect()->route('admin');
        }
        else
        {
            return "Invalid amount";
        }
        
    }

    // public function viewProducts()
    // {
    //     $products = Product::all();
    //     return view('admin.products', compact('products'));
    // }
}