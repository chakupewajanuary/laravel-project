<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    
public function store(Request $request)
{
    $validated = $request->validate([
        'OrderDate' => 'required|date',
        'Status' => 'required|string|max:255',
    ]);

    Order::create([
        'OrderDate' => $validated['OrderDate'],
        'Status' => $validated['Status'],
        'CustomerUsername' => Auth::user()->username, // use logged-in customer username
    ]);
    return redirect()->route('product');

    // return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
}
public function registerOrder(Request $request){
    $request->validate([
        'OrderID'=>'required|string|max:255|unique:orders,OrderID',
        'OrderDate' => 'required|date',
        'Status' => 'required|string|max:255',
        'username' => 'required',
    ]);
    // $customer=Customer::get();
    // $request->username===$customer->username
    $customer=Customer::where('username',$request->username)->first();
    if ($customer) {
        Order::create([
            'OrderID'=>$request->OrderID,
            'OrderDate'=>$request->OrderDate,
            'Status'=>$request->Status,
            'username'=>$request->username,
        ]);
        return redirect()->route('product');
    } else {
        # code...
        return response()->json(['error'=>'Customer not found '],404);
    }
}


// trialling for the customer
public function getcustomer(){
    $customer=Customer::get();
    return view('placeorder',compact('customer'));
}
}
