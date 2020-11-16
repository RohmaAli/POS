<?php

namespace App\Http\Controllers;
use App\Size;
use App\Weight;
use App\Product;
use App\Purchase;
use App\Sale;
use App\User;
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

    public function viewStoreProducts()
    {
        
        $sizes = Size::all();
        // return view('admin.addProducts', compact('sizes'));
        return view('vertical.ecommerce-add-product', compact('sizes'));

    }
    
    public function StoreProducts(Request $request)
    {
        $product = new Product();
        $product->title = $request->ProductTitle;
        $product->sale_price = $request->price;
        $product->save();
         $size = new Size();
         $size->title = $request->sizeTitle;
         $size->width = $request->width;
         $size->length = $request->length;
         $size->product_id = $product->id;
         $size->save();

         $weight = new Weight();
         $weight->unit = $request->unit;
         $weight->total_weight = $request->totalWeight;
         $weight->product_id = $product->id;
         $weight->save();
        return redirect()->route('viewProducts');
        
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
        
       
    }

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

    public function viewProducts()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }
}