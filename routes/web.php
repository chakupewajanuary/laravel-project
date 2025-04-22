<?php

use Illuminate\Support\Facades\Route;
//for form logic from saler controller
use App\Http\Controllers\SalerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// home page
Route::get('/home', function(){
    return view('home');
})->name('home');

// login 
Route::get('/login', function(){
    return view('login');
})->name('login');

//about
Route::get('/about', function(){
    return view('about');
})->name('about');

//saler
Route::get('/saler', function(){
    return view('saler');
})->name('saler');

//register 
Route::get('/register', function(){
    return view('register');
})->name('register');

//contact
Route::get('/contact', function(){
    return view('contact');
})->name('contact');
//product
Route::get('/product', function(){
    return view('product');
})->name('product');


//dis
Route::get('/dis', function(){
    return view('dis');
})->name('dis');
//customers page
Route::get('/customer', function(){
    return view('customer');
})->name('customer');
//chaku
Route::get('/chaku-list', function(){
    return view('chaku-list');
})->name('chaku-list');

Route::get('/jamani', function(){
    return view('jamani');
})->name('jamani');

Route::get('/manufacturer', function(){
    return view('manufacturer');
})->name('manufacturer');

Route::get('/admin',function(){
    return view('admin');
});


//saler form submision receiving 
Route::post('/saler/store', [SalerController::class, 'store'])->name('saler.store');


//customer form submision receiving 
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');



//for getting or browsing all customer from the data base 
Route::get('chaku-list',[CustomerController::class,'chaku']);


//from the databases received
Route::get('dis', [SalerController::class, 'index'])->name('salers.index');
// Route::get('saler', [SalerController::class, 'addlist'])->



//user login route 
Route::post('/login', [CustomerController::class, 'login'])->name('customer.login');

//manufacturer form submision receiving 
Route::post('/manufacturer/Registration', [ManufacturerController::class, 'Registration'])->name('manufacturer.Registration');

Route::post('/jamani',[ProductController::class,'registerProduct'])->name('product.registerProduct');

Route::post('/admin',[AdminController::class,'adminRegister'])->name('admin.adminRegister');