<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
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
}
