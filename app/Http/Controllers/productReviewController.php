<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\productReviews;
use App\Models\product;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class productReviewController extends Controller
{
    public function index()
    {
        {
            $reviews = ProductReviews::all();
    
            return view('detail', ['reviews' => $reviews]);
        }
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
