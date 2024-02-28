<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\contactForm;

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
    
}