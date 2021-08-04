<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/product',[ProductController::class, 'product.index'] );
Route::post('/product',[ProductController::class, 'store'] );
Route::get('/product/{id}',[ProductController::class, 'show'] );
Route::put('/product/{id}',[ProductController::class, 'update'] );
Route::delete('/product/{id}',[ProductController::class, 'delete'] );
Route::get('/product/search/{name}',[ProductController::class, 'search'] );



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
