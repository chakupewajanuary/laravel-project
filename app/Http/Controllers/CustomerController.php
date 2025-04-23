<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'username' => 'required|string|max:255|unique:customers,username',
            'email' => 'required|email|unique:customers,email',
            'address' => 'required|string',
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);

          // Create a new Saler record
          Customer::create([
            'username' => $request->username,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Customer registered successfully!');
    }

    // public function store(Request $request)
    // {
    //     // Validate the form data
    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|email|unique:salers,email',
    //         'address' => 'required|string',
    //         'phone' => 'required|string',
    //     ]);

    //     // Create a new Saler record
    //     Saler::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'address' => $request->address,
    //         'phone' => $request->phone,
    //     ]);

    //     // Redirect back with success message
    //     return redirect()->back()->with('success', 'Saler registered successfully!');
    // }



    // function to handle login
    public function login(Request $request)
    {
        // Validate input 
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // Find customer by username
        $customer = Customer::where('username', $request->username)->first();
    
        // Verify password and login
        if ($customer && Hash::check($request->password, $customer->password)) {
            Auth::login($customer);
            return redirect()->route('order')->with('success', 'Login successful!');
        }
    
        return back()->withErrors(['username' => 'Invalid credentials']);
    }
    // User Logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login')->with('success', 'Logged out successfully!');
    // }


    //for retriewing data from database 
        //step
        //01--use model as import in the controller which do database oparations
        //02 define method for logic 
        // 03--register to the route
        
    public function chaku(){
        $data=Customer::get();
        // return $data;
        return view('chaku-list',compact('data'));
        
    }
}
