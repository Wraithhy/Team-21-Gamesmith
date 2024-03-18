<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\productReviews;
use App\Models\product;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class productReviewController extends Controller
{
    public function index()
    {
        $productReviews = DB::table('product_reviews')
            ->select('products.name as product_name', 'users.name as user_name', 'product_reviews.message as product_message')
            ->join('products', 'product_reviews.product_id', '=', 'products.id')
            ->join('users', 'product_reviews.user_id', '=', 'users.id')
            ->get();

           
    
            return view('/detail', ['reviews' => $productReviews]);
        
    }
    

    public function store(Request $request){
         $request->validate([
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'message' => 'required|string',
        ]);

        productReviews::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
}
