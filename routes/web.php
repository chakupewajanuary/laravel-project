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

// form manufacturer to go the product register page
Route::get('/jamani',[ManufacturerController::class,'productreg'])->name('product.registration');
Route::post('/manufacturerlogin',[ManufacturerController::class,'manuLogin'])->name('manuLogin.log');

// Route::get('/manufacturer', function(){
//     return view('manufacturer');
// })->name('manufacturer');
Route::get('/adminlogin/manufacturer',[AdminController::class,'manufacture'])->name('manufacturer');

Route::get('/admin',function(){
    return view('admin');
});

// Public routes
// Public Authentication Routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('customer.register');

// Authentication routes
Route::post('/customer/login', [CustomerController::class, 'login'])->name('customer.do.login');
Route::post('/customer/register', [CustomerController::class, 'store'])->name('customer.store');


// Protected customer routes (requires authentication)

Route::get('customer/order', [CustomerController::class, 'orderMake'])->name('customer.order');
Route::middleware(['auth:customer'])->group(function () {
    Route::get('/order', [CustomerController::class, 'orderMake'])->name('customer.order');
    Route::post('/order/place', [OrderController::class, 'customerOrder'])->name('order.today');
    Route::post('/customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');
    Route::get('/customer/profile', [OrderController::class, 'getcustomer'])->name('customer.profile');
});

// Admin/Other routes
Route::get('/customers', [CustomerController::class, 'chaku'])->name('customers.list');

// ✅ FIXED: Single order route with proper authentication
Route::get('/order', [OrderController::class, 'getproductdisplay'])->name('order')->middleware('auth:customer');

// 23rd may 2025 - from product to customer to order 
Route::get('/order/create', [OrderController::class, 'showOrderForm'])->name('orders.create');
Route::post('/order', [OrderController::class, 'customerOrder'])->name('order.today');

//saler form submision receiving 
Route::post('/saler/store', [SalerController::class, 'store'])->name('saler.store');

//customer form submision receiving 
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');

//for getting or browsing all customer from the data base 
Route::get('chaku-list',[CustomerController::class,'chaku']);

//from the databases received
Route::get('dis', [SalerController::class, 'index'])->name('salers.index');

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

Route::get('/displayadmin',function(){
    return view('displayadmin');
})->name('displayadmin');

Route::get('/wed',function(){
    return view('wed');
})->name('wed');

Route::get('/placeorder', function () {
    return view('placeorder');
})->name('placeorder');

Route::get('/displayadmin',[AdminController::class,'index']);
Route::get('/wed',[AdminController::class,'learn'])->name('admin.learn');
Route::post('/placeorder',[OrderController::class,'registerOrder'])->name('Order.registerOrder');

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

Route::get('/product', [ProductController::class, 'displayproduct'])->name('product');
Route::get('/login/{ProductID}', [ProductController::class, 'orderNow'])->name('order.now');