<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function() {
    return view('home');
    
});

Route::prefix("admin")->group(function(){
    // home page landeing page.
    Route::get('/',[AdminController::class,"index"])->name('admin.index');
    // product routes
    Route::get('products/',[AdminController::class,"product"])->name('admin.product');
    Route::match(["post","get"],'products/add/',[AdminController::class,"insertProduct"])->name('productInsert');
    Route::delete("/delete/{id}",[AdminController::class,"deleteProduct"])->name("admin.product.delete");
    // category routes
    Route::get('categories/',[AdminController::class,"category"])->name('admin.category');
    Route::match(["post","get"],'category/add/',[AdminController::class,"insertCategory"])->name('admin.category.insert');
    Route::delete("/category/{id}",[AdminController::class,"deleteCategory"])->name("admin.category.delete");
    // coupon routes
    Route::match(["post","get"],'coupon/',[AdminController::class,"coupon"])->name('admin.coupon');
    // address routes
    Route::get('/address',[AdminController::class,"address"])->name('admin.address');
    // user route
    Route::get('/users',[AdminController::class,"users"])->name('admin.users');
    // order route
    Route::get('/orders',[AdminController::class,"orders"])->name('admin.orders');
    
});