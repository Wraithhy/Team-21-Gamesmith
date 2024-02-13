<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class homepageController extends Controller
{
    function index(){
        $data = Products::all();
        return view('homepage',['products'=>$data]);
    }
}
