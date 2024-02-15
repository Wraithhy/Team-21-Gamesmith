<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


use Session;
use Illuminate\Support\Facades\DB;
class newProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();

       return view('product',['products'=>$data]);
    }
    
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    
    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    
    public function addToCart(Request $req)
    {
        // Check if a user is authenticated
        if (Auth::check()) {
            // Get the currently authenticated user
            $user = Auth::user();
    
            // Create a new Cart instance and save it to the database
            $cart = new Cart;
            $cart->user_id = $user->id;
            $cart->product_id = $req->product_id;
            $cart->quantity = 1;
            $cart->save();
    
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    
    static function cartItem()
    {
        $userId=Auth::user()->id;
     return Cart::where('user_id',$userId)->count();
    }
    
    function cartList()
    {
        $userId=Auth::user()->id;
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    
    
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    
    
    function orderNow()
    {
        $userId=Auth::user()->id;
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
 
         return view('ordernow',['total'=>$total]);
    }
    
    
    function orderPlace(Request $req)
    {
        $userId=Auth::user()->id;
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
    
    
    function myOrders()
    {
        $userId=Auth::user()->id;
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }
}
