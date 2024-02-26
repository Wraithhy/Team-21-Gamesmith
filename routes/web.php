<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\newProductController;
use App\Http\Controllers\userController;
use App\Http\Controllers\allProductsController;
use App\Http\Controllers\AboutUsController;

use App\Http\Controllers\ContactUsController;


Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home'); 
Route::group(['middleware' => ['auth','admin']], function () {
   Route::get('admin-home', [HomeController::class, 'adminHome'])->name('admin.home');
   Route::get('/product', [ProductController::class, 'index'])->name('product.index');
   Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
   Route::post('/product', [ProductController::class, 'store'])->name('product.store');
   Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
   Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
   Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
   Route::get('users', [userController::class, 'index']);
   Route::get('/users/{users}/edit', [userController::class, 'edit'])->name('user.edit');
   Route::put('/users/{user}/update',[userController::class, 'update'])->name('user.update');
});


Route::get("/",[newProductController::class,'index']);
Route::get("detail/{id}",[newProductController::class,'detail']);
Route::get("search",[newProductController::class,'search']);
//Route::post("add_to_cart",[newProductController::class,'addToCart']);
Route::get("cartlist",[newProductController::class,'cartList']); 
//Route::get("removecart/{id}",[newProductController::class,'removeCart']); 
Route::get("ordernow",[newProductController::class,'orderNow']); 
Route::post("orderplace",[newProductController::class,'orderPlace']);
Route::get("myorders",[newProductController::class,'myOrders']);
Route::get("allProducts",[allProductsController::class,'index']);
Route::get('aboutus', [AboutUsController::class, 'index']);
Route::get('contactus', [ContactUsController::class, 'index']);
Route::get('add-to-cart/{id}', [newProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [newProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [newProductController::class, 'remove'])->name('remove.from.cart');
