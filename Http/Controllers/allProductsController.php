<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\Facades\DB;
class allProductsController extends Controller
{
    //
    function index()
    {
        $data= Product::all();

       return view('allProducts',['products'=>$data]);
    }
}
