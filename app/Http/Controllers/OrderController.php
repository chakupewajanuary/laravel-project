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

    // return dd($request->all());
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
// update order placed
// public function updateOrder(Request $request,$orderID){
//     $request->validate([
//         'OrderID'=>'required|string|max:255|unique:orders,OrderID',
//         'OrderDate' => 'required|date',
//         'Status' => 'required|string|max:255',
//         'username' => 'required',
//     ]);
//     // find order by orderID
//     $order=Order::where('OrderID',$orderID)->first();
//     // check if the order exitsts
//     if (!$order) {
//         # code...
//         return response()->json(['error'=>'Order not found'],404);
//     }
//     //retrieviewing the Customer by username
//     $customer=Customer::where('username',$request->username)->first();
//     // check if customer exists
//     if (!$customer) {
//         # code...
//         return response()->json(['error'=>'Customer not found'],404);
//     }
//     // update the order
//     $order->update([
//         'OrderID'=>$request->OrderID,
//         'OrderDate'=>$request->OrderDate,
//         'Status'=>$request->Status,
//         'username'=>$request->username,
//     ]);
//     return response()->json(['message'=>'Order updated successfully','order'=>$order]);
// }

public function updateOrder(Request $request)
{
    $request->validate([
        'OrderID' => 'required|string|max:255',
        'OrderDate' => 'required|date',
        'Status' => 'required|string|max:255',
        'username' => 'required|string|max:255',
    ]);

    // Find the order
    $order = Order::where('OrderID', $request->OrderID)->first();
    if (!$order) {
        return redirect()->back()->withErrors(['OrderID' => 'Order not found']);
    }

    // Check if customer exists
    $customer = Customer::where('username', $request->username)->first();
    if (!$customer) {
        return redirect()->back()->withErrors(['username' => 'Customer not found']);
    }

    // Update the order
    $order->update([
        'OrderDate' => $request->OrderDate,
        'Status' => $request->Status,
        'username' => $request->username,
    ]);

    return redirect()->back()->with('success', 'Order updated successfully');
}

// delete order
public function deleteOrder(Request $request)
{
    $request->validate([
        'OrderID' => 'required|string|max:255',
    ]);

    $order = Order::where('OrderID', $request->OrderID)->first();

    if (!$order) {
        return redirect()->back()->with('error', 'Order not found.');
    }
    

    $order->delete();

    return redirect()->back()->with('success', 'Order deleted successfully.');
}




public function edit($orderID) {
    $order = Order::where('OrderID', $orderID)->first();

    if (!$order) {
        return redirect()->back()->with('error', 'Order not found');
    }

    return view('update_order', compact('order'));
}

// // trialling for the customer
// public function getcustomer(){
//     $customer=Customer::get();
//     return view('placeorder',compact('customer'));
// }

public function getcustomer()
{
    $username = session('customer_username');

    if ($username) {
        $customer = Customer::where('username', $username)->first();

        if ($customer) {
            return view('placeorder', compact('customer'));
        }
    }

    return redirect('/login')->with('error', 'Please log in.');
}


}
// // for model 
// public function submittingdata(Request $request){
//     // receive data (handle request)
//     $name=$request->orderID;
//     $date=$request->OrderDate;
//     $statu=$request->Status;

//     $ord= new Order();
//     // save data
//     $ord->orderID=$name;
//     $ord->OrderDate=$date;
//     $ord->$Status=$statu;


//     return redirect()->back()->with('success','Order placed successfully..')


// }
