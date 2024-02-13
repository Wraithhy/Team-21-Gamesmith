<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\allProductsController;

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\homepageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/', function () {
  //  return view('homepage');
//});


Route::get('/', [homepageController::class, 'index']);


Route::get('/products', function () {

    return view('products');

});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/contactus', [ContactUsController::class, 'index']);


Route::get('/about-us', [AboutUsController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/checkout', function () {
    return view('checkout-page');
});
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::get("allproducts",[allProductsController::class,'index']);

