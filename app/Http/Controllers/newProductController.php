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

       return view('homepage',['products'=>$data]);
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
    

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
    
        $cart = session()->get('cart', []);
    
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
            ];
        }
    
        session()->put('cart', $cart);
        $user = auth()->user(); 
        $cartItem = new Cart;
        $cartItem->user_id = $user->id;
        $cartItem->product_id = $id; 
        $cartItem->quantity = 1;
        $cartItem->save();
    
        return redirect()->back();
    }
    
    

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
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
    
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
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
        if(Auth::check()){
            $userId=Auth::user()->id;
            $orders= DB::table('orders')
             ->join('products','orders.product_id','=','products.id')
             ->where('orders.user_id',$userId)
             ->get();
             return view('myorders',['orders'=>$orders]);
        }
        return view('auth.login');
    }
}






    /*public function addToCart(Request $req)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $product_id = $req->product_id;
            $quantity = $req->quantity;

    
            $existingCartItem = Cart::where('user_id', $user)
                ->where('product_id', $product_id)
                ->first();    
            if ($existingCartItem) {
                $existingCartItem->update(['quantity' => $existingCartItem->quantity + $req->quantity]);
            } else {
                $cart = new Cart;
                $cart->user_id = $user->id;
                $cart->product_id = $req->product_id;
                $cart->quantity = $req->quantity;
                $cart->save();
            }
    
            return redirect('/')->with('success', 'Product added to cart.');
        } else {
            return redirect('/login');
        }
    }*/
    