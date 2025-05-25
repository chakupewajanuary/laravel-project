<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function getproductdisplay()
    {
        $products = Product::all();
        return view('order', compact('products'));
    }

    // Handle customer orders
    public function customerOrder(Request $request)
    {
        $validated = $request->validate([
            'OrderDate' => 'required|date',
            'Status' => 'required|string|max:255',
            'ProductID' => 'required|exists:products,ProductID',
        ]);

        // Ensure customer is authenticated
        if (!Auth::guard('customer')->check()) {
            return redirect()->route('customer.login')->with('error', 'Please log in to place an order.');
        }

        $customer = Auth::guard('customer')->user();

        try {
            $order = Order::create([
                'OrderDate' => $validated['OrderDate'],
                'Status' => $validated['Status'],
                'ProductID' => $validated['ProductID'],
                'username' => $customer->username,
            ]);

            return redirect()->route('customer.order')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            Log::error("Order Placement Failed: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to place order. Please try again.');
        }
    }

    public function registerOrder(Request $request)
    {
        $validated = $request->validate([
            'OrderDate' => 'required|date',
            'Status' => 'required|string|max:255',
            'username' => 'required|exists:customers,username',
        ]);
        try {
            Order::create($validated);
            return redirect()->back()->with('success', 'Order registered successfully!');
        } catch (\Exception $e) {
            Log::error("Order Registration Failed: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to register order.');
        }
    }

    public function updateOrder(Request $request)
    {
        $validated = $request->validate([
            'OrderID' => 'required|exists:orders,OrderID',
            'OrderDate' => 'required|date',
            'Status' => 'required|string|max:255',
            'username' => 'required|exists:customers,username',
        ]);

        
        $order = Order::find($validated['OrderID']);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        try {
            $order->update($validated);
            return redirect()->back()->with('success', 'Order updated successfully.');
        } catch (\Exception $e) {
            Log::error("Order Update Failed: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update order.');
        }
    }
    public function deleteOrder(Request $request)
    {
        $validated = $request->validate([
            'OrderID' => 'required|exists:orders,OrderID',
        ]);

        $order = Order::find($validated['OrderID']);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        try {
            $order->delete();
            return redirect()->back()->with('success', 'Order deleted successfully.');
        } catch (\Exception $e) {
            Log::error("Order Deletion Failed: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete order.');
        }
    }
    public function edit($orderID)
    {
        $order = Order::find($orderID);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        return view('update_order', compact('order'));
    }

    public function getcustomer()
    {
        if (!Auth::guard('customer')->check()) {
            return redirect()->route('customer.login')->with('error', 'Please log in.');
        }

        $customer = Auth::guard('customer')->user();
        return view('placeorder', compact('customer'));
    }
}
