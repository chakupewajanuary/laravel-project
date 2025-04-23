<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //register product
    public function registerProduct(Request $request){
        //validation to inputs
        $request->validate([
            'ProductID'=>'required|string|unique:products',
            'name'=>'required|string|unique:products',
            'Description'=>'required|string',
            'Price'=>'required|numeric',
            'stock'=>'required|integer',
            'Picture'=>'required|image',
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
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            \Log::error('Product registration failed: ' . $th->getMessage());
            return back()->withErrors(['error' => 'Failed to save product.']);
        }
       

    }
}
