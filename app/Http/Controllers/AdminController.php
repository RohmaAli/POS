<?php

namespace App\Http\Controllers;
use App\Size;
use App\Weight;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        return view('vertical.index');
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
        $product->title = $request->title;
        $product->sale_price = $request->price;
        $product->save();
         $size = new Size();
         $size->title = $request->title;
         $size->width = $request->width;
         $size->length = $request->length;
         $size->product_id = $product->id;
         $size->save();

         $weight = new Weight();
         $weight->unit = $request->unit;
         $weight->total_weight = $request->total_weight;
         $weight->product_id = $product->id;
         $weight->save();
            return "done";
        
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
}