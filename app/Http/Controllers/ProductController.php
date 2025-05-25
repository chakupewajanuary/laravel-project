<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //register product
    public function registerProduct(Request $request){
       // Validate input
    $request->validate([
        // 'ProductID' => 'required|string|unique:products',
        'name' => 'required|string|unique:products',
        'Description' => 'required|string',
        'Price' => 'required|numeric',
        'stock' => 'required|integer',
        'Picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'manufacturer_id' => 'required|exists:manufacturers,manufacturer_id',
    ]);

    $path = $request->file('Picture')->store('photos','public');

    // Hifadhi data yote pamoja na picha
    $product= new Product();
        // $product->ProductID = $request->ProductID;
        $product->name = $request->name;
        $product->Description = $request->Description;
        $product->Price = $request->Price;
        $product->stock = $request->stock;
        $product->image_path = $path;
        //$product->Picture = $request->Picture;
        $product->manufacturer_id = $request->manufacturer_id;
     // Soma binary ya picha kutoka kwa input
    //  if ($request->hasFile('Picture')) {
    //     $image=$request->file('Picture');
    //     $product->Picture=file_get_contents($image);
    //      // $imageData = file_get_contents($request->file('Picture')->getRealPath());
    //  }




     $product->save();

    return redirect()->back()->with('success', 'Product registered with image successfully!');
       
    }
    // public function getproduct(){
    //     $prod=Product::all();
    //     return view('product',compact('prod'));
    // }
    public function getproduct(){
        $prod=Product::get(['name','image_path']);
        return view('order',compact('prod'));
    }
    // public function index(){
    //     return view('product');
    // }


       
    public function displayproduct(){
       $products= Product::all();
       return view('product',compact('products')); 
    }  

    public function orderNow($ProductID)
    {
        $product = Product::findOrFail($ProductID);
        return view('login', compact('product'));
    }
}
