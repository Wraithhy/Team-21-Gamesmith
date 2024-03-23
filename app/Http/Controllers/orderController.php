<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class orderController extends Controller
{
    public function index(){
        $orders = Order::select('users.name as user_name', 'products.name as product_name','orders.*')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->orderBy('orders.id')
        ->get();
        return view('customerOrder',['orders'=>$orders]);
    }

    public function processOrder($orderId)
    {
        $order = Order::find($orderId);
        if ($order) {
            $order->status = 'delivered';
            $order->save();
        }
        
        return redirect()->back();
    }
    
    
}
