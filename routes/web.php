<?php

use Illuminate\Support\Facades\Route;
//for form logic from saler controller
use App\Http\Controllers\SalerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProgramController;


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
// for order route
Route::get('/order',function(){
    return view('order');
})->name('order');

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




// Route to show the create order form
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create')->middleware('auth');

// Route to handle storing the order
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store')->middleware('auth');

// for manufacurer login
Route::get('/manufacturerlogin',function(){
    return view('manufacturerlogin');
})->name('manufacturerlogin');
Route::get('/student',function(){
    return view('student');
})->name('student');

Route::get('/adminlogin',function(){
    return view('adminlogin');
})->name('adminlogin');
Route::post('/adminlogin',[AdminController::class,'login'])->name('admin.login');

Route::post('/student',[StudentController::class,'store'])->name('students.store');

Route::get('/programs',function(){
    return view('programs');
})->name('programs');

Route::get('/programs/create', [ProgramController::class, 'create'])->name('programs.create');
Route::post('/programs', [ProgramController::class, 'store'])->name('programs.store');

// Route::get('/displayadmin',[AdminController::class,'getAdimn']);

Route::get('/displayadmin',function(){
    return view('displayadmin');
})->name('displayadmin');

Route::get('/wed',function(){
    return view('wed');
})->name('wed');




Route::get('/placeorder', function () {
    return view('placeorder');
})->name('placeorder'); // ✅ add the route name!







// Route::get('/displayadmin',[CustomerController::class,'getCustomer']);
// Route::get('/displayadmin',[ManufacturerController::class,'index']);
Route::get('/displayadmin',[AdminController::class,'index']);
Route::get('/wed',[AdminController::class,'learn'])->name('admin.learn');
Route::post('/placeorder',[OrderController::class,'registerOrder'])->name('Order.registerOrder');


Route::get('/placeorder',[OrderController::class,'getcustomer'])->name('placeorder');


Route::get('/orders/{orderID}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{orderID}', [OrderController::class, 'update'])->name('orders.update');
Route::get('/update_order', function(){
    return view('update_order');
})->name('update_order');

Route::get('/remakeorder',function(){
    return view('remakeorder');
})->name('remakeorder');

Route::put('/remakeorder',[OrderController::class,'updateOrder'])->name('updateOrder.order');



Route::get('/deleteorder',function(){
    return view('deleteorder');
})->name('deleteorder');
Route::delete('/deleteorder', [OrderController::class, 'deleteOrder'])->name('deleteOrder.order');

Route::get('/order',[ProductController::class,'getproduct']);