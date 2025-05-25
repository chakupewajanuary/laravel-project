<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    // Show the order form
    public function orderMake()
    {
        // Check if customer is authenticated
        if (!Auth::guard('customer')->check()) {
            return redirect()->route('customer.login')->with('error', 'Please log in first.');
        }

        $data = \App\Models\Product::all();
        return view("order", compact('data'));
    }

    // Register a new customer
    public function store(Request $request)
    {
        
        $request->validate([
            'username' => 'required|string|unique:customers,username',
            'email' => 'required|email|unique:customers',
            'address' => 'required|string',
            'phone' => 'required|string',
            'password' => 'required|string|min:6',
        ]);
        // dd($request->all());

        Customer::create([
            'username'    => $request->username,
            'email'    => $request->email,
            'address'  => $request->address,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('customer.login')->with('success', 'Customer registered successfully! Please login.');
    }

        // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username'    => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('customer')->attempt($credentials)) {
            $request->session()->regenerate();
            $customer = Auth::guard('customer')->user();
            $request->session()->put('customer_username', $customer->username);

            return redirect()->route('customer.order')->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'username' => 'Invalid credentials.',
        ])->withInput($request->only('username'));
    }

    // Logout customer
    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer.login')->with('success', 'Logged out successfully.');
    }

    // View customer list
    public function chaku()
    {
        $data = Customer::all();
        return view('chaku-list', compact('data'));
    }

}