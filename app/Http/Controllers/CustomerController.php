<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }
    public function viewDailyExpense()
    {
        $user = auth()->user();
        return $user;
        return view('customer.dailyExpense', compact(''));
    }

   
    
}
