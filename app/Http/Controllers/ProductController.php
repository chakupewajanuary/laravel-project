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
            'productID'=>'required|string|unique:products',
            'name'=>'required|string|unique:products',
            'Description'=>'required|string',
            'Price'=>'required|numeric',
            'stock'=>'required|integer',
            'Picture'=>'required|image',
        ]);
        Product::create([
            'productID'=>$request->productID,
            'name'=>$request->name,
            'Description'=>$request->Description,
            'Price'=>$request->Price,
            'stock'=>$request->stock,
            'Picture'=>$request->Picture,
        ]);

    }
}
