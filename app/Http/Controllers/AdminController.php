<?php

namespace App\Http\Controllers;
use App\Size;
use App\Weight;
use App\Product;
use App\Purchase;
use App\Sale;
use App\Cart;
use App\User;
use App\Customer;
use App\DailyExpense;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function view()
    {
        $totalSales = 0;
        $amountRecieved = 0;
        $amountCredit = 0;
        $sales = Sale::all();
        foreach($sales as $sale)
        {
            $totalSales = $totalSales + $sale->total;
        }
        foreach($sales as $sale)
        {
            $amountRecieved = $amountRecieved + $sale->paid_amount;
        }
        foreach($sales as $sale)
        {
            $amountCredit = $amountCredit + $sale->remaning;
        }
        $sale = $sales->last();
        $products = Product::all();
        $totalProducts = $products->count();
        $customers = Customer::all();
        return view('vertical.index', compact('sale', 'totalSales','amountRecieved','amountCredit', 'totalProducts', 'customers'));
    }
    public function sale(Request $request, $id)
    {
        return $id;
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

    
    public function productActions(Request $request) //new
    {
        // return $request;
        if($request->addProduct != null)
        {
            $sizes = Size::all();
            $weights = Weight::all();
            $product = Product::find($request->edit);
            return view('admin.addProducts', compact('product', 'sizes', 'weights'));
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
            // return $request->delete;
            $product = Product::find($request->delete);
            // dd($product);
            $product->delete();
            return redirect()->route('viewProducts');

        }

    }
    public function viewProducts()
    {
        // return redirect()->route('viewProducts');
        
        // $sizes = Size::all();
        $products = Product::all();
        return view('vertical.products', compact('products'));

    }
    public function storeProducts(Request $request)
    {
        // return $request;
      
        $product = new Product();
        $product->title = $request->ProductTitle;
        $product->sale_price = $request->price;
        // $product->size_id = $request->size;
        // $product->weight_id = $request->weight;
        $weight = Weight::find($request->weight);
        $size = Size::find($request->size);
        $weight->products()->save($product);
        $size->products()->save($product);

        $product->save();
        
        // return $product->size;
        
        // foreach($request->sizes as $size)
        // {
        //     $product = new Product();
        //     $product->title = $request->ProductTitle;
        //     $product->sale_price = $request->price;
        //     $s = Size::find($size);
        //     $product->size_id = $s->id;
        //     $product->weight_id = 
        //     $product->save();
            // $product->sizes()->attach($s);
        // }
        // $weight->product_id = $product->id;
        // foreach($request->weights as $weight)
        // {
        //     $w = Weight::find($weight);
        //     $product->weights()->attach($w);
        // }
        return redirect()->route('viewProducts');
        // $products = Product::all();
        // return view('vertical.products', compact('size','products','weight'));


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
            return view('admin.customerDetails', compact('customer'));

        }
     }
     public function viewDailyExpense()
     {
         $dailyexpenses = DailyExpense::all();
        //  return $dailyexpenses;
         return view('admin.viewDailyExpens', compact('dailyexpenses'));
     }
     public function expenseActions(Request $request)
     {
        if($request->addexpense != null)
        {
            return view('admin.addExpense');
        }
        elseif($request->edit != null)
        {
            $expense =DailyExpense::find($request->edit);
            return view('admin.editExpense', compact('expense'));
        }
        elseif($request->delete != null)
        {
            $expense = DailyExpense::find($request->delete);
            $expense->delete();
            return redirect()->route('viewDailyExpense');

        }
        elseif($request->view != null)
        {
            $customer = Customer::find($request->delete);
            return view('admin.customerDetails', compact('customer'));

        }
     }
     public function editExpense(Request $request)
     {
         $expense = DailyExpense::find($request->editExpense);
         $expense->title = $request->title;
         $expense->amount = $request->amount;
         $expense->description = $request->description;
         $expense->save();
         return redirect()->route('viewDailyExpense');
     }
     public function storeExpense(Request $request) //new
     {
         $expense = new DailyExpense();
         $expense->title = $request->title;
         $expense->amount = $request->amount;
         $expense->description = $request->description;
         $expense->save();
         return redirect()->route('viewDailyExpense');
     }
     public function storeCustomer(Request $request) //new
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
     public function viewSales()
     {
        //  Session::flush();
        //  return "h";
         $products = Product::all();
         $customers = Customer::all();
         if(Session::has('cart'))
        {
            $cart = Session::get('cart');
            $total = $cart->totalPrice;
            return view('admin.sales',compact('products','customers','cart','total'));

        }
        $total = 0;
         return view('admin.sales',compact('products','customers', 'total'));
     }
     public function removeItem(Request $request, $id)
     {
        
        if(Session::has('cart'))
        {
            
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $qty = 0;
            $amount = 0;
            
            foreach($cart->items as $key=>$item)
            {
                if($item['item']['id'] == $id)
                {
                    if(($item['qty'] > 0) && ($item['price'] > 0 ))
                    {
                    $cart->items[$key]['qty'] = $item['qty'] - 1;
                    $cart->items[$key]['price'] = $item['item']['sale_price'] * $cart->items[$key]['qty'];
                    }
                }
            }   
               
                foreach($cart->items as $key=>$item)
                {
                    $qty = $qty + $cart->items[$key]['qty'] ;
                    $amount = $amount + $cart->items[$key]['price'];
                }
                $cart->totalQty = $qty;
                $cart->totalPrice = $amount;
                // dd($cart);   
                 $request->session()->put('cart', $cart);
                
                //  dd($cart);
            
            $products = Product::all();
            // dd($cart);
            // return $cart->totalPrice;
            $total = $cart->totalPrice;
            $customers = Customer::all();
            return view('admin.sales', compact('cart','products','total', 'customers'));
        }
 
     }
     public function checkout(Request $request)
     {
        
        if(Session::has('cart'))
        {
            // return $request->discount;
            $cart = Session::get('cart');
            // dd($oldCart);
            // $cart = new Cart($oldCart);
            $total = $cart->totalPrice - $request->discount;
            // return $total;
            return view('admin.checkout', compact('total',  'cart'));
        }
     }

     public function storeAmount(Request $request)
     {
         $paymentRecieved =  $request->payment;
         if($paymentRecieved >= 0)
         {
            $unpaid = $request->total - $paymentRecieved;
         }
         $customer = Customer::find($request->cid);
         $customer->unpaid_balance = $unpaid;
         $customer->save();
         $sale = new Sale();
         $sale->total = $request->total;
         $sale->paid_amount = $paymentRecieved;
         $sale->user_id = $customer->id;
         $sale->remaning = $unpaid;
         $sale->save();
         Session::flush();
         return redirect()->route('admin');
     }
     public function total(Request $request)
     {
        //  if($request->total != null)
        //  {
        $customerID = $request->cid;
            if(Session::has('cart'))
            {
                $cart = Session::get('cart');
                // Session::flush();
                // dd($cart);
                $subtotal = $request->subtotal;
                $discount = $request->discount;
                $total = $request->subtotal - $request->discount;
                return view('admin.checkout', compact('cart','subtotal','discount', 'total', 'customerID'));
   
            }
        //  }
        //  elseif($request->checkout != null)
        //  {
        //     if(Session::has('cart'))
        //     {
        //         $cart = Session::get('cart');
        //         $subtotal = $request->subtotal;
        //         $totalamount = $request->total;
        //         $discount = $request->discount;
        //         // return $request;
        //         return view('admin.checkout',compact('subtotal', 'totalamount','cart', 'discount'));
        //     }
        //  }
        
     }
     public function getAddToCart(Request $request, $id) //new
     {
        //  dd($request->wid);
        $product = Product::find($id);
        $weight = Weight::find($request->wid);
        $size = Size::find($request->sid);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // dd($oldCart) ;
        Session::flush();
        return "done";
               
        
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        // dd($cart);
        $total = $cart->totalPrice;
        $products = Product::all();
        $customers = Customer::all();
        $total = 0;
        return view('admin.sales', compact('cart','products','customers','total'));
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

    // public function viewProducts()
    // {
    //     $products = Product::all();
    //     return view('admin.products', compact('products'));
    // }
}