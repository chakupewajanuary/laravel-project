<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //register product
    public function register_Product(Request $request){
        //validation to inputs
        $request->validate([
            'ProductID'=>'required|string|unique:products',
            'name'=>'required|string|unique:products',
            'Description'=>'required|string',
            'Price'=>'required|numeric',
            'stock'=>'required|integer',
            'Picture'=>'required|image',
           'manufacturer_id'=>'required|string'
        ]);
         // Handle file upload properly
         if ($request->hasFile('Picture')) {
            $imagePath = $request->file('Picture')->store('product_images', 'public');
        } else {
            return back()->withErrors(['Picture' => 'Image upload failed.']);
        }
        try {
            //code...
            Product::create([
                'ProductID'=>$request->ProductID,
                'name'=>$request->name,
                'Description'=>$request->Description,
                'Price'=>$request->Price,
                'stock'=>$request->stock,
                'Picture'=>$imagePath,
                'manufacturer_id'=>$request->manufacturer_id,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            \Log::error('Product registration failed: ' . $th->getMessage());
            return back()->withErrors(['error' => 'Failed to save product.']);
        }
       

    }
     //am using Registration instead of store for default as laravel use for saving
     public function registerProduct(Request $request){
        $request->validate([
            'ProductID'=>'required|string|unique:products',
            'name'=>'required|string|unique:products',
            'Description'=>'required|string',
            'Price'=>'required|numeric',
            'stock'=>'required|integer',
            'Picture'=>'string',
            'manufacturer_id'=>'required',
        ]);
         // Create and save manufacturer record
         Product::create([
            'ProductID' => $request->ProductID,
            'name' => $request->name,
            'Description' => $request->Description,
            'Price' => $request->Price,
            'stock' => $request->stock,
            'Picture' => $request->Picture,
            'manufacturer_id' => $request->manufacturer_id,

           
        ]);

        //  // Save manufacturer record
        //  Manufacturer::create($request->all());

        // Redirect with success message
        return redirect()->back()->with('success', 'Product registered successfully!');
    }

    // public function getproduct(){
    //     $prod=Product::all();
    //     return view('product',compact('prod'));
    // }
    public function getproduct(){
        $prod=Product::get();
        return view('order',compact('prod'));
    }
}
