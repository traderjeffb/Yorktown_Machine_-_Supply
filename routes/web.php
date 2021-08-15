<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\MgtController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//employee
Route::get('employee.index', [employeeController::class, 'index'])->name('employee.index');
Route::get('employee.create',[employeeController::class, 'create'])->name('employee.create');
Route::get('employee.details/{id}',[employeeController::class, 'details'])->name('employee.details');
Route::post('employee.store',[employeeController::class, 'store'])->name('employee.store');
Route::get('employee.edit/{id}',[employeeController::class, 'edit'])->name('employee.edit');
Route::post('employee.update/{id}',[employeeController::class, 'update'])->name('employee.update');
Route::get('employee.delete/{id}',[employeeController::class, 'delete'])->name('employee.delete');
Route::get('employee.destroy/{id}',[employeeController::class, 'destroy'])->name('employee.destroy');

//Customer
Route::get('customer.index', [CustomerController::class, 'index'])->name('customer.index');
Route::get('customer.list', [CustomerController::class, 'getCustomers'])->name('customer.list');
Route::get('customer.details{id}', [CustomerController::class, 'index'])->name('customer.details');
Route::get('customer.edit{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::get('customer.create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer.store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customer.destroy/{id}',[CustomerController::class, 'destroy'])->name('customer.destroy');

//Product
Route::get('product.indexInternal',[ProductController::class, 'indexInternal'])->name('product.indexInternal');
Route::post('product.storeInternal', [ProductController::class, 'storeInternal'])->name('product.storeInternal');
Route::get('product.createInternal', [ProductController::class, 'createInternal'])->name('product.createInternal');
Route::get('product.addToCart/{id}', [ProductController::class, 'addToCart'])->name('product.addToCart');


//Customer Sales
Route::get('sale.sale', [SaleController::class, 'sale'])->name('sale.sale');

//Cart 
Route::post('cart.store', [CartController::class, 'store'])->name('cart.store');
Route::get('cart.cart', [CartController::class, 'cart'])->name('cart.cart');
Route::get('cart.addToCart', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::post('cart.addToCart', [CartController::class, 'addToCart'])->name('cart.addToCart');


//Management 
Route::get('mgt.index', [MgtController::class, 'index'])->name('mgt.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('/login');
