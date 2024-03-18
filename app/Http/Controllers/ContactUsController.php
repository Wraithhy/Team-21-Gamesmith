<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\contactForm;
use App\Models\productReviews;
use Illuminate\Support\Facades\DB;


class ContactUsController extends Controller

{
    public function index()
    {
        return view('contactus');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'cEmail' => 'required|email|max:255|same:email',
            'contactPref' => 'required|array',
            'contactPref.*' => 'in:email,phone',
            'message' => 'required|string',
        ]);
    
        $validatedData['contactPref'] = json_encode($validatedData['contactPref']);
    
        $contactForm = new ContactForm($validatedData);
    
        $contactForm->save();
    
        return redirect('/');
    }

    public function show(){
        $productReviews = DB::table('product_reviews')
        ->select('products.name as product_name', 'users.name as user_name', 'product_reviews.message as product_message', 'products.id as product_id')
        ->join('products', 'product_reviews.product_id', '=', 'products.id')
        ->join('users', 'product_reviews.user_id', '=', 'users.id')
        ->get();

       

        return view('reviews', ['products' => $productReviews, 'reviews' => contactForm::all()]);
    }
    
}